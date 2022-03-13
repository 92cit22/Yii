<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;

$this->title = 'Добавление товара';
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Для добавления товара заполните ВСЕ, представленные ниже:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            // 'template' => "{label}\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-5\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
        ],
        'options' => [
            'enctype' => 'multipart/form-data',
        ],
    ]); ?>

    <?= $form->field($model, 'Name')->textInput() ?>
    <?= $form->field($model, 'CategoryId')
        ->dropDownList(ArrayHelper::map(Category::find()->all(), 'Id', 'Name')) ?>
    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'myPicture')->fileInput() ?>
    <?= $form->field($model, 'myFiles[]')->fileInput(['multiple' => true]) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11" style="margin: 0 0 0 175px">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>