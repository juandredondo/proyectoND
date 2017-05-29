<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ModelEstados */

$this->title = $model->ESTA_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Estados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-estados-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ESTA_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ESTA_ID], [
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
            'ESTA_ID',
            'ESTA_DETALLE',
        ],
    ]) ?>

</div>
