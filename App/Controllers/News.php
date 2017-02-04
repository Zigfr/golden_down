<?php

namespace App\Controllers;


use App\Models\Authors;
use App\View;

class News
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {
        echo 'Счетчик';
    }

    protected function actionIndex()
    {
        $this->view->title = 'My cool site';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ .'/../templates/index.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = Authors::findByID($id);
        $this->view->display(__DIR__ .'/../templates/One.php');
}