<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Plano */

$this->title = 'Update Plano: ' . $model->idPlano;
$this->params['breadcrumbs'][] = ['label' => 'Planos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPlano, 'url' => ['view', 'id' => $model->idPlano]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plano-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
