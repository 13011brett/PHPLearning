<?php
namespace Core;
class Validator
{
    public static function textValidator($value, $min = 1, $max = INF){
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
//        if(strlen($value) < $min) return "Text needs to be at least {$min} characters.";
//        else if ((strlen($value) >= $max)) return "Text can't be longer than {$max} characters.";
//        else return null;
    }
}