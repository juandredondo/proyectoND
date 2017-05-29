<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModelFavoritos */

$this->title = 'Update Model Favoritos: ' . $model->FAVO_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Favoritos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FAVO_ID, 'url' => ['view', 'id' => $model->FAVO_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-favoritos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
