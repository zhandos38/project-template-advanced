<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%d_course_lession}}`.
 */
class m200717_092814_create_course_lesson_table extends Migration
{
    public $tableName = '{{%course_lesson}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'content' => $this->text(),
            'course_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);

        $this->addForeignKey('fk-course-lesson-course_id-course-id', $this->tableName, 'course_id', '{{%course}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
