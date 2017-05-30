<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelPersNaturales */

$this->title = 'Personas Naturales';
$this->params['breadcrumbs'][] = ['label' => 'Nueva Persona Natural', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-pers-naturales-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
