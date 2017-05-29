<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BuscarPedidos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-pedidos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PEDI_ID') ?>

    <?= $form->field($model, 'PEDI_FECHA') ?>

    <?= $form->field($model, 'PEDI_OBSERVACION') ?>

    <?= $form->field($model, 'PEDI_DIRECCION') ?>

    <?= $form->field($model, 'ESTA_ID') ?>

    <?php // echo $form->field($model, 'PERS_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
