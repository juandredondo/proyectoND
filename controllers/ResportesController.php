<?php

namespace app\controllers;

class ResportesController extends \yii\web\Controller
{


/*CONSULTA:

Mostrar una factura de un pedido en espesifico  en la cual se refleje la siguiente informacion

fecha de la factura,
nombre del cliente
n° del pedido
productos y detalle de productos 
sub total
total
*/
    public function actionFacturapedidos()
    {
		        
		public $dataProvider;
		public function actionGenerarpdf()
		 {
		  $varIdServicio=Yii::$app->request->get('idServicio');
		    
		  //esta consulta tiene todos los parametros
		   $consultaTodo=ModelClientes::findBySql("
		      select 
		      tbl_servicios.servi_id,
		      tbl_personas.pers_cedula,
		      tbl_personas.pers_nombre,
		      tbl_personas.pers_telefono,
		      tbl_equipos.eqpo_nombre,
		      tbl_equipos.eqpo_serie,
		      tbl_servicios.servi_descripcion,
		      tbl_mantenimiento.mtto_vr_manoObra,
		      tbl_piezas.pieza_referencia,
		      tbl_inventario.inven_precio,
		      tbl_detallexmantenimiento.deta_cant,
		      tbl_servicios.servi_vr_diag
		      FROM
		        tbl_personas
		        INNER JOIN tbl_clientes ON (tbl_personas.pers_id = tbl_clientes.pers_id)
		        INNER JOIN tbl_servicios ON (tbl_clientes.clien_id = tbl_servicios.clien_id)
		        INNER JOIN tbl_equipos ON (tbl_servicios.equipo_id = tbl_equipos.eqpo_id)
		        INNER JOIN tbl_mantenimiento ON (tbl_servicios.servi_id = tbl_mantenimiento.servi_id)
		        INNER JOIN tbl_detallexmantenimiento ON (tbl_mantenimiento.mtto_id = tbl_detallexmantenimiento.mtto_id)
		        INNER JOIN tbl_inventario ON (tbl_detallexmantenimiento.inven_id = tbl_inventario.inven_id)
		        INNER JOIN tbl_piezas ON (tbl_inventario.pieza_id = tbl_piezas.pieza_id)
		      WHERE
		      tbl_servicios.servi_id = $varIdServicio
		      ")->asArray()->all();


		  //se renderiza al pdf mandandole las consulta que se quieran que se muestren


		   //1.si tinenmantenimiento y detalle de mantenimiento
		   if(count($consultaTodo)!=0)
		   {
		      $this->render('pdf', ['dataProvider' => $consultaTodo]);
		    }
		    else{
		    //2.si por lo menos tiene un mantenimiento
		        if(count($consultaMantenimientos)!=0)
		        {
		          $this->render('pdf2', ['dataProvider' => $consultaMantenimientos]);
		        }
		        else
		        {
		          if(count($consultaServicios)!=0)
		            $this->render('pdf3', [ 'dataProvider' => $consultaServicios]);
		        }
		      }

		      
		  
		}
    }

}
