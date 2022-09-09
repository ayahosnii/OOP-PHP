<?php

/*
 * 1- Namespaces and dynamic languages features
 * 2- namespace keyword and __NAMESPACE__  constant
 * 3- Aliasing/Importing
 * 4- Global Space
 * 5- Autoloadng
 * */

//namespace Main\Controllers;

class TestController
{
    public static function wakeup()
    {
        echo 'wake up my friends';
    }
}

function sayWelcome()
{
    echo 'Welcome to PHP';
}

define('Welcome', 1);

// 1- unqualified names TestController
// 2- Qualified, prefixed name Controllers\TestController
// 3- Fully qualified, prefixed with global operator \Main\Controllers\TestController

/*$test = new \Main\Controllers\TestController(); //Main\Controllers\TestController*/

/*$a = 'TestController';
$var = new $a;
$b = 'sayWelcome';
$b();*/

/*$a = __NAMESPACE__ . '\TestController';
$var = new $a;
$b = 'sayWelcome';
$b();*/

/*$var = namespace\Main\;
var_dump($var);*/

var_dump(new namespace\TestController());
namespace\TestController::wakeup();
echo namespace\Welcome;