<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuscarInventarios */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Model Inventarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-inventarios-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Model Inventarios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'INVE_ID',
            'INVE_PRECIO',
            'INVE_STOK',
            'INVE_STOK_MIN',
            'INVE_ESTADO',
            // 'PROD_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
