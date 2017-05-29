<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelTipoIden */

$this->title = 'Create Model Tipo Iden';
$this->params['breadcrumbs'][] = ['label' => 'Model Tipo Idens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-tipo-iden-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
