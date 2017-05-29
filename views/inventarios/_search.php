<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BuscarInventarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-inventarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'INVE_ID') ?>

    <?= $form->field($model, 'INVE_PRECIO') ?>

    <?= $form->field($model, 'INVE_STOK') ?>

    <?= $form->field($model, 'INVE_STOK_MIN') ?>

    <?= $form->field($model, 'INVE_ESTADO') ?>

    <?php // echo $form->field($model, 'PROD_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
