<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModelPersJuridicas */

$this->title = 'Update Model Pers Juridicas: ' . $model->PEJU_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Pers Juridicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PEJU_ID, 'url' => ['view', 'id' => $model->PEJU_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-pers-juridicas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelPersonas'      => $modelPersonas,
    ]) ?>

</div>
