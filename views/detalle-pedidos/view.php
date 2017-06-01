<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ModelDetallePedidos */

$this->title = $model->DEPE_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Detalle Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Detalle de Pedido';
?>
<div class="model-detalle-pedidos-view">

    <h1><?= Html::encode('Detalle de Pedido') ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->DEPE_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->DEPE_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'DEPE_ID',
            'DEPE_CANTIDAD',
            'PROD_ID',
            'PEDI_ID',
        ],
    ]) ?>

</div>
