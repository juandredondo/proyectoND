<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ModelPersJuridicas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-pers-juridicas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PEJU_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEJU_OBJETOCOMERCIAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PERS_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
