<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuscarDetallePedidos */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Detalle de  Pedidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-detalle-pedidos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nuevo Detalle Pedido', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'DEPE_ID',
            'DEPE_CANTIDAD',
            'PROD_ID',
            'PEDI_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
