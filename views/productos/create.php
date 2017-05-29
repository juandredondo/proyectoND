<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelProductos */

$this->title = 'Create Model Productos';
$this->params['breadcrumbs'][] = ['label' => 'Model Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-productos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>