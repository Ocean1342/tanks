<?php

namespace app\controllers;

use app\game\map\GameMap;
use app\game\object\GameObject;
use app\models\Game;

class GameController extends \yii\web\Controller
{
    public function actionIndex()
    {

        return $this->render('index');

    }

    public function actionPlay()
    {
        $state = \Yii::$app->request->get('state');

        if (isset($state) && $state == 'start') {
            $printedMap = Game::startGame();
            return $this->render('play',compact('printedMap','state'));
        } elseif ($state == 'continue') {
            //

        }



        //создать запись в таблицах game , game_log

        //запомнить состояние игры
    }

}
