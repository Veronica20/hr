<?php

use yii\db\Migration;

class m170315_120535_company extends Migration
{
    public function up()
    {
	    $this->createTable('company',[
				    'id'=>$this->primaryKey(),
				    'name'=>$this->string(),
					  'email'=>$this->string(),
					  'password'=>$this->text(),
					  'tin'=>$this->string(),
					  'phone'=>$this->integer(),
					  'person_title'=>$this->string(),
	    ]);
    }

    public function down()
    {
        echo "m170315_120535_company cannot be reverted.\n";

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
