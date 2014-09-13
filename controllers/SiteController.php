<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public $defaultAction = 'page';
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'page' => [
                'class' => 'yii\web\ViewAction',
                'viewPrefix' => '@app/views/site'
            ],
        ];
    }
}
