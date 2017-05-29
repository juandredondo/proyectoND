<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ModelPersNaturales */

$this->title = $model->PENA_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Pers Naturales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-pers-naturales-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PENA_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PENA_ID], [
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
            'PENA_ID',
            'PENA_NOMBRE',
            'PENA_APELLIDO',
            'PENA_FECHANAC',
            'PERS_ID',
            'SEX_ID',
            'TIID_ID',
        ],
    ]) ?>

</div>
