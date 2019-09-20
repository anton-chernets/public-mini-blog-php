<?php

namespace helpers;


class StringHelper
{
    /**
     * Человекопонятная дата из timestamp
     *
     * @param $string string
     * @param $countSymbols string
     * @return string
     */
    public static function pruningString($string, $countSymbols){
        return mb_substr($string, 0, $countSymbols);
    }

}