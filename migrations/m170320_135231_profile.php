<?php

use yii\db\Migration;

class m170320_135231_profile extends Migration
{
    public function up()
    {
        $this->createTable('user',[
            'id'=>$this->primaryKey(),
            'linked'=>$this->string(),
            'birth_date'=>$this->text(),
            'location'=>$this->string(),
        ]);
    }

    public function down()
    {
        echo "m170320_135231_profile cannot be reverted.\n";

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
