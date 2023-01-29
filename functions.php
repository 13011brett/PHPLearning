<?php

function urlIs($value):bool{
    return ($_SERVER['REQUEST_URI'] === $value);
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function authorize($condition, $status = Response::FORIBDDEN){
        if(!$condition){
            abort($status);
        }
    }



?>
