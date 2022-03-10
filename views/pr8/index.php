<?php

use yii\bootstrap4\Html;

$this->title = 'Данные товаров';
?>

<h1>Данные товаров</h1>
<p>Таблица с данными товаров</p>
<?= Html::a('Добавить новый товар', 'add', ['class' => 'btn btn-primary']) ?>
<br><br>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            <th scope="col">Изображение</th>
            <th scope="col">Категория</th>
            <th scope="col">Доп. файлы</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($model as $value) {
        ?>
            <tr>
                <td><?= $value['Name'] ?></td>
                <td><?= $value['Description'] ?></td>
                <td><a href="<?= $value['Picture'] ?>"><?= str_replace(Upload, '', $value['Picture']) ?></a></td>
                <td><?= $value['category']['Name'] ?></td>
                <td>
                    <?php
                    foreach ($value['files'] as $key => $file)
                        if ($key != 0)
                            echo '<br><a href="' . $file['Url'] . '">' . str_replace(Upload, '', $file['Url']) . '</a>';
                        else
                            echo '<a href="' . $file['Url'] . '">' . str_replace(Upload, '', $file['Url']) . '</a>';
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>