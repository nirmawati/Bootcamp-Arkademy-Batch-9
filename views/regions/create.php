<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Regions */

$this->title = 'Tambah Data Wilayah';
$this->params['breadcrumbs'][] = ['label' => 'Wilayah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regions-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
