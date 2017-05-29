<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ModelTipoIden;

/**
 * BuscarTipoIden represents the model behind the search form about `app\models\ModelTipoIden`.
 */
class BuscarTipoIden extends ModelTipoIden
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TIID_ID'], 'integer'],
            [['TIID_DESCRIPCION'], 'safe'],
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
        $query = ModelTipoIden::find();

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
            'TIID_ID' => $this->TIID_ID,
        ]);

        $query->andFilterWhere(['like', 'TIID_DESCRIPCION', $this->TIID_DESCRIPCION]);

        return $dataProvider;
    }
}
