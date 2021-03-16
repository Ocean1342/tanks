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
        $obj = new GameObject();
        $obj->setPosition();

//        $printedMap = ob_get_clean();
        $printedMap = $map->printMap($obj);
        return $this->render('index',compact('printedMap'));

    }

}