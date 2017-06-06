<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BuscarPersNaturales */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-pers-naturales-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PENA_ID') ?>


    <?= $form->field($model, 'PENA_FECHANAC') ?>

    <?= $form->field($model, 'PERS_ID') ?>

    <?php // echo $form->field($model, 'SEX_ID') ?>

    <?php // echo $form->field($model, 'TIID_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
