<?php
/**
 * Created by PhpStorm.
 * User: 熊勇
 * Date: 2018/9/10
 * Time: 16:48
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}