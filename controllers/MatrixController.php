<?php

namespace app\controllers;

use app\models\MatrixModel;
use Yii;

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
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

        }

        return $this->render('index', compact('model'));
    }

    public function actionGenerate()
    {
        $model = new MatrixModel();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->generate();
        }

        return $this->render('generate', compact('model'));
    }
    public function actionSelect()
    {
        $model = new MatrixModel();
        if ($model->load(Yii::$app->request->post()))
            return $this->render('generate', compact('model'));
        return $this->redirect(['index']);
    }
}
