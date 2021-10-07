<?php

namespace app\models;

use Exception;
use yii\base\Model;

class ArrayModel extends Model
{

    private int $sum = -1;
    /**
     * @var int[]
     */
    private array $arr = [];
    private int $min;
    private int $max;
    private int $power;

    /**
     * @param int $n number of array elements
     * @param int $min minimum element value
     * @param int $max maximum element value
     * @throws Exception if an appropriate source of randomness cannot be found.
     */
    public static function Generate(int $n, int $min, int $max): ArrayModel
    {
        $arr = [];
        for ($i = 1; $i <= $n; $i++) {
            $arr[] = random_int($min, $max);
        }
        return self::Initial($arr, $min, $max);
    }

    private static function Initial(array $arr, int $min = null, int $max = null): ArrayModel
    {
        $instance = new self();
        $instance->arr = $arr;
        if ($min) {
            $instance->min = $min;
        } else {
            $instance->min = min($arr);
        }
        if ($max) {
            $instance->max = $max;
        } else {
            $instance->max = max($arr);
        }
        $instance->power = 1;
        return $instance;
    }

    public static function WithArray(array $arr): ArrayModel
    {
        return self::Initial($arr);
    }

    public function getSum(): int
    {
        return $this->sum;
    }

    public function getArr(): array
    {
        return $this->arr;
    }

    public function getMin(): int
    {
        return $this->min;
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function getDimension(): int
    {
        return count($this->arr);
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['arr', 'power'], 'required'],
            [['power', 'sum'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'arr' => 'array',
            'power' => 'array power',
            'sum' => 'sum array',
        ];
    }

    public function sum(): int
    {
        $this->sum = 0;
        foreach ($this->arr as $value) {
            $this->sum += $value;
        }
        return $this->sum;
    }

    public function setPower(int $power): void
    {
        if ($power == 1) {
            return;
        }
        $this->power += $power;
        foreach ($this->arr as $key => $value) {
            $this->arr[$key] = $value ** $power;
        }
    }

}
