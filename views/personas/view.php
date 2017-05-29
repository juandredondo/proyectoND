<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ModelPersonas */

$this->title = $model->PERS_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-personas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PERS_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PERS_ID], [
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
            'PERS_ID',
            'PERS_IDENTIFICACION',
            'PERS_TELEFONO',
            'PERS_DIRECCION',
            'PERS_EMAIL:email',
        ],
    ]) ?>

</div>
