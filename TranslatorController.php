<?php

namespace yac\yii18n;

use yii\base\Controller;

class TranslatorController extends Controller
{
    public function actionIndex($category, $message = '', $params = [])
    {
        $this->response->format = \yii\response\Response::JSON_FORMAT;
    }
}
