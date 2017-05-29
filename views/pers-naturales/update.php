<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModelPersNaturales */

$this->title = 'Update Model Pers Naturales: ' . $model->PENA_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Pers Naturales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PENA_ID, 'url' => ['view', 'id' => $model->PENA_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-pers-naturales-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
