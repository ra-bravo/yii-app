<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Solicitudes;

/**
 * SolicitudesSearch represents the model behind the search form of `app\models\Solicitudes`.
 */
class SolicitudesSearch extends Solicitudes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t1FolioMkatsina', 't1FolioINFOMEX', 't1SolicitudText', 't1FechaRecepcion', 't1FechaTurno', 't1FechaPrevencionSO', 't1LimPetProrroga', 't1FechaProrroga', 't1FechaLimiteRespoSO', 't1FechaLimiteResponder', 't1FechaLimiteInfeomex', 't1FechaConcluida', 't1Recepcion', 't1FolioRRInfomex', 't1FolioRRivai'], 'safe'],
            [['t1NumerPreg'], 'integer'],
            [['t1ConDatosPer'], 'boolean'],
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
        $query = Solicitudes::find();

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
            't1FechaRecepcion' => $this->t1FechaRecepcion,
            't1FechaTurno' => $this->t1FechaTurno,
            't1FechaPrevencionSO' => $this->t1FechaPrevencionSO,
            't1LimPetProrroga' => $this->t1LimPetProrroga,
            't1FechaProrroga' => $this->t1FechaProrroga,
            't1FechaLimiteRespoSO' => $this->t1FechaLimiteRespoSO,
            't1FechaLimiteResponder' => $this->t1FechaLimiteResponder,
            't1FechaLimiteInfeomex' => $this->t1FechaLimiteInfeomex,
            't1FechaConcluida' => $this->t1FechaConcluida,
            't1NumerPreg' => $this->t1NumerPreg,
            't1ConDatosPer' => $this->t1ConDatosPer,
        ]);

        $query->andFilterWhere(['like', 't1FolioMkatsina', $this->t1FolioMkatsina])
            ->andFilterWhere(['like', 't1FolioINFOMEX', $this->t1FolioINFOMEX])
            ->andFilterWhere(['like', 't1SolicitudText', $this->t1SolicitudText])
            ->andFilterWhere(['like', 't1Recepcion', $this->t1Recepcion])
            ->andFilterWhere(['like', 't1FolioRRInfomex', $this->t1FolioRRInfomex])
            ->andFilterWhere(['like', 't1FolioRRivai', $this->t1FolioRRivai]);

        return $dataProvider;
    }
}
