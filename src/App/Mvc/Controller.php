<?php

namespace App\Mvc;

use App\Phrase;
use App\Util\ClassFinder;
use App\Repository\Config\Schema;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\Event;

abstract class Controller
{
	protected $routing;
	
	protected $request;
	protected $user;
	protected $event;
	protected $template;
	protected $phrase;
	protected $dispatcher;

	protected $settings;
	protected $datetime;
	protected $language;
	protected $default_language;
	protected $languageInit;
	protected $loader;

	public function __construct($routing)
	{
		$this->routing = $routing;

		\App\App::parameterContainer();
		$this->primaryController();
	}

	protected function primaryController()
	{
		$this->settings = \App\Phrase::getSettings();

		$this->dispatcher = new EventDispatcher();

		$this->request = new \App\Repository\Request();

		$this->loader = new \Twig\Loader\FilesystemLoader(
			\App\Template\Twig\Loader::templateLoader($this->settings->default_theme)
		);
		$this->template = new \App\Template\Twig\Environment($this->loader, [
			'debug' => true,
			'cache' => APPLICATION_SELF . '/Cache/Template'
		]);

		$this->language = new \App\SubContainer\Language();
		$this->language->Init();
		$this->languageInit = $this->language->getCache();
		$this->default_language = $this->language->getDefaultLanguageData();
		\date_default_timezone_set($this->default_language['timer']->zone);

		$this->phrase = new \App\Phrase();
		$this->phrase->setContainer($this->request);
		$this->phrase->setupRouteParams();

		$this->datetime = new \App\Entity\DateTime($this->default_language);

		$this->user = new \App\Authentication\Auth($this->default_language, $this->languageInit);
		$this->user->saveSession();

		foreach (\App\Template\Twig\Loader::getClasses() as $extension)
		{
			$this->template->addExtension(new $extension());
		}

		$this->templaterController();

		if ($this->user->loggedIn() && $this->user->visitor()->use_twofa)
		{
			if ($this->verifyTwoStep())
			{
				if ($this->request->getPathInfo() != '/two-step-verification' && $this->request->getPathInfo() != '/two-step-verification/verify' && $this->request->getPathInfo() != '/two-step-verification/reset')
				{
					return $this->request->redirect("{$this->settings->site_url}/two-step-verification", false);
				}
			}
		}

		$this->template->setDispatcher(
			[
				'dispatcher' => $this->dispatcher,
				'routing' => $this->routing,
				'phrase' => $this->phrase,
				'settings' => $this->settings,
				'user' => $this->user,
				'request' => $this->request,
				'lang' => \array_merge((array) $this->languageInit, (array) $this->default_language),
				'language' => $this->language,
				'loader' => $this->loader,
				'template' => $this->template
			]
		);

		$this->getEventDispatchers();

		\App\RemoveTrailingSlash::removeTrailingSlash($this->request);
	}

	public function templaterController()
	{
		$this->template->addGlobal(
			'app',
			[
				'build' => [
					'version' => \App\App::$build['version'],
					'id' => \App\App::$build['versionId'],
					'code' => \App\App::versionNaming(),
					'title' => \App\App::$build['versionTitle'],
					'support_php_version' => \App\App::$_supportPhpVersion
				],
				'event' => [
					'getNavs' => $this->getEventMenuItems(),
					'getScripts' => $this->getEventScriptItems(),
					'getStyles' => $this->getEventStyleItems()
				],
				'timer' => [
					'now' => [
						'fulldate' => $this->datetime->getFullDateNow()
					],
					'date' => $this->datetime
				],
				'settings' => \App\Repository\Set::setArray($this->settings),
				'public_dir' => \App\SubContainer\AppSub::getPublicDir(),
				'ajax_path' => $this->phrase->getAjaxPath(),
				'theme' => [
					'dir' => $this->settings->site_url . '/' . PUBLIC_DIR . '/themes'
				],
				'session' => \App\App::$session,
				'cookie' => $_COOKIE,
				'request' => $this->request,
				'post' => new \App\Repository\Post(),
				'phrase' => $this->phrase,
				'user' => $this->user,
				'visitor' => $this->user->visitor(),
				'csrf_token' => (new \App\SecurityProtocols\CrossSiteRequestForgery())->getEncodedToken(),
				'sub' => [
					'device' => new \App\SubContainer\Device(),
					'user' => [
						'link' => new \App\SubContainer\User\Link($this->settings, $this->languageInit, $this->phrase)
					],
					'discussion' => [
						'shortcode' => new \App\SubContainer\Discussion\Shortcode()
					],
					'post' => [
						'pagination' => new \App\SubContainer\Post\Pagination()
					],
					'theme' => [
						'compile' => new \App\SubContainer\Theme\Compile(),
						'loader' => new \App\Template\Twig\Loader
					],
					'lang' => [
						'string' => $this->languageInit,
						'parse' => $this->language,
						'default' => $this->default_language
					],
					'editor' => [
						'attachments' => new \App\SubContainer\Attachment\Attachment(),
						'emoticons' => new \App\Renderer\BBCode\Str\Emoticons(),
						'buttons' => new \App\SubContainer\Editor\Buttons(),
						'postProcess' => (new \App\Renderer\BBCode\Editor\PostProcess())->getModifications()
					],
					'renderer' => [
						'bbcode' => new \App\Renderer\BBCode\Parser($this->settings, $this->languageInit, $this->phrase)
					]
				],
				'string' => [
					'auth' => [
						'social' => new \App\String\Social()
					],
					'notification' => new \App\String\Notifications(),
					'messages' => new \App\String\Messages(),
					'forum' => new \App\String\Forum(),
					'profile' => new \App\String\Profile(),
					'attachments' => new \App\String\Attachments(),
					'render' => [
						'title' => new \App\Renderer\Title()
					]
				]
			]
		);
	}

	public function dumpPrint(array $array)
	{
		if (is_array($array))
		{
			return var_dump($array);
		}

		return false;
	}

	public static function warningUserWithSession($text)
	{
		return \App\App::$session->set('session_alert_message', $text);
	}

	public function setEventConfig()
	{
		if (is_null($this->event))
		{
			throw new \Exception("Application event is not found.");
		}

		$event = $this->event;

		$parameters = explode(
			'::',
			$event->application->start
		);

		$event_class = new $parameters[0];
		$function = $parameters[1];

		$event_class->{$function}($event);

		return $event_class;
	}

	public function getEventMenuItems()
	{
		$eventListener = $this->getEventListeners();
		foreach ($eventListener as $event)
		{
			if (isset($event->navItems))
			{
				foreach ($event->navItems as $navs)
				{
					$navItems[] = \App\Repository\Set::setArray($navs);
				}
			}
		}

		if (isset($navItems) && is_array($navItems))
		{
			$prices = array_column($navItems, 'order');
			array_multisort($prices, SORT_ASC, $navItems);

			return $navItems;
		}
	}

	public function getEventScriptItems()
	{
		$eventListener = $this->getEventListeners();
		foreach ($eventListener as $event)
		{
			if (isset($event->jsItems))
			{
				foreach ($event->jsItems as $scripts)
				{
					$jsItems[] = $scripts;
				}
			}
		}

		if (isset($jsItems) && is_array($jsItems))
		{
			return \App\Repository\Set::setArray($jsItems);
		}
	}

	public function getEventStyleItems()
	{
		$eventListener = $this->getEventListeners();
		foreach ($eventListener as $event)
		{
			if (isset($event->styleItems))
			{
				foreach ($event->styleItems as $styles)
				{
					$styleItems[] = $styles;
				}
			}
		}

		if (isset($styleItems) && is_array($styleItems))
		{
			return \App\Repository\Set::setArray($styleItems);
		}
	}

	public function getEventDispatchers()
	{
		$eventListener = $this->getEventListeners();
		foreach ($eventListener as $event)
		{
			if (isset($event->application))
			{
				$parameters = explode(
					'::',
					$event->application->start
				);

				$event_class = new $parameters[0];
				$function = $parameters[1];

				$event_class->$function($event);

				if (method_exists($event_class->getEvent(), 'initTemplateModification'))
				{
					$this->dispatcher->addListener("_templateInit_Dispatcher_{$event->event_id}", [$event_class->getEvent(), 'initTemplateModification']);
				}
			}
		}
	}

	protected function getEventListeners($getDisabled = false)
	{
		return \App\Repository\Config\Schema::eventInitialize($getDisabled);
	}

	protected function verifyTwoStep()
	{
		if (isset($_COOKIE['2fa']))
		{
			$key = \App\Repository\CookieEncrypt::getInstance()->get('2fa');

			if ($key != $this->user->visitor()->login_key)
			{
				return true;
			}
		}
		else
		{
			return true;
		}

		return false;
	}
}
