<?php

namespace app\controllers;

use Yii;
use app\models\ModelPedidos;
use app\models\ModelPersonas;
use app\models\ModelDetallePedidos;
use app\models\ModelEstados;

use app\models\BuscarPedidos;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PedidosController implements the CRUD actions for ModelPedidos model.
 */
class PedidosController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ModelPedidos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BuscarPedidos();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ModelPedidos model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ModelPedidos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        //1.se  declaran los diferentes objetos de los modelos correspondientes
        $modelPedidos = new ModelPedidos();
        $modelDetallePedido= new ModelDetallePedidos();
        $modelEstados=new ModelEstados();
       
        //2. se pregunta si se cargaron correctamente el modelo de pedidos
        if ($modelPedidos->load(Yii::$app->request->post())) {
            //3.  Pregunta que si se guardaron los datos cargados en el modelo
            if($modelPedidos->save())
            {
                //mando por url el id del pedido
                return $this->redirect(['detalle-pedidos/create','idPedido' => $modelPedidos->PEDI_ID]);
            }

        } else {
            //si el modelo no se ha cargado todavia manda al a vista create y de le mandan los modelos correspondientes  
            return $this->render('create', [
                'modelPedidos' => $modelPedidos,
                'modelEstados' => $modelEstados,

            ]);
        }
    }

    /**
     * Updates an existing ModelPedidos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->PEDI_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ModelPedidos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ModelPedidos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ModelPedidos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ModelPedidos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public $dataProvider;
        public function actionGenerarpdf()
         {
          $varIdPedido=Yii::$app->request->get('idpedido');


            
          //esta consulta tiene todos los parametros
           $consultaTodo=ModelPersonas::findBySql("
             select 
            tbl_pedidos.PEDI_FECHA,
            tbl_pedidos.PEDI_ID,
            tbl_productos.PROD_DESCRIPCION,
            tbl_invetarios.INVE_PRECIO,
            tbl_detallepedido.DEPE_CANTIDAD,
            tbl_personas.PERS_IDENTIFICACION,
            tbl_personas.PERS_NOMBRE,
            tbl_personas.PERS_TELEFONO
            FROM
            tbl_productos
            INNER JOIN tbl_invetarios ON (tbl_productos.PROD_ID = tbl_invetarios.PROD_ID)
            INNER JOIN tbl_detallepedido ON (tbl_invetarios.INVE_ID = tbl_detallepedido.INVE_ID)
            INNER JOIN tbl_pedidos ON (tbl_pedidos.PEDI_ID = tbl_detallepedido.PEDI_ID)
            INNER JOIN tbl_personas ON (tbl_pedidos.PERS_ID = tbl_personas.PERS_ID)
            WHERE
            tbl_pedidos.PEDI_ID =  $varIdPedido
              ")->asArray()->all();


         
              $this->render('facturapedidos', ['dataProvider' => $consultaTodo]);
          
         

              
          
        }
}
