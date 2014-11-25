<?php

use yii\db\Migration;

class m141122_234105_tables_many_many extends Migration
{
    public function up()
    {

        $this->createTable('product',
            array(
                'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
                'title'=>'varchar(200)',
                'PRIMARY KEY (`id`)',
            )
        );
        $this->createTable('productMaterial',
            array(
                'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
                'productId' => 'int(10) unsigned NOT NULL',
                'materialId' => 'int(10) unsigned NOT NULL',
                'PRIMARY KEY (`id`)',
            )
        );
        $this->createTable('material',
            array(
                'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
                'title' => 'VARCHAR(200)',
                'PRIMARY KEY (`id`)',
            )
        );
    }

    public function down()
    {
        echo "m141118_200220_tables_many_many cannot be reverted.\n";

        return false;
    }
}
