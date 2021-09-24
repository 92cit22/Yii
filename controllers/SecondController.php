<?php

namespace app\controllers;

use yii\web\Controller;

class SecondController extends Controller
{
    public function actionIndex($status = 0)
    {
        switch ($status) {
            case 0:
                return $this->redirect("https://google.com");
                break;

            case 1:
                return $this->redirect("https://yandex.com");
                break;

            default:
                return $this->redirect("http://spbkit.edu.ru");
                break;
        }
    }

    /**
     * Вывод на экран ФИО, полученные из запроса
     * @param string $firstName Имя
     * @param string $middleName Отчество
     * @param string $lastName Фамилия
     * @return string
     */
    public function actionFio($firstName, $middleName, $lastName)
    {
        $data =
            $lastName
            . " "
            . strtoupper(mb_substr($firstName, 0, 1))
            . "."
            . strtoupper(mb_substr($middleName, 0, 1))
            . ".";
        return $this->render("fio", ["fio" => $data]);
    }
}
