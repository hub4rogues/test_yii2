<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m190326_184835_test_db
 */
class m190326_184835_test_db extends Migration {
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->createTable ("user", [
                                          "id" => Schema::TYPE_PK,
                                          "name" => Schema::TYPE_STRING,
                                          "email" => Schema::TYPE_STRING,
                                        ]);
            $this->batchInsert ("user",
                                ["name", "email"],
                                [
                                        ["User1",  "user1@mail.org"],
                                        ["User2",  "user2@mail.org"],
                                        ["User3",  "user3@mail.org"],
                                        ["User4",  "user4@mail.org"],
                                        ["User5",  "user5@mail.org"],
                                        ["User6",  "user6@mail.org"],
                                        ["User7",  "user7@mail.org"],
                                        ["User8",  "user8@mail.org"],
                                        ["User9",  "user9@mail.org"],
                                        ["User10", "user10@mail.org"],
                                        ["User11", "user11@mail.org"],
                                ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
            $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190326_184835_test_db cannot be reverted.\n";

        return false;
    }
    */
}
