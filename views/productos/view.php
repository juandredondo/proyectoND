<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ModelProductos */

$this->title = $model->PROD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-productos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PROD_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PROD_ID], [
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
            'PROD_ID',
            'PROD_DESCRIPCION',
      
            'PROD_FECHA_VENCIMIENTO',
        ],
    ]) ?>

</div>
