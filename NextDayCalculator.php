<?php

/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 6/9/17
 * Time: 08:25
 */
class NextDayCalculator
{
    function findNextDay($day, $month, $year){
        $nextDay = $day + 1;
        $nextMonth = $month;
        switch ($month) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                if($day === 31){
                    $nextMonth++;
                    $nextDay = 1;
                }
                break;
            case 4:
            case 6:
            case 9:
            case 11:
            if($day === 30){
                $nextMonth++;
                $nextDay = 1;
            }
            break;
            case 2:
                if($this->isLeapYear($year)){
                    if($day === 29){
                        $nextMonth++;
                        $nextDay = 1;
                    }
                } else {
                    if($day === 28){
                        $nextMonth++;
                        $nextDay = 1;
                    }
                }
            break;
        }
        return $nextDay . '/' . $nextMonth . '/' . $year;
    }

    private function isLeapYear($year){
        if($year % 4 === 0){
            if($year % 100 === 0){
                if($year % 400 === 0){
                    return true;
                }
            }else{
                return true;
            }
        }
        return false;
    }
}