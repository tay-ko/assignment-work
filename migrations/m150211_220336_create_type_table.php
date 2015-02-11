<?php

use yii\db\Schema;
use yii\db\Migration;

class m150211_220336_create_type_table extends Migration
{
    public function up() {
        $this->createTable('type', array(
            'id'=>'pk',
            'name' => 'varchar(255) NOT NULL',
        ));
        $this->insert('type', array("name" => "Draft",'jhiuyuy'));
    }

    public function down() {
        $this->dropTable('type');
    }
}
