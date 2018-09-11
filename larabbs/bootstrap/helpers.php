<?php
/**
 * Created by PhpStorm.
 * User: 熊勇
 * Date: 2018/9/11
 * Time: 11:44
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}