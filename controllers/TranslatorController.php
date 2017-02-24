<?php

namespace yac\yii18n\controllers;

use yii\web\Controller;
use yac\yii18n\Messages;

class TranslatorController extends Controller
{
    public function actionIndex($category, $message = '', $params = [])
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $i18n = new Messages();
        return $i18n->loadMessages($category, \Yii::$app->language);
    }
}
