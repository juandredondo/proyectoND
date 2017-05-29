<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModelDetallePedidos */

$this->title = 'Update Model Detalle Pedidos: ' . $model->DEPE_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Detalle Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DEPE_ID, 'url' => ['view', 'id' => $model->DEPE_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-detalle-pedidos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
