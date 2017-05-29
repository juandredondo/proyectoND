<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModelPedidos */

$this->title = 'Update Model Pedidos: ' . $model->PEDI_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PEDI_ID, 'url' => ['view', 'id' => $model->PEDI_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-pedidos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
