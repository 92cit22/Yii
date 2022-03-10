<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "Product".
 *
 * @property int $Id
 * @property string $Name
 * @property string $Description
 * @property string $Picture
 * @property int $CategoryId
 *
 * @property Category $category
 * @property Files[] $files
 */
class Product extends \yii\db\ActiveRecord
{
	public $myPicture;
	public $myFiles;
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'Product';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['Name', 'Description', 'CategoryId'], 'required'],
			[['Name', 'Description', 'Picture'], 'string'],
			[['CategoryId'], 'default', 'value' => null],
			[['CategoryId'], 'integer'],
			[['CategoryId'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['CategoryId' => 'Id']],
			[['myPicture'], 'image', 'extensions' => ['png', 'jpg']],
			[['myFiles'], 'file', 'maxFiles' => 5],
		];
	}

	public function upload()
	{
		$this->myPicture = UploadedFile::getInstances($this, 'myPicture');
		if (!empty($this->myPicture)) {
			$temp_name = time() . '_product.' . $this->myPicture[0]->extension;
			if ($this->myPicture[0]->saveAs(Upload . $temp_name))
				$this->Picture = Upload . $temp_name;
		}
		$this->save(false);

		$this->myFiles = UploadedFile::getInstances($this, 'myFiles');
		foreach ($this->myFiles as $file) {
			$model_file = new Files();
			$temp_name = uniqid() . '_files.' . $file->extension;
			if ($file->saveAs(Upload . $temp_name)) {
				$model_file->ProductId = $this->Id;
				$model_file->Url = Upload . $temp_name;
			}
			$model_file->save(false);
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'Id' => 'ID',
			'Name' => 'Название',
			'Description' => 'Описание',
			'Picture' => 'Изображение',
			'CategoryId' => 'Категория',
			'myPicture' => 'Изображение',
			'myFiles' => 'Файлы'
		];
	}

	/**
	 * Gets query for [[Category]].
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getCategory()
	{
		return $this->hasOne(Category::className(), ['Id' => 'CategoryId']);
	}

	/**
	 * Gets query for [[Files]].
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getFiles()
	{
		return $this->hasMany(Files::className(), ['ProductId' => 'Id']);
	}
}
