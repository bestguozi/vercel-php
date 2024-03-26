<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wx_lesson}}`.
 */
class m240319_021858_create_wx_lesson_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%wx_lesson}}', [
            'id' => $this->primaryKey(),
            'book_id'=>$this->integer()->notNull(),
            'lesson_name'=>$this->string(32)->notNull(),
            'lesson_image'=>$this->string()->notNull(),
            'lesson_content'=>$this->text()->notNull(),
            'created_at'=>$this->dateTime()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%wx_lesson}}');
    }
}
