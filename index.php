<?php

    require __DIR__ . '/autoload.php';

    $url = $_SERVER['REQUEST_URI'];

    $controller = new \App\Controllers\News();

    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = 'Index';
    }

    $controller->action($action);