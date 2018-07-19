<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vivienda */

$this->title = 'Update Vivienda: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Viviendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vivienda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
