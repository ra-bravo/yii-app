<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TipoSujeto;

/**
 * TipoSujetoSearch represents the model behind the search form of `app\models\TipoSujeto`.
 */
class TipoSujetoSearch extends TipoSujeto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t6TipoOP'], 'integer'],
            [['t6NombreOP'], 'safe'],
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
        $query = TipoSujeto::find();

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
            't6TipoOP' => $this->t6TipoOP,
        ]);

        $query->andFilterWhere(['like', 't6NombreOP', $this->t6NombreOP]);

        return $dataProvider;
    }
}
