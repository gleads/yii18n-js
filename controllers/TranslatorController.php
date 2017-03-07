<?php

namespace yac\yii18n\controllers;

use yii\web\Controller;
use yac\yii18n\Messages;
use yii\i18n\PhpMessageSource;

/**
 *
 * @author Arthur Silva <arthur.fsilva96@gmail.com
 */
class TranslatorController extends Controller
{
    /**
     * Get all messages of category message
     * @param  string $category  category name
     * @return array  Array with all messages of category
     */
    public function actionIndex($category)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $method = new \ReflectionMethod('\yii\i18n\PhpMessageSource', 'loadMessages');
        $method->setAccessible(true);

        return $method->invoke(new PhpMessageSource, $category, \Yii::$app->language);
    }
}
