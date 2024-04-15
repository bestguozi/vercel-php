<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wx_new_word}}`.
 */
class m240319_021908_create_wx_new_word_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%wx_new_word}}', [
            'id' => $this->primaryKey(),
            'lesson_id'=>$this->integer()->notNull(),
            'word'=>$this->string(1)->notNull(),
            'visualize'=>$this->string(255)->notNull(),
            'phrase'=>$this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%wx_new_word}}');
    }
}
