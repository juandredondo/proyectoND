<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuscarPersNaturales */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Model Pers Naturales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-pers-naturales-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Model Pers Naturales', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PENA_ID',
            'PENA_NOMBRE',
            'PENA_APELLIDO',
            'PENA_FECHANAC',
            'PERS_ID',
            // 'SEX_ID',
            // 'TIID_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
