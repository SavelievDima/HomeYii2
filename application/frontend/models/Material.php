<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property integer $id
 * @property string $nameMaterial
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'material';
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nameMaterial' => 'nameMaterial',
        ];
    }
}
