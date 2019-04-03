<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Regiones;

/**
 * RegionesSearch represents the model behind the search form of `app\models\Regiones`.
 */
class RegionesSearch extends Regiones
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t5codigorg'], 'integer'],
            [['t5rgnombre'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Regiones::find();

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
            't5codigorg' => $this->t5codigorg,
        ]);

        $query->andFilterWhere(['like', 't5rgnombre', $this->t5rgnombre]);

        return $dataProvider;
    }
}
