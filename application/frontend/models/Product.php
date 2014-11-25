<?php

namespace app\models;

use app\models\Material;
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $nameProduct
 *
 *
 */
class Product extends \yii\db\ActiveRecord
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    public function getProductMaterials()
    {

        return $this->hasMany(ProductMaterial::className(), ['productId' => 'id']);
    }

    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['id' => 'materialId'])
        ->via('productMaterials');
    }


}
