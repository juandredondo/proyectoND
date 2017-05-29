<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModelEstados */

$this->title = 'Update Model Estados: ' . $model->ESTA_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Estados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ESTA_ID, 'url' => ['view', 'id' => $model->ESTA_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-estados-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
