<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuscarPersJuridicas */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personas Juridicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-pers-juridicas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nueva Persona Juridica', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PEJU_ID',
            'PEJU_NOMBRE',
            'PEJU_OBJETOCOMERCIAL',
            'PERS_ID',

           ['class' => 'yii\grid\ActionColumn',

           
            'template' => '{update}{delete}{view} {pedidos}',
                'buttons'  =>
                 [
                   
                     'pedidos'=>function($model, $key1,$url){
                                $url=Yii::$app->urlManager->createUrl(['pedidos/create', 'idPersona' => $key1->PERS_ID]);
                            return Html::a('<span class=" glyphicon glyphicon-check "> </span>', $url ,
                                [
                                    'title' => \Yii::t('yii', 'Crear Pedido'),
                                ]);    

                            }, 
                ],
             ],
        ],
    ]); ?>
</div>
