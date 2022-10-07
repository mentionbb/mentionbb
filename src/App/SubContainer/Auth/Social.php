<?php

namespace App\SubContainer\Auth;

class Social
{
	private $settings;

	private $provider;
	private $name;
	private $redirectUri;

	public function __construct(string $provider)
	{
		$this->settings = (new \App\Entity\Settings())->getSettings();

		$this->name = $provider;
		$this->redirectUri = sprintf("%s/auth/\${provider}", $this->settings->site_url);

		$httpClient = new \SocialConnect\HttpClient\Curl();

		$httpStack = new \SocialConnect\Common\HttpStack(
			$httpClient,
			new \SocialConnect\HttpClient\RequestFactory(),
			new \SocialConnect\HttpClient\StreamFactory()
		);

		$collectionFactory = null;

		$this->service = new \SocialConnect\Auth\Service(
			$httpStack,
			new \SocialConnect\Provider\Session\Session(),
			$this->getConfig(),
			$collectionFactory
		);

		$this->provider = $this->service->getProvider($provider);
	}

	public function getProvider()
	{
		header('Location: ' . $this->provider->makeAuthUrl());
	}

	public function getData()
	{
		$provider = $this->service->getProvider($this->name);
		$accessToken = $provider->getAccessTokenByRequestParameters($_GET);

		return $provider->getIdentity($accessToken);
	}

	private function getConfig()
	{
		$authService = (new \App\String\Social())->getSiteFromName($this->name)['callback'];
		$authService = new $authService;

		$config = [
			'redirectUri' => $this->redirectUri
		];

		return array_merge($config, $authService->getConfig());
	}
}
