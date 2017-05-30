<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelDetallePedidos */

$this->title = 'Detalles de Pedidos';
$this->params['breadcrumbs'][] = ['label' => 'Nuevo Detalle de Pedido', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-detalle-pedidos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
