<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ModelPersonas;

/**
 * BuscarPersonas represents the model behind the search form about `app\models\ModelPersonas`.
 */
class BuscarPersonas extends ModelPersonas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PERS_ID'], 'integer'],
            [['PERS_IDENTIFICACION', 'PERS_TELEFONO', 'PERS_DIRECCION', 'PERS_EMAIL'], 'safe'],
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
        $query = ModelPersonas::find();

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
            'PERS_ID' => $this->PERS_ID,
        ]);

        $query->andFilterWhere(['like', 'PERS_IDENTIFICACION', $this->PERS_IDENTIFICACION])
            ->andFilterWhere(['like', 'PERS_TELEFONO', $this->PERS_TELEFONO])
            ->andFilterWhere(['like', 'PERS_DIRECCION', $this->PERS_DIRECCION])
            ->andFilterWhere(['like', 'PERS_EMAIL', $this->PERS_EMAIL]);

        return $dataProvider;
    }
}
