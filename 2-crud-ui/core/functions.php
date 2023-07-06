<?php

require_once("globals.php");

function url(string $path = null):string
{
    $url = $_SERVER['HTTPS'] ? "https" : "http";
    $url .= "://";
    $url .= $_SERVER["HTTP_HOST"];
    if(!is_null($path)){
        $url .= "/";
        $url .= $path;
    }
    return $url;
}