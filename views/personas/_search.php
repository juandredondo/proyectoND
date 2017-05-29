<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BuscarPersonas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-personas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PERS_ID') ?>

    <?= $form->field($model, 'PERS_IDENTIFICACION') ?>

    <?= $form->field($model, 'PERS_TELEFONO') ?>

    <?= $form->field($model, 'PERS_DIRECCION') ?>

    <?= $form->field($model, 'PERS_EMAIL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
