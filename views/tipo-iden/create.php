<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelTipoIden */

$this->title = 'Tipo de Identificación';
$this->params['breadcrumbs'][] = ['label' => 'Nuevo Tipo de Identificación', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-tipo-iden-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
