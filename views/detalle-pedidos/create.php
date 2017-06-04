<?php

use yii\helpers\Html;
use yii\grid\GridView;



/* @var $this yii\web\View */
/* @var $model app\models\ModelDetallePedidos */

$this->title = 'Create Model Detalle Pedidos';
$this->params['breadcrumbs'][] = ['label' => 'Model Detalle Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-detalle-pedidos-create col-md-6">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelProductos'=>$modelProductos,
    ]) ?>

</div>

<div class="col-md-6">
  <h1><?= Html::encode('Detalle de Productos') ?></h1>
	    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'PEDI_ID',
            'INVE_ID',
            'iNVE.pROD.PROD_DESCRIPCION', //esta es una variable que permite buscar un detale de un m detalle de mantenimiento de acued
            'iNVE.INVE_STOK',
            // 'deta_id',
            'DEPE_CANTIDAD',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

