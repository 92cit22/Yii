<?php
/* @var $this yii\web\View */

/* @var $model Personal */


use app\models\Personal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'form-id',
]);
?>

<?= $form->field($model, 'LastName')->textInput(['placeholder' => 'Фамилия']) ?>
<?= $form->field($model, 'FirstName')->textInput(['placeholder' => 'Имя']) ?>
<?= $form->field($model, 'MiddleName')->textInput(['placeholder' => 'Отчество']) ?>
<?= $form->field($model, 'Series')->textInput(['placeholder' => '1234']) ?>
<?= $form->field($model, 'Number')->textInput(['placeholder' => '123456']) ?>
<?= $form->field($model, 'Birthdate')->input('date', ['max' => date('Y-m-d'), 'min' => (new DateTime(date('Y-m-d') . ' -60 year'))->format('Y-m-d')]) ?>
<?= $form->field($model, 'Gender')->radioList([true => 'Мужчина', false => 'Женщина']) ?>
<?= $form->field($model, 'Tel')->input('tel', ['placeholder' => '+7(996)256-86-63', 'pattern' => '\+7\([0-9]{3}\)[0-9]{3}\-[0-9]{2}\-[0-9]{2}']) ?>
<?= $form->field($model, 'Check')->input('checkbox', ['checked' => $model->Check])->label('Вы подтверждаете, что мы можем использовать ваши данные как хотим') ?>

<?= Html::submitButton('Сохранить') ?>

<?php ActiveForm::end(); ?>