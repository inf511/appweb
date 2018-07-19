<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Plano */

$this->title = 'Create Plano';
$this->params['breadcrumbs'][] = ['label' => 'Planos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plano-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
