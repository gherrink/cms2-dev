<?php

/**
 * @link https://github.com/mrbirne/cms2
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\controllers;

use yii\web\Controller;

/**
 * Contolls the site and renders the generated Views.
 *
 * @author Maurice Busch <busch.maurice@gmx.net>
 * @since 2.0
 */

class SiteController extends Controller
{
    public $defaultAction = 'index';
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'page' => [
                'class' => 'yii\web\ViewAction',
                'viewPrefix' => ''
            ],
        ];
    }
    
    public function actionIndex()
    {
        return $this->render('index');
    }
}
