<?php

namespace Knox\Utils;

class Timebox
{

    private $second;

    private function __construct(int $second)
    {
        $this->second = $second;
    }

    public static function fromMinutes(int $minutes)
    {
        return new static($minutes * 60);
    }

    public static function fromMinute()
    {
        return self::fromMinutes(1);
    }

    public static function fromHours(int $hour)
    {
        return new static($hour * 60 * 60);
    }

    public static function fromHour()
    {
        return self::fromHours(1);
    }

    public static function fromDays(int $day)
    {
        return new static($day * 24 * 60 * 60);
    }

    public static function fromDay()
    {
        return self::fromDays(1);
    }

    public static function fromMonths(int $months, int $gap = 30)
    {
        return new static($months * $gap * 24 * 60 * 60);
    }

    public static function fromMonth(int $gap = 30)
    {
        return self::fromMonths(1, $gap);
    }

    public static function fromYears(int $years, bool $leap = false)
    {
        return new static($years * (365 + ($leap ? 1 : 0)) * 24 * 60 * 60);
    }

    public static function fromYear(bool $leap = false)
    {
        return self::fromYears(1, $leap);
    }

    public function inSecond()
    {
        return $this->second;
    }

    public function inMinute()
    {
        return $this->second / 60;
    }

    public function inHour()
    {
        return $this->second / 60 / 60;
    }

    public function inDay()
    {
        return $this->second / 60 / 60 / 24;
    }

    public function inMonth(int $gap = 30)
    {
        return $this->second / 60 / 60 / 24 / $gap;
    }

    public function inYear(bool $leap = false)
    {
        return $this->second / 60 / 60 / 24 / (365 + ($leap ? 1 : 0));
    }
}