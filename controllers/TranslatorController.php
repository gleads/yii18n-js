<?php

namespace yac\yii18n\controllers;

use yii\web\Controller;
use yac\yii18n\Messages;
use yii\i18n\PhpMessageSource;

class TranslatorController extends Controller
{
    public function actionIndex($category, $message = '', $params = [])
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $method = new \ReflectionMethod('\yii\i18n\PhpMessageSource', 'loadMessages');
        $method->setAccessible(true);

        return $method->invoke(new PhpMessageSource, $category, \Yii::$app->language);
    }
}
