<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArrayModel */
/* @var $form ActiveForm */
$this->registerJsFile('/js/array/js.js');
?>
<h1>Your array:</h1>
<p>
    <?php foreach ($model->arr as $key => $value): ?>
        <?= ($key + 1) . " => $value" ?><br>
    <?php endforeach; ?>
</p>
<p>
    <?= Html::label('dimension', 'dimension') ?>
    <?= Html::input('number', 'dimension', $model->dimension, ['id' => 'dimension']) ?>
    <?= Html::label('min', 'min') ?>
    <?= Html::input('number', 'min', $model->min, ['id' => 'min']) ?>
    <?= Html::label('max', 'max') ?>
    <?= Html::input('number', 'max', $model->max, ['id' => 'max']) ?>
    <?php $generateLink = Html::buttonInput('Regenerate') ?>
    <?= Html::a($generateLink, ['array/index', 'N' => $model->getDimension(), 'max' => $model->getMax(), 'min' => $model->getMin()]) ?>
</p>
<p>
    <?php if ($model->sum !== -1): ?>
        <?= "get sum: $model->sum" ?>
    <?php else: ?>
        <?= Html::a("array sum", Url::toRoute(["array/sum", 'arr' => implode('|', $model->arr)])) ?>
    <?php endif; ?>
</p>
<p>
    <?= Html::input('number', 'power', null, ['id' => 'inPower']) ?>
    <?php $generateLink = Html::buttonInput('Edit') ?>
    <?= Html::a($generateLink, Url::toRoute(['array/edit', 'arr' => implode('|', $model->arr), 'power' => 2])) ?>
</p>