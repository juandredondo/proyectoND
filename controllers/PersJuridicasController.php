<?php

namespace app\controllers;

use Yii;
use app\models\ModelPersJuridicas;
use app\models\BuscarPersJuridicas;
use app\models\ModelPersonas;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PersJuridicasController implements the CRUD actions for ModelPersJuridicas model.
 */
class PersJuridicasController extends Controller
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
     * Lists all ModelPersJuridicas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BuscarPersJuridicas();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ModelPersJuridicas model.
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
     * Creates a new ModelPersJuridicas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $modelPersJuridicas = new ModelPersJuridicas();
        $modelPersonas= new ModelPersonas();

         //1.cargando todos los modelos de personas y personas Juridicas 

        if ($modelPersonas->load(Yii::$app->request->post())&&
            $modelPersJuridicas->load(Yii::$app->request->post()))
         {

    
        //si se guarda el modelo personas, se le coloca su id  de llave foranea en la tabla personas Juridicas
                
        if($modelPersonas->save())
        {

            //guarda el ide de personas y lo agrega en la tabla personas Juridicas
                
                 $modelPersJuridicas->PERS_ID=$modelPersonas->PERS_ID;

             //  si se guarda en personas Juridicas entonces muestra el respectivo detalle
             if($modelPersJuridicas->save())
                {
                    return $this->redirect(['index']);
                }
            

        }
    }
         // si no se han cargado los datos llamo al formulario create y le mando los modelos

        else {
            return $this->render('create', [
                'modelPersJuridicas' => $modelPersJuridicas,
                'modelPersonas'      => $modelPersonas,
                
            ]);
        }

    }

    /**
     * Updates an existing ModelPersJuridicas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
         $modelPersJuridicas =ModelPersJuridicas::findOne($id);
        $modelPersonas = ModelPersonas::findOne($modelPersJuridicas->PERS_ID);

        if ($modelPersonas->load(Yii::$app->request->post()) && ($modelPersJuridicas->load(Yii::$app->request->post()))){
          if($modelPersonas->save())
          {

             //guarda el ide de personas y lo agrega en la tabla personas Juridicas

            $modelPersJuridicas->PERS_ID=$modelPersonas->PERS_ID;
                //  si se guarda en personas Juridicas entonces muestra el respectivo detalle
                if($modelPersJuridicas->save())
                {

                return $this->redirect(['view', 'id' => $modelPersJuridicas->PEJU_ID]);

               }
                //guarda el ide de personas y lo agrega en la tabla personas Juridicas
              }
        } else {
            return $this->render('update', [
                
                'model' => $modelPersJuridicas,
                'modelPersonas'      => $modelPersonas,
            ]);
        }
    }

    /**
     * Deletes an existing ModelPersJuridicas model.
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
     * Finds the ModelPersJuridicas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ModelPersJuridicas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ModelPersJuridicas::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
