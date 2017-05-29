<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ModelPedidos;

/**
 * BuscarPedidos represents the model behind the search form about `app\models\ModelPedidos`.
 */
class BuscarPedidos extends ModelPedidos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PEDI_ID', 'ESTA_ID', 'PERS_ID'], 'integer'],
            [['PEDI_FECHA', 'PEDI_OBSERVACION', 'PEDI_DIRECCION'], 'safe'],
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
        $query = ModelPedidos::find();

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
            'PEDI_ID' => $this->PEDI_ID,
            'PEDI_FECHA' => $this->PEDI_FECHA,
            'ESTA_ID' => $this->ESTA_ID,
            'PERS_ID' => $this->PERS_ID,
        ]);

        $query->andFilterWhere(['like', 'PEDI_OBSERVACION', $this->PEDI_OBSERVACION])
            ->andFilterWhere(['like', 'PEDI_DIRECCION', $this->PEDI_DIRECCION]);

        return $dataProvider;
    }
}
