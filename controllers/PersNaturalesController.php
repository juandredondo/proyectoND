<?php

namespace app\controllers;

use Yii;
//importando todos los modelos a utilizar 
use app\models\ModelPersNaturales;
use app\models\BuscarPersNaturales;
use app\models\ModelPersonas;
use app\models\ModelSexos;
use app\models\ModelTipoIden;

use yii\helpers\ArrayHelper;//para trabajar con las listas desplegables
use yii\jui\DatePicker;//trabajando  con el calentario

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\helpers\Json;

/**
 * PersNaturalesController implements the CRUD actions for ModelPersNaturales model.
 */
class PersNaturalesController extends Controller
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
     * Lists all ModelPersNaturales models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BuscarPersNaturales();
    
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }

    /**
     * Displays a single ModelPersNaturales model.
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
     * Creates a new ModelPersNaturales model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        //declarando el objeto de los modelos correspondientes
        $modelPersNaturales = new ModelPersNaturales();
        $modelPersonas = new ModelPersonas();
        $modelSexos = new ModelSexos();
        $modelTipoIden = new ModelTipoIden();


        //1.cargando todos los modelos de personas y personas naturales 
        if ($modelPersonas->load(Yii::$app->request->post())&&
            $modelPersNaturales->load(Yii::$app->request->post()))
         {

            //si se guarda el modelo personas, se le coloca su id  de llave foranea en la tabla personas naturales
            if($modelPersonas->save())
            {
                //guarda el ide de personas y lo agrega en la tabla personas naturales
                $modelPersNaturales->PERS_ID=$modelPersonas->PERS_ID;
                //  si se guarda en personas naturales entonces muestra el respectivo detalle
                if($modelPersNaturales->save())
                {
                    return $this->redirect(['view', 'id' => $modelPersNaturales->PENA_ID]);
                }
            }

        }
         // si no se han cargado los datos llamo al formulario create y le mando los modelos

        else {
            return $this->render('create', [
                'modelPersNaturales' => $modelPersNaturales,
                'modelPersonas'      => $modelPersonas,
                'modelSexos'         => $modelSexos,
                'modelTipoIden'      => $modelTipoIden,
            ]);
        }
    }

    /**
     * Updates an existing ModelPersNaturales model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $modelPersNaturales = ModelPersNaturales::findOne($id);
        $modelPersonas = ModelPersonas::findOne($modelPersNaturales->PERS_ID);



        if ($modelPersonas->load(Yii::$app->request->post())&&
            $modelPersNaturales->load(Yii::$app->request->post()))
         {
             if($modelPersonas->save())
            {
                //guarda el ide de personas y lo agrega en la tabla personas naturales
                $modelPersNaturales->PERS_ID=$modelPersonas->PERS_ID;
                //  si se guarda en personas naturales entonces muestra el respectivo detalle
                if($modelPersNaturales->save())
                {
                    return $this->redirect(['view', 'id' => $modelPersNaturales->PENA_ID]);
                }
                //guarda el ide de personas y lo agrega en la tabla personas naturales
            }
        }
        else{

            return $this->render('update', [

                'modelPersNaturales' => $modelPersNaturales,
                'modelPersonas'      => $modelPersonas,
            ]);
            }
    }

    /**
     * Deletes an existing ModelPersNaturales model.
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
     * Finds the ModelPersNaturales model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ModelPersNaturales the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ModelPersNaturales::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
