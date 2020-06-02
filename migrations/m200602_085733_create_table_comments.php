<?php

use yii\db\Migration;

/**
 * Class m200602_085733_create_table_comments
 */
class m200602_085733_create_table_comments extends Migration
{
    /**
     * {@inheritdoc}
     */


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notnull(),
            'post_id' =>  $this->integer()->notnull(),
            'content' => $this->text(),
            'update_at' => $this->timestamp()->notNull(),
            'create_at' => $this->timestamp()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-comments-user_id',
            'comments',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-comments-post_id',
            'comments',
            'post_id',
            'posts',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'fk-comments-user_id',
            'comments'
        );

        $this->dropForeignKey(
            'fk-comments-post_id',
            'comments'
        );

        $this->dropTable('comments');
    }
}
