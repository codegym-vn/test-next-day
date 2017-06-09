<?php
use PHPUnit\Framework\TestCase;
require_once './NextDayCalculator.php';

/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 6/9/17
 * Time: 08:26
 */
class NextDayCalculatorTest extends TestCase
{
    function testFindNextDay(){
        $calculator = new NextDayCalculator();
        $result = $calculator->findNextDay(1, 1, 2017);
        $this->assertEquals($result, '2/1/2017');
    }

    function testFindNextDaySameMonthSameYear(){
        $calculator = new NextDayCalculator();
        $result = $calculator->findNextDay(2, 1, 2017);
        $this->assertEquals($result, '3/1/2017');
    }

    function testFindNextDay31DaysDifferentMonthSameYear(){
        $calculator = new NextDayCalculator();
        $result = $calculator->findNextDay(31, 3, 2017);
        $this->assertEquals($result, '1/4/2017');
    }

    function testFindNextDay30DaysDifferentMonthSameYear(){
        $calculator = new NextDayCalculator();
        $result = $calculator->findNextDay(30, 4, 2017);
        $this->assertEquals($result, '1/5/2017');
    }

    function testFindNextDay29FebLeapYear(){
        $calculator = new NextDayCalculator();
        $result = $calculator->findNextDay(29, 2, 2016);
        $this->assertEquals($result, '1/3/2016');
    }

    function testFindNextDay28FebNotLeapYear(){
        $calculator = new NextDayCalculator();
        $result = $calculator->findNextDay(28, 2, 2017);
        $this->assertEquals($result, '1/3/2017');
    }


}