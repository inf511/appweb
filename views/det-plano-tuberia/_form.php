<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetPlanoTuberia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="det-plano-tuberia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idPlano')->textInput() ?>

    <?= $form->field($model, 'idTuberia')->textInput() ?>

    <?= $form->field($model, 'distancia')->textInput() ?>

    <?= $form->field($model, 'precioUnitario')->textInput() ?>

    <?= $form->field($model, 'precioTotal')->textInput() ?>

    <?= $form->field($model, 'index')->textInput() ?>

    <?= $form->field($model, 'posX')->textInput() ?>

    <?= $form->field($model, 'posY')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
