<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelSexos */

$this->title = 'Sexos';
$this->params['breadcrumbs'][] = ['label' => 'Nuevo Sexo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-sexos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
