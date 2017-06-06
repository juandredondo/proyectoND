<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuscarPedidos */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-pedidos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nuevo Pedido', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PEDI_ID',
            'pERS.PERS_ID',
            'PEDI_FECHA',
           //    'PEDI_OBSERVACION',
            'PEDI_DIRECCION',
            'eSTA.ESTA_DETALLE',
            'pERS.PERS_TELEFONO',
            
            // 'PERS_ID',

         
          ['class' => 'yii\grid\ActionColumn',

           
            'template' => '{update}{delete}{view} {pedidos}',
                'buttons'  =>
                 [
                   
                     'pedidos'=>function($model, $key1,$url){
                                $url=Yii::$app->urlManager->createUrl(['reportes/facturaPedidos', 'idPersona' => $key1->PERS_ID]);
                            return Html::a('<span class=" glyphicon glyphicon-file"> </span>', $url ,
                                [
                                    'title' => \Yii::t('yii', 'Crear Pedido'),
                                ]);    

                            }, 
                ],
             ],
        ],
    ]); ?>
</div>
