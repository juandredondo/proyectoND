<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelPedidos */

$this->title = 'Pedidos';
$this->params['breadcrumbs'][] = ['label' => 'Nuevo Pedido', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-pedidos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'modelPedidos' => $modelPedidos,
        'modelEstados'=>$modelEstados,
     
    ]) ?>

</div>
