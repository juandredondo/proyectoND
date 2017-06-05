<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ModelProductos;

/* @var $this yii\web\View */
/* @var $model app\models\ModelInventarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-inventarios-form col-md-6">

    <?php $form = ActiveForm::begin(); ?>

      <!-- campos de la tabla personas Y MOSTRANDO EN UN SELET LOS TIPOS DE TIPOS DE IDENTIFICACIONES-->
    <?= $form->field($model, 'PROD_ID')->dropDownList(ArrayHelper::map(ModelProductos::findBySql('call productosNotInventarios()')->asArray()->all(), 'PROD_ID', 'PROD_DESCRIPCION'), ['prompt'=>'-Seleccione una opcion-'])?>


    <?= $form->field($model, 'INVE_PRECIO')->textInput() ?>

    <?= $form->field($model, 'INVE_STOK')->textInput() ?>

    <?= $form->field($model, 'INVE_STOK_MIN')->textInput() ?>

    <?= $form->field($model, 'INVE_ESTADO')->textInput(['maxlength' => true]) ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
