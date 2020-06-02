<?php

use yii\db\Migration;

/**
 * Class m200602_084348_create_table_posts
 */
class m200602_084348_create_table_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
            'user_id' => $this->integer()->notnull(),
            'category_id' =>  $this->integer()->notnull(),
            'content' => $this->text(),
            'tags' => $this->string(),
            'update_at' => $this->timestamp()->notNull(),
            'create_at' => $this->timestamp()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-posts-user_id',
            'posts',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-posts-category_id',
            'posts',
            'category_id',
            'categories',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'fk-posts-user_id',
            'posts'
        );

        $this->dropForeignKey(
            'fk-posts-category_id',
            'posts'
        );

        $this->dropTable('posts'); 
    }
    
}
