<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuscarProductos */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Model Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-productos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Model Productos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PROD_ID',
            'PROD_DESCRIPCION',

            'PROD_FECHA_VENCIMIENTO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
