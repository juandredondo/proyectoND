<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BuscarPersJuridicas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-pers-juridicas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PEJU_ID') ?>

    <?= $form->field($model, 'PEJU_NOMBRE') ?>

    <?= $form->field($model, 'PEJU_OBJETOCOMERCIAL') ?>

    <?= $form->field($model, 'PERS_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
