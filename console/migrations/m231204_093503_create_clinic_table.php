<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%clinic}}`.
 */
class m231204_093503_create_clinic_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('clinic', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'contact' => $this->string()->notNull(),
            'address' => $this->text()->notNull(),
            'status' => $this->boolean()->defaultValue(true),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'deleted_at' => $this->timestamp()->defaultValue(null),
        ]);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clinic}}');
    }
}
