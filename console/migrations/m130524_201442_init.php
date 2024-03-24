<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(255)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        $this->insert('{{%user}}', [
            'username' => 'root',
            'auth_key' => 'pru57Y1SrRAqLkoG1PgDiK0CZXYAjhHP',
            'password_hash' => '$2y$13$eZw/hWbzvdIJ5if2uZvsd.4fE6u010Cr7853Z7QKITrJee/nhgg96',
            'password_reset_token' => '',
            'created_at' => '1402312317',
            'updated_at' => '1402312317',
            'status' => 1,
            'email' => 'root@web.com',
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
