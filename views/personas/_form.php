<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ModelPersonas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-personas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PERS_IDENTIFICACION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PERS_TELEFONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PERS_DIRECCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PERS_EMAIL')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
