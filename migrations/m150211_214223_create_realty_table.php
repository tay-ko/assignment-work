<?php

use yii\db\Schema;
use yii\db\Migration;

class m150211_214223_create_realty_table extends Migration
{
   public function up() {
        $this->createTable('realty', array(
            'id'=>'pk',
            'name' => 'varchar(255) NOT NULL',
            'phone' => 'varchar(255) NOT NULL',
            'id_user' => 'int(10) NOT NULL',
            'id_type' => 'int(10) NOT NULL',
            'id_status' => 'int(10) NOT NULL',
            'date' => 'date NOT NULL',
            'price' => 'float NOT NULL',
            'address' => 'varchar(255) NOT NULL',
            'long' => 'float',
            'lat' =>'float',
            'file' => 'varchar(255)',
        ));
    }

    public function down() {
        $this->dropTable('realty');
    }
}
