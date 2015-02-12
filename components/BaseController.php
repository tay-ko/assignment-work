<?php

namespace app\components;

use Yii;
use yii\web\Controller;

class BaseController extends Controller {

    public function getMenu() {
      if (Yii::$app->user->isGuest) {
        return [
        	['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Login', 'url' => ['/site/login']],
            ['label' => 'Registration', 'url' => ['/site/registration']],
        ];
      } else {
        return [
        	['label' => 'Home', 'url' => ['/site/index']],
        	['label' => 'My Realty', 'url' => ['/realty/index']],
            [
            	'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
              	'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
            ],
        ];
      }
    }

}