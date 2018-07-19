<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetPlanoTuberiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="det-plano-tuberia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idDetPlanoTuberia') ?>

    <?= $form->field($model, 'idPlano') ?>

    <?= $form->field($model, 'idTuberia') ?>

    <?= $form->field($model, 'distancia') ?>

    <?= $form->field($model, 'precioUnitario') ?>

    <?php // echo $form->field($model, 'precioTotal') ?>

    <?php // echo $form->field($model, 'index') ?>

    <?php // echo $form->field($model, 'posX') ?>

    <?php // echo $form->field($model, 'posY') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
