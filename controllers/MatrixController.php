<?php

namespace app\controllers;

use app\models\MatrixModel;

class MatrixController extends \yii\web\Controller
{
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->layout = 'matrix';
        $this->view->title = 'matrix';

    }

    public function actionIndex(): string
    {
        $model = new MatrixModel();
        return $this->render('index', compact('model'));
    }
}
