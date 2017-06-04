<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ModelProductos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-productos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PROD_DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PROD_FECHA_VENCIMIENTO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
