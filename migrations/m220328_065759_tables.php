<?php

use yii\db\Migration;

/**
 * Class m220328_065759_tables
 */
class m220328_065759_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('chat', array(
            'id' => 'pk',
            'tg_chat_id' => 'INT(20)',
            'created_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP()'
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');

        $this->createTable('user', array(
            'id' => 'pk',
            'tg_user_id' => 'INT(20)',
            'name' => 'VARCHAR(20)',
            'is_bot' => 'boolean',
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');

        $this->createTable('post', array(
            'id' => 'pk',
            'test' => 'TEXT',
            'audio' => 'VARCHAR(20)',
            'img' => 'VARCHAR(20)',
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');

        $this->createTable('action', array(
            'id' => 'pk',
            'title' => 'VARCHAR(20)',
            'post_id' => 'INT(11)',
            'next_post_id' => 'INT(11)',
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');

        $this->createTable('history', array(
            'id' => 'pk',
            'chat_id' => 'INT(11)',
            'user_id' => 'INT(11)',
            'post_id' => 'INT(11)',
            'msg' => 'VARCHAR(255)',
            'created_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP()'
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220328_065759_tables cannot be reverted.\n";

        return false;
    }
}
