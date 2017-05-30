<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModelFavoritos */

$this->title = 'Favoritos';
$this->params['breadcrumbs'][] = ['label' => 'Nuevo Favorito', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-favoritos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
