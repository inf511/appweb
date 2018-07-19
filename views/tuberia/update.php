<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tuberia */

$this->title = 'Update Tuberia: ' . $model->idTuberia;
$this->params['breadcrumbs'][] = ['label' => 'Tuberias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTuberia, 'url' => ['view', 'id' => $model->idTuberia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tuberia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
