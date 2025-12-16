<?php

namespace App\SubContainer\Auth\Service;

abstract class SocialAbstract
{
	protected $name;
	protected $provider;
	protected $_params;

	/**
	 * [getName Get service name]
	 * @return [string]
	 */
	protected function getName()
	{
		return $this->name;
	}

	/**
	 * [setName Set service name]
	 * @param string $name
	 */
	protected function setName(string $name)
	{
		$this->name = $name;
	}

	/**
	 * [getProvider Get available Auth Services from DB]
	 * @return [array]
	 */
	protected function getProvider()
	{
		$this->provider = (new \App\Entity\Social())->getSiteFromName($this->name);
	}

	/**
	 * [getApi Get api key and secret]
	 * @return [object]
	 */
	protected function getApi()
	{
		return \App\Repository\Set::setObject(
			preg_split("/\r\n|\n|\r/", $this->provider['api_keys'])
		);
	}

	/**
	 * [addParam Add parameter]
	 * @param array $params
	 */
	protected function addParam(array $params)
	{
		return $this->_params[$this->name];
	}

	/**
	 * [setParam Set extra parameter current service]
	 * @param [string] $name
	 * @param [string] $value
	 */
	protected function setParam($name, $value)
	{
		return $this->_params[$this->name][$name] = $value;
	}

	/**
	 * [setAppId Set ApplicationId for oAuth]
	 * @param [string] $applicationId
	 */
	protected function setAppId($applicationId)
	{
		return $this->_params[$this->name]['applicationId'] = $applicationId;
	}

	/**
	 * [setAppSecret Set ApplicationSecret for oAuth]
	 * @param [string] $applicationSecret
	 */
	protected function setAppSecret($applicationSecret)
	{
		return $this->_params[$this->name]['applicationSecret'] = $applicationSecret;
	}

	/**
	 * [setAppTokens Set service tokens one function]
	 */
	protected function setAppTokens()
	{
		$this->setAppId($this->getApi()->{0});
		$this->setAppSecret($this->getApi()->{1});
	}

	/**
	 * [setScope Set scopes current service]
	 * @param array $scopes
	 */
	protected function setScope(array $scopes)
	{
		foreach ($scopes as $scope)
		{
			$this->_params[$this->name]['scope'] = $scopes;
		}
	}

	/**
	 * [setupConfig Setup and get config array]
	 * @return [array]
	 */
	protected function setupConfig()
	{
		return ['provider' => $this->_params];
	}
}
