<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelPersJuridicas */

$this->title = 'Personas Juridicas';
$this->params['breadcrumbs'][] = ['label' => 'Nueva Persona Juridica', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-pers-juridicas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
