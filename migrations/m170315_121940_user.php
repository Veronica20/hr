<?php

use yii\db\Migration;

class m170315_121940_user extends Migration
{
    public function up()
    {
				$this->createTable('user',[
								'id'=>$this->primaryKey(),
								'email'=>$this->string(),
								'password'=>$this->text(),
								'first_name'=>$this->string(),
								'last_name'=>$this->string()
				]);
    }

    public function down()
    {
        echo "m170315_121940_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
