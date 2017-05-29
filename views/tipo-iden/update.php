<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModelTipoIden */

$this->title = 'Update Model Tipo Iden: ' . $model->TIID_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Tipo Idens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TIID_ID, 'url' => ['view', 'id' => $model->TIID_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-tipo-iden-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
