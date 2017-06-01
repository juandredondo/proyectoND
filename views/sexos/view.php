<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ModelSexos */

$this->title = $model->SEX_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Sexos', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Sexo';
?>
<div class="model-sexos-view">

    <h1><?= Html::encode('Sexo') ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SEX_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SEX_ID], [
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
            'SEX_ID',
            'SEX_NOMBRE',
        ],
    ]) ?>

</div>
