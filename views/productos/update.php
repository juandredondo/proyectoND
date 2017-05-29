<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModelProductos */

$this->title = 'Update Model Productos: ' . $model->PROD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PROD_ID, 'url' => ['view', 'id' => $model->PROD_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-productos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
