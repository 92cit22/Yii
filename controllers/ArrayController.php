<?php

namespace app\controllers;

use app\models\ArrayModel;
use Exception;
use yii\web\Controller;

class ArrayController extends Controller
{
    /**
     * @throws Exception if an appropriate source of randomness cannot be found.
     */
    public function actionIndex(int $N, int $min, int $max): string
    {
        $model = ArrayModel::Generate($N, $min, $max);
        return $this->render('generate', compact("model"));
    }

    public function actionSum(array $arr): string
    {
        $model = ArrayModel::WithArray($arr);
        $model->sum();
        return $this->render('generate', compact("model"));
    }

    public function actionEdit(array $arr, int $power): string
    {
        $model = ArrayModel::WithArray($arr);
        $model->power = $power;
        return $this->render('generate', compact('model'));
    }
}
