<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DetPlanoTuberiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Det Plano Tuberias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="det-plano-tuberia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Det Plano Tuberia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idDetPlanoTuberia',
            'idPlano',
            'idTuberia',
            'distancia',
            'precioUnitario',
            //'precioTotal',
            //'index',
            //'posX',
            //'posY',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
