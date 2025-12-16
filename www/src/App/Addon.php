<?php

namespace App;

abstract class Addon
{
	/**
	 * [$event Eventdata for AppId]
	 * @var [object]
	 */
	protected $event;

	/**
	 * [$event_id Unique Application ID]
	 * @var integer
	 */
	protected $event_id;

	/**
	 * [Event Starting event]
	 * @param object $data
	 */
	public function Event(object $data)
	{
		$this->event = $data;

		if ($this->event_id != $this->event->event_id)
		{
			throw new \Exception("The unique ID does not match for Event name: {$this->event->name}");
		}
	}

	/**
	 * [getRoutes Get routes this addon]
	 * @return [string]
	 */
	public function getRoutes()
	{
		return APPLICATION_SELF . "/Addons/{$this->event->application->routing}";
	}

	/**
	 * [getRoutePrefix Get route prefix.Ex: /panel]
	 * @return [string]
	 */
	public function getRoutePrefix()
	{
		return $this->event->application->prefix;
	}

	/**
	 * [getNamePrefix Get name prefix.Ex: Alium]
	 * @return [string]
	 */
	public function getNamePrefix()
	{
		return $this->event->name;
	}

	/**
	 * [getEventId Get event unique application ID]
	 * @return [string]
	 */
	public function getEventId()
	{
		return $this->event->event_id;
	}

	/**
	 * [getPath Get application path]
	 * @return [string]
	 */
	public function getPath()
	{
		return APPLICATION_SELF . "/Addons/{$this->event->name}";
	}

	/**
	 * getExtendedPath Get extended application path from name
	 *
	 * @param  mixed $extendAppName
	 * @return string
	 */
	public function getExtendedPath($extendAppName = null)
	{
		if (!is_null($extendAppName))
		{
			return APPLICATION_SELF . "/Addons/{$this->event->application->name}/Extending/{$extendAppName}";
		}
		else
		{
			return APPLICATION_SELF . "/Addons/{$this->event->application->name}/Extending";
		}
	}

	/**
	 * [getEditablePath Get editable path]
	 * @return [string]
	 */
	public function getEditablePath()
	{
		return APPLICATION_SELF . "/Addons/{$this->event->application->editable}";
	}

	/**
	 * [getHtmlPath Get Addon template list path]
	 * @return [string]
	 */
	public function getTemplatePath($name = null)
	{
		if (is_null($name))
		{
			return $this->getEditablePath();
		}
		else
		{
			return $this->getPath() . "/Templates/{$name}";
		}
	}

	/**
	 * [getEventBrand Get event brands.]
	 * @return [array]
	 */
	public function getEventBrand()
	{
		return [
			'developer' => $this->event->developer,
			'description' => $this->event->description,
			'name' => $this->event->name,
			'version' => $this->event->event_id
		];
	}
}
