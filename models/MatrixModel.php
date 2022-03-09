<?php

namespace app\models;

use yii\base\Model;

class MatrixModel extends Model
{
	public $rows;
	public $columns;
	public $min;
	public $max;
	public $select = null;
	public $type = 1;

	public array $arr = [];

	/**
	 * @return array the validation rules.
	 */
	public function rules()
	{
		return [
			[['rows', 'columns', 'max', 'min'], 'required', 'message' => 'Обязательное'],
			[['rows', 'columns', 'max', 'min', 'select'], 'integer', 'min' => 1, 'tooSmall' =>  'минимальное значение 1'],
			[['arr'], 'safe'],
			[['type'], 'required']
		];
	}

	public function generate(): void
	{
		if (empty($this->arr))
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
		for ($i = 0; $i < $this->rows; $i++) {
			$this->arr[$i] = [];
			for ($j = 0; $j < $this->columns; $j++) {
				$this->arr[$i][$j] = random_int($this->min, $this->max);
			}
		}
	}


	private function generateTopMatrix(): void
	{
		for ($i = 0; $i < $this->rows; $i++)
			for ($j = 0; $j < $this->columns; $j++)
				if ($j >= $i)
					$this->arr[$j][$i] = rand($this->min, $this->max);
				else
					$this->arr[$j][$i] = 0;
	}

	private function generateBotMatrix(): void
	{
		for ($i = 0; $i < $this->rows; $i++)
			for ($j = 0; $j < $this->columns; $j++)
				if ($j <= $i)
					$this->arr[$j][$i] = rand($this->min, $this->max);
				else
					$this->arr[$j][$i] = 0;
	}
}
