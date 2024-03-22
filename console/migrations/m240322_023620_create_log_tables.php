<?php

use yii\db\Migration;

/**
 * Class m240322_023620_create_log_tables
 */
class m240322_023620_create_log_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //$this->dropTable('log');
        $this->createTable('log', [
            'id'=>$this->primaryKey(),
            'event'=>$this->string(),
            'user_id'=>$this->integer(),
            'data'=>$this->text(),
            'url'=>$this->string(),
            'ip'=>$this->string(),
            'user_agent'=>$this->string(),
            'created_at'=>$this->dateTime(),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');

        $this->createIndex('idx-log-created_by', 'log', 'created_at');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240322_023620_create_log_tables cannot be reverted.\n";
        $this->dropTable('log');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240322_023620_create_log_tables cannot be reverted.\n";

        return false;
    }
    */
}
