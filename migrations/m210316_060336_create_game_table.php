<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%game}}`.
 */
class m210316_060336_create_game_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%game}}', [
            'id' => $this->primaryKey(),
            'player1' => $this->string(),
            'player2' => $this->string(),
            'winner' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%game}}');
    }
}
