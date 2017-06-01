<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\app\ModelInventarios;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuscarInventarios */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inventarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-inventarios-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nuevo Ingreso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([

        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
            {
            if($modelInventarios->INVE_STOK<$modelInventarios->INVE_STOK_MIN && $modelInventarios->INVE_STOK=1)
                {
                    return ['class'=>'warning'];
                }
                if($modelInventarios->INVE_STOK<='0')
                {
                    return ['class'=>'danger'];
                }

            },


        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'INVE_ID',
            'pROD.PROD_DESCRIPCION',
          
            'INVE_PRECIO',
            'INVE_STOK',
            'INVE_STOK_MIN',
            'INVE_ESTADO',
            // 'PROD_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
