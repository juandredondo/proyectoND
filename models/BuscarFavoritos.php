<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ModelFavoritos;

/**
 * BuscarFavoritos represents the model behind the search form about `app\models\ModelFavoritos`.
 */
class BuscarFavoritos extends ModelFavoritos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FAVO_ID', 'PROD_ID', 'PERS_ID'], 'integer'],
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
        $query = ModelFavoritos::find();

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
            'FAVO_ID' => $this->FAVO_ID,
            'PROD_ID' => $this->PROD_ID,
            'PERS_ID' => $this->PERS_ID,
        ]);

        return $dataProvider;
    }
}
