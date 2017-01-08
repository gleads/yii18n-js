<?php

namespace yac\yii18n\controllers;

use yii\web\Controller;

class TranslatorController extends Controller
{
    public function actionIndex($category, $message = '', $params = [])
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        /*return [
            'configuracoes' => [
                'app.index' => 'hello',
                'app.test' => 'test',
            ]
        ];*/
        //static::$app->getI18n()
        print_r('XXXXSAD');die;
    }
}
