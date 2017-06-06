<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $modelPersJuridicas es el objeto que viene del controlador con todos los modelos de la tabla correspondiente
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-pers-juridicas-form">

    <?php $form = ActiveForm::begin(); ?>

   	 <?= $form->field($modelPersonas, 'PERS_NOMBRE')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'PEJU_OBJETOCOMERCIAL')->textInput(['maxlength' => true]) ?>
    <?= $form->field($modelPersonas, 'PERS_TELEFONO')->textInput(['maxlength' => true]) ?>
    <?= $form->field($modelPersonas, 'PERS_DIRECCION')->textInput(['maxlength' => true]) ?>
    <?= $form->field($modelPersonas, 'PERS_EMAIL')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
