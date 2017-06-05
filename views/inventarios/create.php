<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelInventarios */

$this->title = 'Inventarios';
$this->params['breadcrumbs'][] = ['label' => 'Nuevo Inventario', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-inventarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
