<?php

namespace app\models;

use DateTime;
use Yii;

/**
 * This is the model class for table "Personal".
 *
 * @property int $Id
 * @property string $FirstName
 * @property string $LastName
 * @property string $MiddleName
 * @property int $Series
 * @property int $Number
 * @property string $Birthdate
 * @property bool $Gender
 * @property string $Tel
 */
class Personal extends \yii\db\ActiveRecord
{
    public bool $Check = true;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FirstName', 'LastName', 'MiddleName', 'Series', 'Number', 'Birthdate', 'Gender', 'Tel'], 'required', 'message' => 'Обязательное поле'],
            [['FirstName', 'LastName', 'MiddleName'], 'string', 'max' => 30, 'tooLong' => 'Не больше 30 букв'],
            [['Series', 'Number'], 'integer'],
            [['Tel'], 'match', 'pattern' => '/^\+(\d{11})$/', 'message' => 'Введите телефонный номер в формате +7(111)-111-11-11'],
            [['Series', 'Number', 'Tel'], 'default', 'value' => null],
            [['Series'], 'match', 'pattern' => '/^(\d{4})$/', 'message' => 'Только 4 цифры'],
            [['Number'], 'match', 'pattern' => '/^(\d{6})$/', 'message' => 'Только 6 цифр'],
            [['Birthdate'], 'datetime', 'format' => "php:Y-m-d", 'message' => 'Неверный формат'],
            [['Gender'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'FirstName' => 'Имя',
            'LastName' => 'Фамилия',
            'MiddleName' => 'Отчество',
            'Series' => 'Серия паспорта',
            'Number' => 'Номер паспорта',
            'Birthdate' => 'Дата рождения',
            'Gender' => 'Пол',
            'Tel' => 'Номер телефона',
        ];
    }
    /**
     * @return string
     */
    public function getBirthday(): string
    {
        if ($this->Birthday === null) {
            $this->Birthday = new DateTime('2000-01-01');
        }
        return $this->Birthday->format('Y-m-d');
    }

    /**
     * @param $birthday
     */
    public function setBirthday($birthday): void
    {
        if (is_string($birthday)) {
            $this->Birthday = new DateTime($birthday);
        } else {
            $this->Birthday = $birthday;
        }
    }
}
