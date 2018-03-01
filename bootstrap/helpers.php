<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/1
 * Time: 10:52
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}