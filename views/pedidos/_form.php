<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ModelEstados;

/* @var $this yii\web\View */
/* @var $modelPedidos app\modelPedidos\ModelPedidos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-pedidos-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- agarrando la fecha del sistema y ademas que sea de solo lectura (enable=false) -->
     <?php echo $form->field($modelPedidos,'PEDI_FECHA')
            ->textInput(['type'=>'','readonly' => true, 'value' => date('y-m-d')])->label() ?>

    <!-- mustrando en un select la informacion de los clientes -->
     <?= $form->field($modelPedidos, 'PERS_ID')->textInput(['type'=>'','readonly' => true, 'value' => Yii::$app->request->get('idPersona')])->label() ?>  

    <?= $form->field($modelPedidos, 'PEDI_OBSERVACION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelPedidos, 'PEDI_DIRECCION')->textInput(['maxlength' => true]) ?>

     <!-- MUESTRA LOS SEXOS EN UN SELECT  -->
    <?= $form->field($modelPedidos, 'ESTA_ID')->dropDownList(ArrayHelper::map(modelEstados::find()->asArray()->all(), 'ESTA_ID', 'ESTA_DETALLE'), ['prompt'=>'-Seleccione una opcion-'])?>

   

    <div class="form-group">
        <?= Html::submitButton($modelPedidos->isNewRecord ? 'Create' : 'Update', ['class' => $modelPedidos->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
