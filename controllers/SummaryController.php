<?php
namespace app\controllers;

use app\models\Person;
use app\models\Regions;

class SummaryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model=[];

        $person = Person::find()
            ->all();

        $regions = Regions::find()
            ->all();

        for ($i = 0; $i < sizeof($regions); $i++) {
            $countPenduduk = Person::find()
                ->where(['region_id' => $regions[i]->id])
                ->count();
            $data = array('nama_daerah' => $regions[i]->name, 'jumlah_penduduk' => $countPenduduk);
            $json = json_encode($arr);
            $model = array_push($model,$json);
        }

        return $this->render('index', [
            'model' => $model,
        ]);

    }

}
