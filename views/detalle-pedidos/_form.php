<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\ModelProductos;
use app\models\ModelInventarios;

/* @var $this yii\web\View */
/* @var $model app\models\ModelDetallePedidos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-detalle-pedidos-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- mustrando en un select la informacion de los clientes -->
     <?= $form->field($model, 'PEDI_ID')->textInput(['type'=>'','readonly' => true, 'value' => Yii::$app->request->get('idPedido')])->label() ?>  


    <?= $form->field($model, 'DEPE_CANTIDAD')->textInput() ?>

      <?= $form->field($model, 'INVE_ID')->dropDownList(ArrayHelper::map(ModelProductos::findBySql(' call inventariosActivos()')->asArray()->all(), 'inve_id', 'prod_descripcion'), ['prompt'=>'-Seleccione una opcion-'])?> 



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

  

    <?php ActiveForm::end(); ?>

</div>
