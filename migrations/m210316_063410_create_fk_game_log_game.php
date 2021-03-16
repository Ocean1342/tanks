<?php

use yii\db\Migration;

/**
 * Class m210316_063410_create_fk_game_log_game
 */
class m210316_063410_create_fk_game_log_game extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
                $this->addForeignKey(
                    'fk-game-log-game',
                    'game_log',
                    'game_id',
                    'game',
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
        $this->dropForeignKey('fk-game-log-game');
        echo "m210316_063410_create_fk_game_log_game cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210316_063410_create_fk_game_log_game cannot be reverted.\n";

        return false;
    }
    */
}
