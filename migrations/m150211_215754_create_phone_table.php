<?php

use yii\db\Schema;
use yii\db\Migration;

class m150211_215754_create_phone_table extends Migration
{
    public function up() {
        $this->createTable('phone', array(
            'id'=>'pk',
            'id_realty' => 'int(10) NOT NULL',
            'number' => 'varchar(255) NOT NULL',
        ));
    }

    public function down() {
        $this->dropTable('phone');
    }
}
