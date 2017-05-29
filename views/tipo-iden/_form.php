<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ModelTipoIden */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-tipo-iden-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TIID_DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
