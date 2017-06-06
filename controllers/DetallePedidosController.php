<?php

namespace app\controllers;

use Yii;
use app\models\ModelDetallePedidos;
use app\models\BuscarDetallePedidos;
use app\models\ModelProductos;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetallePedidosController implements the CRUD actions for ModelDetallePedidos model.
 */
class DetallePedidosController extends Controller
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
     * Lists all ModelDetallePedidos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BuscarDetallePedidos();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ModelDetallePedidos model.
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
     * Creates a new ModelDetallePedidos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ModelDetallePedidos();
        $searchModel = new BuscarDetallePedidos();
        $modelProductos=new ModelProductos();


        $dataProvider = $searchModel->search2(Yii::$app->request->get('idPedido'));

        $varIdPedido=Yii::$app->request->get('idPedido');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['create', 'idPedido' =>$varIdPedido]);
        } 
        else {
            return $this->render('create', [
                'model' => $model,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'modelProductos'=>$modelProductos,
            ]);
        }
    }

    /**
     * Updates an existing ModelDetallePedidos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['create', 'idPedido' => $model->PEDI_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ModelDetallePedidos model.
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
     * Finds the ModelDetallePedidos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ModelDetallePedidos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ModelDetallePedidos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
