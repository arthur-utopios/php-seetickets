<?php

class Autoloader
{
    private const EXTENSION = ".php";

    public static function load(): void {
        spl_autoload_register(function($class) {
            require('classes/' . $class . self::EXTENSION);
        });
    }
}