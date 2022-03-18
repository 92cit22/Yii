<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "News".
 *
 * @property int $Id
 * @property string $Title
 * @property string $Description
 * @property string $Picture
 * @property int $UserId
 *
 * @property User $user
 */
class News extends \yii\db\ActiveRecord
{
    public $file;

    public function upload()
    {
        $this->file = UploadedFile::getInstance($this, 'file');
        if ($this->validate() && !empty($this->file)) {
            $temp_name = Upload . time() . '.' . $this->file->extension;
            $this->Picture = $temp_name;
            if ($this->file->saveAs($temp_name)) {
                $this->file->tempName = $this->Picture;
                return true;
            }
        }
        formatPrint($this, false);
        die();
        return false;
    }


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'News';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'Description'], 'required'],
            [['Title', 'Description', 'Picture'], 'string'],
            [['UserId'], 'default', 'value' => Yii::$app->user->id],
            ['file', 'image'],
            [['UserId'], 'integer'],
            [['UserId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UserId' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Title' => 'Заголовок',
            'Description' => 'Новость',
            'Picture' => 'Изображение',
            'UserId' => 'Автор',
            'file' => 'Изображение',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['Id' => 'UserId']);
    }
}
