<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bengkel}}`.
 */
class m230526_001613_create_bengkel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bengkel}}', [
            'id' => $this->primaryKey(),
            'nama_pemilik' => $this->string(100)->notNull(),
            'no_tlp' => $this->string(11)->notNull(),
            'koordinatx' => $this->integer(2)->notNull(), 
            'koordinaty' => $this->integer(2)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bengkel}}');
    }
}
