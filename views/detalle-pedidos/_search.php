<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BuscarDetallePedidos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-detalle-pedidos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'DEPE_ID') ?>

    <?= $form->field($model, 'DEPE_CANTIDAD') ?>

    <?= $form->field($model, 'PROD_ID') ?>

    <?= $form->field($model, 'PEDI_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
