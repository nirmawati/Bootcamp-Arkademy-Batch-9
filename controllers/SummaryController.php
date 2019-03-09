<?php
namespace app\controllers;

use app\models\Person;
use app\models\Regions;

class SummaryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Person::find()
        ->joinWith('region')
            ->all();

        return $this->render('index', [
            'model' => $model,
        ]);

    }

}
