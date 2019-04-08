<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/7/19
 * Time: 3:59 PM
 */

//------------AUTOLOAD---------------
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $path = 'libs/';
    if (file_exists($path.$className . '.php')) {
        include $path.$className.'.php';
        return true;
    }
    return false;
}