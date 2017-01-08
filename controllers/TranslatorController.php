<?php

namespace yac\yii18n\controllers;

use yii\base\Controller;

class TranslatorController extends Controller
{
    public function actionIndex($category, $message = '', $params = [])
    {
        $this->response->format = \yii\response\Response::JSON_FORMAT;

        /*return [
            'configuracoes' => [
                'app.index' => 'hello',
                'app.test' => 'test',
            ]
        ];*/
        static::$app->getI18n()
        print_r('XXXXSAD');die;
    }
}
