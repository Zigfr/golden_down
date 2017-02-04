<?php

require __DIR__ .'/autoload.php';

//isset($view->desk);

$data= \App\Models\Authors::findAll();
$news = \App\Models\News::findAll();

var_dump($news[2]->author);
