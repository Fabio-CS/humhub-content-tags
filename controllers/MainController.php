<?php

namespace app\modules\contenttags\controllers;

use Yii;
use yii\web\Controller;

class MainController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}
