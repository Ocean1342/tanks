<?php

namespace app\controllers;

use yii\web\Controller;
use app\game\map\Map;

class TestController extends Controller
{
    public function actionIndex()
    {

        $map = new Map();
        ob_start();
        $map->printMap([]);
        $var = ob_get_clean();
//        $var = 'test';
        return $this->render('index',compact('var'));

    }

}