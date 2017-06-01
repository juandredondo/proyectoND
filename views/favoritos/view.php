<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ModelFavoritos */

$this->title = $model->FAVO_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Favoritos', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Favorito';
?>
<div class="model-favoritos-view">

    <h1><?= Html::encode('Favorito') ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->FAVO_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->FAVO_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'FAVO_ID',
            'PROD_ID',
            'PERS_ID',
        ],
    ]) ?>

</div>
