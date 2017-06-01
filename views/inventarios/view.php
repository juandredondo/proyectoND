<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ModelInventarios */

$this->title = $model->INVE_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Inventarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Inventario';
?>
<div class="model-inventarios-view">

    <h1><?= Html::encode('Inventario') ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->INVE_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->INVE_ID], [
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
            'INVE_ID',
            'INVE_PRECIO',
            'INVE_STOK',
            'INVE_STOK_MIN',
            'INVE_ESTADO',
            'PROD_ID',
        ],
    ]) ?>

</div>
