<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ModelInventarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-inventarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'INVE_PRECIO')->textInput() ?>

    <?= $form->field($model, 'INVE_STOK')->textInput() ?>

    <?= $form->field($model, 'INVE_STOK_MIN')->textInput() ?>

    <?= $form->field($model, 'INVE_ESTADO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PROD_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
