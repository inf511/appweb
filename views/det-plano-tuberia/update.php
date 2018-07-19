<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetPlanoTuberia */

$this->title = 'Update Det Plano Tuberia: ' . $model->idDetPlanoTuberia;
$this->params['breadcrumbs'][] = ['label' => 'Det Plano Tuberias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDetPlanoTuberia, 'url' => ['view', 'id' => $model->idDetPlanoTuberia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="det-plano-tuberia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
