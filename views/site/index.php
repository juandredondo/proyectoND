<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1> ¡ Niños Distribuciones Fritolay!</h1>

        <p class="lead"> "# Encontraras los Mejores Productos #" </p>

        <p><a class="btn btn-lg btn-success" href="/proyectoND/web/index.php?r=pedidos"> Ingresa Un Pedido</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Estados</h2>

                <p> Agregar Nuevo Estado del Producto.</p>

                <p><a class="btn btn-primary" href="/proyectoND/web/index.php?r=estados"> Ir &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Inventarios</h2>

                <p> Administra los Inventarios de los prodctos.</p>

                <p><a class="btn btn-primary" href="/proyectoND/web/index.php?r=inventarios">Ir &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Productos</h2>

                <p>Agrega un nuevo Producto.</p>

                <p><a class="btn btn-primary" href="/proyectoND/web/index.php?r=productos"> Ir &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
