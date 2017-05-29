<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ModelTipoIden */

$this->title = $model->TIID_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Tipo Idens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-tipo-iden-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->TIID_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->TIID_ID], [
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
            'TIID_ID',
            'TIID_DESCRIPCION',
        ],
    ]) ?>

</div>
