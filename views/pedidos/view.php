<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ModelPedidos */

$this->title = $model->PEDI_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Pedido';
?>
<div class="model-pedidos-view">

    <h1><?= Html::encode('Pedido') ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PEDI_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PEDI_ID], [
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
            'PEDI_ID',
            'PEDI_FECHA',
            'PEDI_OBSERVACION',
            'PEDI_DIRECCION',
            'ESTA_ID',
            'PERS_ID',
        ],
    ]) ?>

</div>
