<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModelInventarios */

$this->title = 'Update Model Inventarios: ' . $model->INVE_ID;
$this->params['breadcrumbs'][] = ['label' => 'Model Inventarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->INVE_ID, 'url' => ['view', 'id' => $model->INVE_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-inventarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
