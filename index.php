<?php
    require __DIR__ .'/autoload.php';

$user = new \App\Models\User();

    $view = new \App\View();

    $view->users = \App\Models\User::findAll();
   $view->title = 'My cool site';

 echo $view->render(__DIR__ .'/App/templates/index.php');
