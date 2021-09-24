<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class StoreController extends Controller
{
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->layout = "store";
        $this->view->title = "Electro";
        Yii::setAlias("@storeImg", "/img/store");
    }

    public function actionIndex()
    {
        $this->view->title .= " | Catalog";
        return $this->render('index');
    }

    public function actionProduct()
    {
        $this->view->title .= " | Product";
        return $this->render('product');
    }
}