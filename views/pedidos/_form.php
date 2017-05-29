<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ModelPedidos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-pedidos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PEDI_FECHA')->textInput() ?>

    <?= $form->field($model, 'PEDI_OBSERVACION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEDI_DIRECCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESTA_ID')->textInput() ?>

    <?= $form->field($model, 'PERS_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
