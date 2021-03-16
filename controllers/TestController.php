<?php

namespace app\controllers;

use yii\web\Controller;
use app\game\map\GameMap;
use app\game\object\GameObject;

class TestController extends Controller
{
    public function actionIndex()
    {

        $map = new GameMap();
//        ob_start();
        $obj = new GameObject();
        $obj->setPosition();

//        $var = ob_get_clean();
        $var = $map->printMap($obj);
        return $this->render('index',compact('var'));

    }

}