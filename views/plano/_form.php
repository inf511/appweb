<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Plano */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plano-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idEmpleado')->textInput() ?>

    <?= $form->field($model, 'idVivienda')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
