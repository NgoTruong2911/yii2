<?php

use yii\db\Migration;
// use yii\db\Schema;

/**
 * Class m200602_045812_create_table_users
 */
class m200602_045812_create_table_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notnull(),
            'username' => $this->string()->notnull(),
            'email' => $this->string()->notnull()->unique(),
            'password' => $this->text()->notnull(),
            'avatar' => $this->text(),
            'phone' => $this->string(),
            'role' => $this->integer(),
            'authKey' => $this->text(),
            'address' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200602_045812_create_table_users cannot be reverted.\n";

        return false;
    }
    */
}
