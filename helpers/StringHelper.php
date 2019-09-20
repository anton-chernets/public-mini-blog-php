<?php

namespace helpers;


class StringHelper
{
    /**
     * Обрезка строк с первого символа и по заданный
     *
     * @param $string string
     * @param $countSymbols string
     * @return string
     */
    public static function pruningString($string, $countSymbols){
        return mb_substr($string, 0, $countSymbols);
    }

}