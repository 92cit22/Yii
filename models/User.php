<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "User".
 *
 * @property int $Id
 * @property string $Username
 * @property string $Password
 * @property string $Email
 * @property string $FIO
 * @property int $Avatar
 * @property string $AuthKey
 * @property string $AccessToken
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $confirmPassword;
    public $myAvatar;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Username', 'Password', 'Email', 'FIO', 'myAvatar'], 'required'],
            [['Username', 'Password', 'Email', 'FIO',], 'string'],
            [['Email'], 'email'],
            ['confirmPassword', 'compare', 'compareAttribute' => 'Password', 'message' => 'Пароли не совпадают'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Username' => 'Логин',
            'Password' => 'Пароль',
            'confirmPassword' => 'Повторите пароль',
            'Email' => 'Адрес электронной почты',
            'FIO' => 'ФИО',
            'myAvatar' => 'Изображение профиля',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        $cond = ['Id' => $id];
        return self::FindBy($cond);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $cond = ['AccessToken' => $token];
        return self::FindBy($cond);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $cond = ['Username' => $username];
        return self::FindBy($cond);
    }
    public static function FindBy(array $cond)
    {
        $query = self::findOne($cond);
        return ($query !== null) ? new static($query) : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->Id;
    }
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->AuthKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->AuthKey === $authKey;
    }

    public function saveData()
    {
        $this->myAvatar = UploadedFile::getInstances($this, 'myAvatar');
        if ($this->validate()) {
            // echo "valid";
            // die();
            $this->Password = md5($this->Password);
            $temp_name = time() . '_user.' . $this->myAvatar[0]->extension;
            if (!empty($this->myAvatar)) {
                if ($this->myAvatar[0]->saveAs(Upload . $temp_name))
                    $this->Avatar = $temp_name;
            } else
                $this->Avatar = 'default.jpg';
            $this->save(false);
            return true;
        } else
            return false;
    }
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->Password === md5($password);
    }
}
