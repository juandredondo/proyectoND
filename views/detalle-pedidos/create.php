<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelDetallePedidos */

$this->title = 'Create Model Detalle Pedidos';
$this->params['breadcrumbs'][] = ['label' => 'Model Detalle Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-detalle-pedidos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
