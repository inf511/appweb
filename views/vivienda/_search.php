<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ViviendaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vivienda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'duenio') ?>

    <?= $form->field($model, 'barrio') ?>

    <?= $form->field($model, 'ciudad') ?>

    <?= $form->field($model, 'calle') ?>

    <?php // echo $form->field($model, 'nro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
