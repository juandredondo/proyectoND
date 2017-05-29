<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ModelInventarios;

/**
 * BuscarInventarios represents the model behind the search form about `app\models\ModelInventarios`.
 */
class BuscarInventarios extends ModelInventarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['INVE_ID', 'PROD_ID'], 'integer'],
            [['INVE_PRECIO', 'INVE_STOK', 'INVE_STOK_MIN'], 'number'],
            [['INVE_ESTADO'], 'safe'],
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
        $query = ModelInventarios::find();

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
            'INVE_ID' => $this->INVE_ID,
            'INVE_PRECIO' => $this->INVE_PRECIO,
            'INVE_STOK' => $this->INVE_STOK,
            'INVE_STOK_MIN' => $this->INVE_STOK_MIN,
            'PROD_ID' => $this->PROD_ID,
        ]);

        $query->andFilterWhere(['like', 'INVE_ESTADO', $this->INVE_ESTADO]);

        return $dataProvider;
    }
}
