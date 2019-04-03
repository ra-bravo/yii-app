<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbTurnoSO".
 *
 * @property int $t2ID
 * @property string $t2FolioMK
 * @property int $t2CodigoSO
 * @property string $t2FechaTurno
 * @property string $t2FechaPrevencion
 * @property string $t2FechaProrroga
 * @property string $t2FechaRespuesta
 * @property int $t2status
 */
class TurnoSujeto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbTurnoSO';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t2FolioMK', 't2CodigoSO'], 'required'],
            [['t2CodigoSO', 't2status'], 'integer'],
            [['t2FechaTurno', 't2FechaPrevencion', 't2FechaProrroga', 't2FechaRespuesta'], 'safe'],
            [['t2FolioMK'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't2ID' => 'T2 I D',
            't2FolioMK' => 'T2 Folio M K',
            't2CodigoSO' => 'T2 Codigo S O',
            't2FechaTurno' => 'T2 Fecha Turno',
            't2FechaPrevencion' => 'T2 Fecha Prevencion',
            't2FechaProrroga' => 'T2 Fecha Prorroga',
            't2FechaRespuesta' => 'T2 Fecha Respuesta',
            't2status' => 'T2status',
        ];
    }
}
