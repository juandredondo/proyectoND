<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModelSexos */

$this->title = 'Update Model Sexos: ' . $model->SEX_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Sexos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SEX_ID, 'url' => ['view', 'id' => $model->SEX_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-sexos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
