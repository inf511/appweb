<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DetPlanoTuberia */

$this->title = 'Create Det Plano Tuberia';
$this->params['breadcrumbs'][] = ['label' => 'Det Plano Tuberias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="det-plano-tuberia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
