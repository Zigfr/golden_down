<?php
    require __DIR__ .'/autoload.php';

$data = new \App\Models\User();
$data->email = '@dhp';
$data->name = 'Bity';
$data->insert();

