<?php

namespace app\models;

use DateTime;
use yii\base\Model;

class UserForm extends Model
{
    public string $FirstName = '';
    public string $LastName = '';
    public string $MiddleName = '';
    public string $Series = '';
    public string $PassId = '';
    public bool $Sex = true;
    public string $PhoneNumber = '';
    public bool $Check = true;
    private ?DateTime $Birthday = null;

    public function attributeLabels(): array
    {
        return [
            'FirstName' => 'Имя',
            'LastName' => 'Фамилия',
            'MiddleName' => 'Отчество',
            'Series' => 'Серия паспорта',
            'PassId' => 'Номер паспорта',
            'Birthday' => 'Дата рождения',
            'Sex' => 'Пол',
            'PhoneNumber' => 'Номер телефона',
            'Check' => 'Вы подтверждаете, что мы можем использовать ваши данные как хотим',
        ];
    }

    public function rules(): array
    {
        return [
            [['LastName', 'FirstName', 'MiddleName', 'Series', 'PassId', 'Birthday', 'PhoneNumber', 'Check'], 'required', 'message' => 'Обязательное поле'],
            [['LastName', 'FirstName', 'MiddleName'], 'string', 'max' => 30, 'tooLong' => 'Не больше 30 букв'],
            [['Series'], 'match', 'pattern' => '/^(\d{4})$/', 'message' => 'Только 4 цифры'],
            [['PassId'], 'match', 'pattern' => '/^(\d{6})$/', 'message' => 'Только 6 цифр'],
            [['Birthday'], 'datetime', 'format' => "php:Y-m-d", 'message' => 'Неверный формат'],
            [['Sex', 'Check'], 'boolean'],
            [['PhoneNumber'], 'match', 'pattern' => '/^\+7\([0-9]{3}\)[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/', 'message' => 'Только в формате +7(800)555-35-35'],
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

    public function addToFile(): void
    {
        $str = file_get_contents('upload/user.txt');
        if ($str === '') {
            file_put_contents('upload/user.txt', "Фамилия,Имя,Отчество,Серия,Номер,Дата рожения,Пол,Теслефон\n");
        }
        $obj = get_object_vars($this);
        $obj['Birthday'] = $obj['Birthday']->format('Y-m-d');
        $obj['Sex'] = !$obj['Sex'] ? 'Мужчина' : 'Женщина';
        array_pop($obj);
        $str = implode(',', $obj) . "\n";
        file_put_contents('upload/user.txt', $str, FILE_APPEND);
    }
}
