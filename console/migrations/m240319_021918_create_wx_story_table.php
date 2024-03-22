<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wx_story}}`.
 */
class m240319_021918_create_wx_story_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%wx_story}}', [
            'id' => $this->primaryKey(),
            'author'=>$this->string(255)->notNull(),
            'story_name'=>$this->string(255)->notNull(),
            'category_id'=>$this->integer()->notNull(),
            'thumb'=>$this->string(255)->notNull(),
            'story_content'=>$this->text()->notNull(),
            'created_at'=>$this->integer()->notNull(),
            'updated_at'=>$this->integer()->notNull(),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%wx_story}}');
    }
}
