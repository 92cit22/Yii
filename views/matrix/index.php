<?php
/* @var $this yii\web\View */

/* @var $model MatrixModel */

use app\models\MatrixModel;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(['method' => 'post']); ?>

    <h4>Размер</h4>
    <div class="field-row">
        <?= $form->field($model, 'rows')->input('number', ['placeholder' => 'Строк'])->label('') ?>
        <?= $form->field($model, 'columns')->input('number', ['placeholder' => 'Столбцов'])->label('') ?>
    </div>

    <h4>Значения</h4>
    <div class="field-row">
        <?= $form->field($model, 'min')->input('number', ['placeholder' => 'min'])->label('') ?>
        <?= $form->field($model, 'max')->input('number', ['placeholder' => 'max'])->label('') ?>
    </div>
<?= Html::submitButton('Создать', ['class' => 'btn-submit']) ?>