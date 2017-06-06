<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ModelPersNaturales;

/**
 * BuscarPersNaturales represents the model behind the search form about `app\models\ModelPersNaturales`.
 */
class BuscarPersNaturales extends ModelPersNaturales
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PENA_ID', 'PERS_ID', 'SEX_ID', 'TIID_ID'], 'integer'],
            [[ 'PENA_FECHANAC'], 'safe'],
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
        $query = ModelPersNaturales::find();

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
            'PENA_ID' => $this->PENA_ID,
            'PENA_FECHANAC' => $this->PENA_FECHANAC,
            'PERS_ID' => $this->PERS_ID,
            'SEX_ID' => $this->SEX_ID,
            'TIID_ID' => $this->TIID_ID,
        ]);

        
        return $dataProvider;
    }
}
