<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wx_grade}}`.
 */
class m240319_021849_create_wx_grade_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%wx_grade}}', [
            'id' => $this->primaryKey(),
            'grade_name'=>$this->string(32)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%wx_grade}}');
    }
}
