<?php


use Core\Response;

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

function abort($code = 404) {
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}


function authorize($condition, $status = Response::FORIBDDEN){
        if(!$condition){
            abort($status);
        }
    }

    function base_path($value){
    return BASE_PATH . $value;
    }

    function view($value, $attributes = []){

        extract($attributes);

        require base_path('views/') . $value;
    }



?>
