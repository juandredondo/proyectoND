<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelEstados */

$this->title = 'Estados';
$this->params['breadcrumbs'][] = ['label' => 'Nuevo Estado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-estados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
