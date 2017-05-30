<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelPersonas */

$this->title = ' Personas';
$this->params['breadcrumbs'][] = ['label' => 'Nueva Persona', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-personas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
