<?php

namespace App\SubContainer\Auth\Service;

class Facebook extends SocialAbstract
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
		$this->setName('facebook');
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
			$this->setAppTokens(),
			$this->setScope([
				'email',
				'public_profile'
			]),
			$this->setParam('options', [
				'identity.fields' => [
					'email',
					'name',
					'picture.width(99999)'
				]
			])
		]);

		return $this->setupConfig();
	}
}
