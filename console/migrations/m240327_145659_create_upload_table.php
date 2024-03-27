<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%upload}}`.
 */
class m240327_145659_create_upload_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%upload}}', [
            'id' => $this->primaryKey(),
            'key'=> $this->string()->notNull(),
            'ip'=>$this->string(15)->notNull(),
            'created_at'=> $this->datetime()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%upload}}');
    }
}
