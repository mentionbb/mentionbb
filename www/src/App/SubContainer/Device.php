<?php

namespace App\SubContainer;

use DeviceDetector\DeviceDetector;
use DeviceDetector\Parser\Device\AbstractDeviceParser;

class Device
{
	private $device;

	public function getInfo()
	{
		AbstractDeviceParser::setVersionTruncation(AbstractDeviceParser::VERSION_TRUNCATION_NONE);

		$device = new DeviceDetector($_SERVER['HTTP_USER_AGENT']);

		$device->discardBotInformation();
		$device->skipBotDetection();

		$device->parse();

		return json_encode([
			'client' => $device->getClient(),
			'os' => $device->getOs(),
			'device' => $device->getDeviceName(),
			'brand' => $device->getBrandName(),
			'model' => $device->getModel()
		]);
	}

	public function setDeviceJson($data)
	{
		$this->device = json_decode($data);
	}

	public function getClient()
	{
		switch (\mb_strtolower($this->device->device))
		{
			case 'desktop':
				return $this->desktopClientString();
				break;

			case 'phablet':
				return $this->mobileClientString();
				break;

			case 'smartphone':
				return $this->mobileClientString();
				break;
		}
	}

	public function getHtmlIconName()
	{
		return \mb_strtolower($this->device->device) . " " . \mb_strtolower($this->device->os->name);
	}

	private function desktopClientString()
	{
		return $this->device->os->name;
	}

	private function mobileClientString()
	{
		if (isset($this->device->brand))
		{
			return "{$this->device->brand} {$this->device->model}";
		}
		else
		{
			return $this->device->model;
		}
	}
}
