<?php

use yii\db\Schema;
use yii\db\Migration;

class m150211_220535_create_user_table extends Migration
{
    public function up() {
        $this->createTable('user', array(
            'id'=>'pk',
            'username' => 'varchar(255) NOT NULL',
            'password' => 'varchar(255) NOT NULL',
        ));
    }

    public function down() {
        $this->dropTable('user');
    }
}
