<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ModelPersNaturales */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-pers-naturales-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PENA_ID')->textInput() ?>

    <?= $form->field($model, 'PENA_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PENA_APELLIDO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PENA_FECHANAC')->textInput() ?>

    <?= $form->field($model, 'PERS_ID')->textInput() ?>

    <?= $form->field($model, 'SEX_ID')->textInput() ?>

    <?= $form->field($model, 'TIID_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
