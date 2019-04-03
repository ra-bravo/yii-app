<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Responsable;

/**
 * ResponsableSearch represents the model behind the search form of `app\models\Responsable`.
 */
class ResponsableSearch extends Responsable
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t5CodigoOP', 't5CodigoSO', 't5TipoOP'], 'integer'],
            [['t5Nombre', 't5ApelldoPOP', 't5ApelldoMOP', 't5CorreoOP', 't5Lada', 't5Telefono', 't5Celular', 't5ExtOP'], 'safe'],
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
        $query = Responsable::find();

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
            't5CodigoOP' => $this->t5CodigoOP,
            't5CodigoSO' => $this->t5CodigoSO,
            't5TipoOP' => $this->t5TipoOP,
        ]);

        $query->andFilterWhere(['like', 't5Nombre', $this->t5Nombre])
            ->andFilterWhere(['like', 't5ApelldoPOP', $this->t5ApelldoPOP])
            ->andFilterWhere(['like', 't5ApelldoMOP', $this->t5ApelldoMOP])
            ->andFilterWhere(['like', 't5CorreoOP', $this->t5CorreoOP])
            ->andFilterWhere(['like', 't5Lada', $this->t5Lada])
            ->andFilterWhere(['like', 't5Telefono', $this->t5Telefono])
            ->andFilterWhere(['like', 't5Celular', $this->t5Celular])
            ->andFilterWhere(['like', 't5ExtOP', $this->t5ExtOP]);

        return $dataProvider;
    }
}
