<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Regions */

$this->title = 'Ubah Data: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Wilayah', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="regions-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
