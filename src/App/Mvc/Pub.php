<?php

/**
 * This file stores the 'Public' data required for running the software in the Routing section and outputs the URL.
 * Symfony/Routing&HttpFoundation is used for routing | https://symfony.com/doc/current/create_framework/routing.html #version: 6.3
 *
 * This file is one of Par2's core files for MVC.
 */

namespace App\Mvc;

use App\UrlMatcher;
use App\RouteCollection as ApplicationRouting;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

class Pub
{
	public function __construct()
	{
		$begin = \App\App::beginInstall();
		if (isset($begin['status']))
		{
			if ($begin['status'] == 'fail')
			{
				\Binaries\RuntimeErrors::Show($begin['error']);
				return;
			}
		}

		$this->matchRoutes();
	}

	/**
	 * matchRoutes
	 * 
	 * The function that writes the parameters entered in the browser and directs them.
	 * 
	 * @return void
	 */
	protected function matchRoutes()
	{
		$routes = (object) $this->initRoutes();

		$context = new RequestContext();
		$context->fromRequest(Request::createFromGlobals());

		try
		{
			$matcher = new UrlMatcher($routes->routes, $context);

			$appRouting = new ApplicationRouting($routes->routes, $matcher);

			$params = $matcher->match($context->getPathInfo());

			$parameters = explode(
				'::',
				$params['_controller']
			);

			if ($routes->parameterBag->has('AppBundle'))
			{
				$controller = new $parameters[0](
					$appRouting,
					$routes->parameterBag
				);
			}
			else
			{
				$controller = new $parameters[0]($appRouting);
			}
			$container = $parameters[1];

			/**
			 * Primary setup for RouteCollection and Application Controllers.
			 */
			//$controller->primarySetup();

			/**
			 * Starting application.Ex: App\Mvc\Pub\Index -> container($params)
			 */
			$controller->{$container}($params);
		}
		catch (ResourceNotFoundException $e)
		{
			/**
			 * If is not resource exist, output the 404.
			 */
			return (new \App\Mvc\Pub\AppException($appRouting))->notFound();
		}
	}

	/**
	 * initRoutes
	 *
	 * @return void
	 */
	public static function initRoutes(): object
	{
		$fileLocator = new FileLocator(array(__DIR__));
		$loader = new YamlFileLoader($fileLocator);

		/**
		 * [$routes We are writing custom class for RouteCollection because TrailingSlash is prevented us.]
		 * @var [object]
		 */
		$routes = new RouteCollection();

		$parameterBag = new \App\Repository\Attributes();

		/**
		 * [$eventListener Addons/Events listener and gets data.]
		 * @var [object]
		 */
		$eventListener = \App\Repository\Config\Schema::eventInitialize();
		if (!is_null($eventListener))
		{
			foreach ($eventListener as $event)
			{
				if (isset($event->application))
				{
					if (isset($event->application->routing))
					{
						$parameters = explode(
							'::',
							$event->application->start
						);

						$event_class = new $parameters[0];
						$function = $parameters[1];

						$event_class->{$function}($event);

						$app = $loader->import($event_class->getRoutes());
						$app->addPrefix($event_class->getRoutePrefix());
						$app->addNamePrefix($event_class->getNamePrefix() . "_");

						$routes->addCollection($app);

						if (isset($event->event_id))
						{
							$items[$event->name] = $event;
						}
					}
				}
			}

			if (isset($items))
			{
				$parameterBag->set('AppBundle', $items);
			}
		}

		/**
		 * [$public_app Public App is a standard application]
		 * @var [object]
		 */
		$public_app = $loader->import(\App\Repository\Config\Schema::routeInitialize());
		$public_app->addNamePrefix('PublicApp_');

		/**
		 * We direct the collections.
		 */
		$routes->addCollection($public_app);

		return \App\Repository\Set::setObject([
			'routes' => $routes,
			'parameterBag' => $parameterBag
		]);
	}
}
