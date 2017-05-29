<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModelPersonas */

$this->title = 'Update Model Personas: ' . $model->PERS_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PERS_ID, 'url' => ['view', 'id' => $model->PERS_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-personas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
