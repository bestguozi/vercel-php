<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wx_book}}`.
 */
class m240319_021841_create_wx_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%wx_book}}', [
            'id' => $this->primaryKey(),
            'book_name'=>$this->string(32)->notNull(),
            'book_image'=>$this->string()->notNull(),
            'publish'=>$this->string(255)->notNull(),
            'grade_id'=>$this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%wx_book}}');
    }
}
