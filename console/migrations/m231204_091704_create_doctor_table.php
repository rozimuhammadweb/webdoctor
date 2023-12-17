<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%doctor}}`.
 */
class m231204_091704_create_doctor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('doctor', [
            'id' => $this->primaryKey(),
            'clinicId' => $this->integer()->defaultValue(0),
            'firstName' => $this->string()->notNull(),
            'lastName' => $this->string()->notNull(),
            'specialization' => $this->string()->notNull(),
            'education' => $this->string()->notNull(),
            'contact' => $this->string()->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'dateOfBirth' => $this->date()->notNull(),
            'gender' => $this->string()->notNull(),
            'biography' => $this->text(),
            'image' => $this->string(),
            'status' => $this->boolean()->defaultValue(true),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'deleted_at' => $this->timestamp()->defaultValue(null),
        ]);

        $this->addForeignKey(
            'fk-doctors-clinicId',
            'doctor',
            'clinicId',
            'clinics',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%doctor}}');
    }
}
