<?php
    require __DIR__ .'/autoload.php';

    $users = \App\Models\User::findAll();

    var_dump($users);
    echo '<br />';
    echo '<br />';

   // echo \App\Models\User::$table;

