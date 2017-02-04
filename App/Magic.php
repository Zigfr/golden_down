<?php

namespace App;


trait Magic
{
    protected $data;

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public function __isset($k)
    {
        if(isset($this->data[$k])){
            echo 'ALl ok!!!';
        }else{
            echo 'Smth bad!!!';
        }
    }
}