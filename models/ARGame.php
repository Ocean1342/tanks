<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game".
 * Здесь работа с данными в таблице
 *
 * @property int $id
 * @property string|null $player1
 * @property string|null $player2
 * @property string|null $winner
 */
class ARGame extends \yii\db\ActiveRecord
{



    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'game';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['player1', 'player2', 'winner'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'player1' => 'Player1',
            'player2' => 'Player2',
            'winner' => 'Winner',
        ];
    }

    public function startGame()
    {

    }

    public function gameMove()
    {
        //от пользователей пришла инфа
        //записать в базу
        //счетчик кодов передвинуть
    }
    
}
