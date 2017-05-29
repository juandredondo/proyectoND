<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuscarEstados */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Model Estados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-estados-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Model Estados', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ESTA_ID',
            'ESTA_DETALLE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
