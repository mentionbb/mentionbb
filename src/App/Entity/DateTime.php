<?php

/**
 * This file has date/time features.
 *
 * Component by: Nesbot/Carbon | https://github.com/briannesbitt/Carbon
 */

namespace App\Entity;

use Carbon\Carbon;

class DateTime
{
	private $locale;

	public function __construct($defaultLanguageData)
	{
		$this->locale = \App\Repository\Set::setObject(
			$defaultLanguageData
		);
	}

	/**
	 * Get fulldate.
	 * @template {{ app.timer.now.fulldate }}
	 */
	public function getFullDateNow()
	{
		return Carbon::now($this->locale->timer->zone)
			->locale($this->locale->id)
			->translatedFormat($this->locale->timer->format);
	}

	/**
	 * Get fulldate but simple.
	 * @template {{ app.timer.date.getSimpleDate }}
	 */
	public function getSimpleDate()
	{
		return Carbon::now($this->locale->timer->zone)
			->locale($this->locale->id)
			->translatedFormat($this->locale->timer->date_format_simple);
	}

	/**
	 * [getTimestamp Get unique time]
	 * @return [int]
	 */
	public static function getTimestamp()
	{
		return Carbon::now()->timestamp;
	}

	/**
	 * [getFullDate Get fulldate from Locale]
	 * @param  [int] $timestamp
	 * @return [mixed]
	 *
	 * Style: 25 Şubat 2020
	 */
	public function getFullDate($timestamp)
	{
		return Carbon::createFromTimestamp($timestamp)
			->locale($this->locale->id)
			->translatedFormat($this->locale->timer->date_format);
	}

	/**
	 * Get now year.
	 * @template {{ app.timer.date.getYear }}
	 */
	public function getYear()
	{
		return Carbon::now($this->locale->timer->zone)
			->locale($this->locale->id)
			->translatedFormat($this->locale->timer->year_format);
	}

	/**
	 * Human readable time.Ex: one minute ago.
	 * @template {{ app.timer.date.toHumanReadable }}
	 */
	public function toHumanReadable($timestamp)
	{
		return Carbon::createFromTimestamp($timestamp)
			->locale($this->locale->id)
			->diffForHumans();
	}

	/**
	 * [addHour Adds hour to the current time.]
	 * @param [int] $hour
	 */
	public function addHour($hour)
	{
		return Carbon::now()
			->add($hour, 'hour')
			->timestamp;
	}

	/**
	 * [addMinute Adds minute to the current time.]
	 * @param [int] $minute
	 */
	public function addMinute($minute)
	{
		return Carbon::now()
			->add($minute, 'minutes')
			->timestamp;
	}

	/**
	 * [createFromTimestamp Converts from readable clock to timestamp.]
	 * @param  [string] $timestamp
	 * @return [int]
	 */
	public function createFromTimestamp($timestamp)
	{
		return Carbon::createFromTimestamp($timestamp);
	}

	/**
	 * [toIso Converts ISO8601.]
	 * @param  [string] $timestamp
	 * @return [int]
	 */
	public function toIso($timestamp)
	{
		return Carbon::createFromTimestamp($timestamp)
			->toIso8601String();
	}

	public function addDay($day)
	{
		return Carbon::now()->addDay($day)
			->locale($this->locale->id)
			->translatedFormat($this->locale->timer->date_format);
	}

	public function getAllTimezones()
	{
		return \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);
	}
}
