<?php

namespace App\SubContainer\Auth\Service;

class Twitter extends SocialAbstract
{
	/**
	 * [__construct Constractor is needed for Init Auth Api]
	 */
	public function __construct()
	{
		/**
		 * The API to be used here must be defined.
		 * We used the Github class for this and it's very broad.
		 *
		 * We recommend that you take a look at the support list and read the documentation before adding the api.
		 * https://github.com/SocialConnect/auth
		 * https://socialconnect.lowl.io/providers.html
		 */
		$this->setName('twitter');
		$this->getProvider();
	}

	/**
	 * [getConfig Get Api config array, this is an extremely important function for AuthService.]
	 * @return [array]
	 * 
	 * See "Configure AuthService" title.
	 * https://socialconnect.lowl.io/installation.html
	 */
	public function getConfig()
	{
		$this->addParam([
			$this->setAppTokens()
		]);

		return $this->setupConfig();
	}
}
