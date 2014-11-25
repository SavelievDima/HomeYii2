<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productMaterial".
 *
 * @property integer $id
 * @property integer $productId
 * @property integer $materialId
 */
class ProductMaterial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productMaterial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productId', 'materialId'], 'required'],
            [['productId', 'materialId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'productId' => 'Product ID',
            'materialId' => 'Material ID',
        ];
    }
}
