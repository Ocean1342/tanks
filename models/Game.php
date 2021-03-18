<?php


namespace app\models;


use app\game\map\GameMap;
use app\game\object\GameObject;
use yii\base\Model;

class Game extends Model
{
    /*
     * В этой модели описываем логику игры
     *
     * */
    public static function startGame()
    {
        $map = new GameMap();
        $objPlayer = new GameObject(0,0,'red','player1');
        $objPC =  new GameObject(11,11,'blue','PC');
        //создание игры и запись в базу
        $printedMap = $map->printMap($objPlayer,$objPC);
        return $printedMap;
    }

    public function continueGame()
    {

    }
}