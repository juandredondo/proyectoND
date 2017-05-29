<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelInventarios */

$this->title = 'Create Model Inventarios';
$this->params['breadcrumbs'][] = ['label' => 'Model Inventarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-inventarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
