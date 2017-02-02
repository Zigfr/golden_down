<?php

namespace App;


trait Singletone
{
    protected static $instance;
    protected function __construct()
    {
    }

    public static function instance()
    {
        if(null === static::$instance){
            static::$instance = new static ;
        }
        return static::$instance;
    }
    
}