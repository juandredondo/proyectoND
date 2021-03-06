<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ModelDetallePedidos;

/**
 * BuscarDetallePedidos represents the model behind the search form about `app\models\ModelDetallePedidos`.
 */
class BuscarDetallePedidos extends ModelDetallePedidos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DEPE_ID', 'INVE_ID', 'PEDI_ID'], 'integer'],
            [['DEPE_CANTIDAD'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ModelDetallePedidos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'DEPE_ID' => $this->DEPE_ID,
            'DEPE_CANTIDAD' => $this->DEPE_CANTIDAD,
            'INVE_ID' => $this->INVE_ID,
            'PEDI_ID' => $this->PEDI_ID,
        ]);

        return $dataProvider;
    }
    ///muestra la lista de los elemtos que pertenecen a un mantenimiento en especifico
    public function search2($params)
    {    
       $consulta='select * from tbl_detallepedido where PEDI_ID= '.$params;
        $query = ModelDetallePedidos::findBySql($consulta);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!$this->validate()) {
            return $dataProvider;
        }
        return $dataProvider;
    }
}
