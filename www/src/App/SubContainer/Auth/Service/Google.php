<?php

namespace App\SubContainer\Auth\Service;

class Google extends SocialAbstract
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
		$this->setName('google');
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
		/*return [
			'provider' => [
				'google' => [
					'applicationId' => $this->getApi()->{0},
					'applicationSecret' => $this->getApi()->{1},
					'scope' => [
						'https://www.googleapis.com/auth/userinfo.email',
						'https://www.googleapis.com/auth/userinfo.profile'
					],
					'options' => [
						'auth.parameters' => [
							'hd' => 'gmail.com',
						]
					]
				]
			]
		];*/

		$this->addParam([
			$this->setAppTokens(),
			$this->setScope([
				'https://www.googleapis.com/auth/userinfo.email',
				'https://www.googleapis.com/auth/userinfo.profile'
			]),
			$this->setParam('options', [
				'auth.parameters' => [
					'hd' => '@gmail.com'
				]
			])
		]);

		return $this->setupConfig();
	}
}
