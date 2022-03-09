<?php
/* @var $this yii\web\View */

/* @var $model Personal[] */

use app\models\Personal;

// $model = [new Personal()];

use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'Данные пользователей';
?>

<h1>Данные пользователей</h1>
<p>Таблица с данными пользователей, где можно добавлять, редактированть, данные пользователей</p>
<?= Html::a('Добавить персональные данные нового пользователя', Url::toRoute(['add']), ['class' => 'btn btn-primary']) ?>
<br><br>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <?php $labels = $model[0]->attributeLabels();
            foreach ($labels as $key => $value) : ?>
                <th><?= $value ?></th>
            <? endforeach; ?>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model as $value) : ?>
            <tr>
                <?php foreach ($labels as $key => $label) : ?>
                    <td><?= ($key != "Gender") ? $value[$key] : (($value[$key] == true) ? "Мужчина" : "Женщина") ?></td>
                <? endforeach ?>
                <td><?= Html::a('Изменить', '/personal/view/' . $value->Id, ['class' => 'btn btn-warning']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>