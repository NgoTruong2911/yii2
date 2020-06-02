<?php

use yii\db\Migration;

/**
 * Class m200602_083829_create_table_categories
 */
class m200602_083829_create_table_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
            'description' => $this->text(),
            'user_id' =>  $this->integer()->notnull(),
            'update_at' => $this->timestamp()->notNull(),
            'create_at' => $this->timestamp()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-categories-user_id',
            'categories',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'fk-categories-user_id',
            'categories'
        );

        $this->dropTable('categories');
    }
}
