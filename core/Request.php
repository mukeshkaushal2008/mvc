<?php
class Request
{

    public static function uri()
    {
        $cureenturl = '';
        $cureenturl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $parsed_url = substr($cureenturl, strrpos($cureenturl, '/') + 1);
        return ($cureenturl == 'mvc') ? '' : $parsed_url;
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
