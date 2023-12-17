<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%patient}}`.
 */
class m231204_093700_create_patient_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('patient', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string()->notNull(),
            'lastName' => $this->string()->notNull(),
            'dateOfBirth' => $this->date()->notNull(),
            'gender' => $this->string()->notNull(),
            'contact' => $this->string()->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
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
        $this->dropTable('{{%patient}}');
    }
}
