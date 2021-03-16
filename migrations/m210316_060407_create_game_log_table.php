<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%game_log}}`.
 */
class m210316_060407_create_game_log_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%game_log}}', [
            'game_id' => $this->primaryKey(),
//            'game_id'=>$this->integer(),
            'player1_x' => $this->integer(),
            'player1_y' => $this->integer(),
            'player2_x' => $this->integer(),
            'player2_y' => $this->integer(),

        ]);
/*        $this->addForeignKey(
            'fk-game-log-game',
            'game_log',
            'game_id',
            'game',
            'id',
            'CASCADE'
        );*/
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%game_log}}');
//        $this->dropForeignKey('fk-game-log-game');
    }
}
