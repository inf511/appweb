<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tuberia */

$this->title = 'Create Tuberia';
$this->params['breadcrumbs'][] = ['label' => 'Tuberias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuberia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
