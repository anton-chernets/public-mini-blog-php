<?php

namespace helpers;

class DateTimeHelper
{
    /**
     * Человекопонятная дата из timestamp
     *
     * @param $timestamp string
     * @return string
     */
    public static function getDate($timestamp){
        return date('Y-m-d', $timestamp);
    }

    /**
     * Текущий год
     *
     * @return string
     */
    public static function getCurrentYear(){
        return date('Y');
    }

}