<?php
    require __DIR__ .'/autoload.php';

    $data = new \App\Db();
    $sql = 'CREATE TABLE Arting (id SERIAL, cool INT, words TEXT)';
    $data->execute($sql);