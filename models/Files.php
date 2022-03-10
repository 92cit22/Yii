<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Files".
 *
 * @property int $Id
 * @property int $ProductId
 * @property string $Url
 *
 * @property Product $product
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Files';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ProductId', 'Url'], 'required'],
            [['ProductId'], 'default', 'value' => null],
            [['ProductId'], 'integer'],
            [['Url'], 'string'],
            [['ProductId'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['ProductId' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'ProductId' => 'Product ID',
            'Url' => 'Url',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['Id' => 'ProductId']);
    }
}
