<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ModelPersJuridicas;

/**
 * BuscarPersJuridicas represents the model behind the search form about `app\models\ModelPersJuridicas`.
 */
class BuscarPersJuridicas extends ModelPersJuridicas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PEJU_ID', 'PERS_ID'], 'integer'],
            [[ 'PEJU_OBJETOCOMERCIAL'], 'safe'],
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
        $query = ModelPersJuridicas::find();

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
            'PEJU_ID' => $this->PEJU_ID,
            'PERS_ID' => $this->PERS_ID,
        ]);

        $query->andFilterWhere(['like', 'PEJU_OBJETOCOMERCIAL', $this->PEJU_OBJETOCOMERCIAL]);

        return $dataProvider;
    }
}
