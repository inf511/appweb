<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DetPlanoTuberia */

$this->title = $model->idDetPlanoTuberia;
$this->params['breadcrumbs'][] = ['label' => 'Det Plano Tuberias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="det-plano-tuberia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idDetPlanoTuberia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idDetPlanoTuberia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idDetPlanoTuberia',
            'idPlano',
            'idTuberia',
            'distancia',
            'precioUnitario',
            'precioTotal',
            'index',
            'posX',
            'posY',
        ],
    ]) ?>

</div>
