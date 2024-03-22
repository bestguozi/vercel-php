<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%image}}`.
 */
class m240319_021807_create_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%image}}', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer()->notNull(),
            'title'=>$this->string()->notNull(),
            'tag'=>$this->string()->notNull(),
            'thumb'=>$this->string()->notNull(),
            'description'=>$this->text()->notNull(),
            'image_list'=>$this->string()->notNull(),
            'created_at'=>$this->integer()->notNull(),
            'updated_at'=>$this->integer()->notNull(),
            'status'=>$this->integer()->notNull()->defaultValue(0)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%image}}');
    }
}
