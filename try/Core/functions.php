<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

//if not working remove :bool
function urlIs($value): bool
{
    return  $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
{
    http_response_code($code);
    include_once base_path(("views/{$code}.php"));
    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }

    return true;
}

//if not working remove :string
function base_path($path): string
{
    return BASE_PATH . $path;
}

function view($path, $attribute = [])
{
    extract($attribute);

    include_once base_path('views/' . $path);
}
