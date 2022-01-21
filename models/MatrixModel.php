<?php

namespace app\models;

use yii\base\Model;

class MatrixModel extends Model
{
    public int $rows;
    public int $columns;
    public int $min;
    public int $max;
    public int $select;
    public int $type;

    public array $arr = [];

    public function rules(): array
    {
        return [
            [['rows', 'columns', 'max', 'min'], 'required', 'message' => 'Это обязательное поле'],
            [['rows', 'columns', 'max', 'min'], 'integer', 'min' => 1, 'message' => 'Введите число больше 1'],
        ];
    }

    public function generate(): void
    {
        switch ($this->type) {
            case 1:
                $this->generateMatrix();
                break;
            case 2:
                $this->generateTopMatrix();
                break;
            case 3:
                $this->generateBotMatrix();
                break;

        }
    }

    private function generateMatrix(): void
    {
        for ($i = 0; $i > $this->rows; $i++) {
            $this->arr[$i] = [];
            for ($j = 0; $j < $this->columns; $j++) {
                $this->arr[$i][$j] = random_int($this->min, $this->max);
            }
        }
    }


    private function generateTopMatrix(): void
    {

    }

    private function generateBotMatrix(): void
    {
    }

}