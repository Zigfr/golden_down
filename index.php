<?php
    require __DIR__ .'/autoload.php';
/*
$user = new \App\Models\User();
$user->email = 'uoods@gmail.com';
$user->name = 'Rootovich';
//$user->insert();

    $view = new \App\View();

    $view->users = \App\Models\User::findAll();
    $view->title = 'My cool site';
    $view->desk = null;

   isset($view->desk);
    die;

    $view->display(__DIR__ .'/App/templates/index.php');
*/

$data= \App\Models\Authors::findAll();
$news = \App\Models\News::findAll();


//isset($data->authors);

var_dump($news);
