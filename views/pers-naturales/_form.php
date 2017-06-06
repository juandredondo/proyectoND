<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ModelSexos;
use app\models\ModelTipoIden;

use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $modelPersNatural es el objeto que viene del controlador con todos los modelos de la tabla correspondiente
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-pers-naturales-form">

    <?php $form = ActiveForm::begin(); ?>
    <!-- campos de la tabla personas Y MOSTRANDO EN UN SELET LOS TIPOS DE TIPOS DE IDENTIFICACIONES-->
    <?= $form->field($modelPersNaturales, 'TIID_ID')->dropDownList(ArrayHelper::map(modelTipoIden::find()->asArray()->all(), 'TIID_ID', 'TIID_DESCRIPCION'), ['prompt'=>'-Seleccione una opcion-'])?>



     <?= $form->field($modelPersonas, 'PERS_IDENTIFICACION')->textInput(['maxlength' => true]) ?>
    <?= $form->field($modelPersonas, 'PERS_NOMBRE')->textInput(['maxlength' => true]) ?>
    
    <!-- MUESTRA LOS SEXOS EN UN SELECT  -->
    <?= $form->field($modelPersNaturales, 'SEX_ID')->dropDownList(ArrayHelper::map(modelSexos::find()->asArray()->all(), 'SEX_ID', 'SEX_NOMBRE'), ['prompt'=>'-Seleccione una opcion-'])?>

   
    <!--  widget  para desplegar calendario -->
        <?php echo $form->field($modelPersNaturales,'PENA_FECHANAC')->
        widget(DatePicker::className(),[
        'dateFormat' => 'yyyy-MM-dd',
        'language'=>'es',

        'clientOptions' => [
        'yearRange' => '-115:+0',
        'changeYear' => true,
        'changeMonth'=>true,
        'showAnim'=>'fold',
        'mode'=>'focus',]

        ]
        ) ?>


    <?= $form->field($modelPersonas, 'PERS_TELEFONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelPersonas, 'PERS_DIRECCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelPersonas, 'PERS_EMAIL')->textInput(['maxlength' => true]) ?>


   

    <div class="form-group">
        <?= Html::submitButton($modelPersNaturales->isNewRecord ? 'Create' : 'Update', ['class' => $modelPersNaturales->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
