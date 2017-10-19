<?php

namespace Tests\Unit;

use Knox\Utils\TimeLength;
use Tests\TestCase;

class TimeLengthTest extends TestCase
{

    /** @test */
    public function it_can_get_one_minute_in_second()
    {
        $this->assertEquals(60, TimeLength::fromMinute()->inSecond());
    }

    /** @test */
    public function it_can_get_minutes_in_second()
    {
        $minutes = 5;

        $this->assertEquals($minutes * 60, TimeLength::fromMinutes($minutes)->inSecond());
    }

    /** @test */
    public function it_can_get_one_hour_in_second()
    {
        $this->assertEquals(60 * 60, TimeLength::fromHour()->inSecond());
    }

    /** @test */
    public function it_can_get_hours_in_second()
    {
        $hours = 12;

        $this->assertEquals($hours * 60 * 60, TimeLength::fromHours($hours)->inSecond());
    }

    /** @test */
    public function it_can_get_one_day_in_second()
    {
        $this->assertEquals(24 * 60 * 60, TimeLength::fromDay()->inSecond());
    }

    /** @test */
    public function it_can_get_days_in_second()
    {
        $days = 20;

        $this->assertEquals($days * 24 * 60 * 60, TimeLength::fromDays($days)->inSecond());
    }

    /** @test */
    public function it_can_get_one_regular_month_in_second()
    {
        $this->assertEquals(30 * 24 * 60 * 60, TimeLength::fromMonth()->inSecond());
    }

    /** @test */
    public function it_can_get_regular_months_in_second()
    {
        $months = 3;

        $this->assertEquals($months * 30 * 24 * 60 * 60, TimeLength::fromMonths($months)->inSecond());
    }

    /** @test */
    public function it_can_get_one_regular_year_in_second()
    {
        $this->assertEquals(365 * 24 * 60 * 60, TimeLength::fromYear()->inSecond());
    }

    /** @test */
    public function it_can_get_regular_years_in_second()
    {
        $years = 2;

        $this->assertEquals($years * 365 * 24 * 60 * 60, TimeLength::fromYears($years)->inSecond());
    }
}
