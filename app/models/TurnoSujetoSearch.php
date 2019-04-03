<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TurnoSujeto;

/**
 * TurnoSujetoSearch represents the model behind the search form of `app\models\TurnoSujeto`.
 */
class TurnoSujetoSearch extends TurnoSujeto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t2ID', 't2CodigoSO', 't2status'], 'integer'],
            [['t2FolioMK', 't2FechaTurno', 't2FechaPrevencion', 't2FechaProrroga', 't2FechaRespuesta'], 'safe'],
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
        $query = TurnoSujeto::find();

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
            't2ID' => $this->t2ID,
            't2CodigoSO' => $this->t2CodigoSO,
            't2FechaTurno' => $this->t2FechaTurno,
            't2FechaPrevencion' => $this->t2FechaPrevencion,
            't2FechaProrroga' => $this->t2FechaProrroga,
            't2FechaRespuesta' => $this->t2FechaRespuesta,
            't2status' => $this->t2status,
        ]);

        $query->andFilterWhere(['like', 't2FolioMK', $this->t2FolioMK]);

        return $dataProvider;
    }
}
