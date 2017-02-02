<?php

require __DIR__ .'/autoload.php';
use \App\Models\User;
/*
    $data = new \App\Db();
   // $sql = 'SELECT * FROM users WHERE id =:id';
    //$sql = 'INSERT INTO users (email, name, author) VALUES ( :email, :name, :author)';
   // $sql ='UPDATE `users` SET `email`=:email,`name`=:name,`author`=:author WHERE `id`=:id';
    $sql ='DELETE FROM  `users` WHERE id =:id';
    //$mass = [':id'=>2];
    $mass = [':id'=>2];
   // $mass = [':email'=>'metro@yandex.ru', ':name'=> 'Viktor', ':author'=>'Herman Greef'];
    //$mass = ['id'=>2,':email'=>'ro@ydex.ru', ':name'=> 'tor', ':author'=>'Greef'];
    $res = $data->query($sql, $mass, 'App\Models\User');
    var_dump($res);

    $not = new \App\Models\User();
    $res = $not->findByID(1);
    var_dump($res);
*/

$users = \App\Models\User::findAll();

function send_mail(User $user, string $massage)
{
    echo $massage .' '. $user->email;
}
$massage = 'Mail goes to ';
send_mail($users[3], $massage);
