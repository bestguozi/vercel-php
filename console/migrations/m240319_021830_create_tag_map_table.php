<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tag_map}}`.
 */
class m240319_021830_create_tag_map_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tag_map}}', [
            'id' => $this->primaryKey(),
            'tag_id'=>$this->integer()->notNull(),
            'image_id'=>$this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tag_map}}');
    }
}
