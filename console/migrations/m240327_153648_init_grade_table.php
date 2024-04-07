<?php

use yii\db\Migration;

/**
 * Class m240327_153648_init_grade_table
 */
class m240327_153648_init_grade_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('wx_grade', [
            'grade_name' => '小班'
        ]);
        $this->insert('wx_grade', [
            'grade_name' => '中班'
        ]);
        $this->insert('wx_grade', [
            'grade_name' => '大班'
        ]);
        $this->insert('wx_grade', [
            'grade_name' => '学前班'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240327_153648_init_grade_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240327_153648_init_grade_table cannot be reverted.\n";

        return false;
    }
    */
}
