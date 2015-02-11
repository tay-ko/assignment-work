<?php

use yii\db\Schema;
use yii\db\Migration;

class m150211_220205_create_status_table extends Migration
{
    public function up() {
        $this->createTable('status', array(
            'id'=>'pk',
            'name' => 'varchar(255) NOT NULL',
        ));
    }

    public function down() {
        $this->dropTable('status');
    }
}
