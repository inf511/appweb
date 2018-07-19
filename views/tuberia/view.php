<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tuberia */

$this->title = $model->idTuberia;
$this->params['breadcrumbs'][] = ['label' => 'Tuberias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuberia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idTuberia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idTuberia], [
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
            'idTuberia',
            'medida',
            'descripcion',
            'precio',
        ],
    ]) ?>

</div>
