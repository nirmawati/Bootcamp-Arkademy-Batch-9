<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Person */

$this->title = 'Tambah Data Penduduk';
$this->params['breadcrumbs'][] = ['label' => 'Data Penduduk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
