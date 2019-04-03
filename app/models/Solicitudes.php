<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbSolicitudes".
 *
 * @property string $t1FolioMkatsina
 * @property string $t1FolioINFOMEX
 * @property string $t1SolicitudText
 * @property string $t1FechaRecepcion
 * @property string $t1FechaTurno
 * @property string $t1FechaPrevencionSO
 * @property string $t1LimPetProrroga
 * @property string $t1FechaProrroga
 * @property string $t1FechaLimiteRespoSO
 * @property string $t1FechaLimiteResponder
 * @property string $t1FechaLimiteInfeomex
 * @property string $t1FechaConcluida
 * @property int $t1NumerPreg
 * @property string $t1Recepcion
 * @property bool $t1ConDatosPer
 * @property string $t1FolioRRInfomex
 * @property string $t1FolioRRivai
 */
class Solicitudes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbSolicitudes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
            return [
            [['t1FolioMkatsina', 't1FolioINFOMEX', 't1SolicitudText'], 'required'],
            [['t1SolicitudText'], 'string'],
            [['t1FechaRecepcion', 't1FechaTurno', 't1FechaPrevencionSO', 't1LimPetProrroga', 't1FechaProrroga', 't1FechaLimiteRespoSO', 't1FechaLimiteResponder', 't1FechaLimiteInfeomex', 't1FechaConcluida'], 'safe', ], // 'safe'
            [['t1NumerPreg'], 'integer'],
            [['t1ConDatosPer'], 'boolean'],
            [['t1FolioMkatsina', 't1FolioINFOMEX'], 'string', 'max' => 8],
            [['t1Recepcion'], 'string', 'max' => 25],
            [['t1FolioRRInfomex'], 'string', 'max' => 10],
            [['t1FolioRRivai'], 'string', 'max' => 9],
            [['t1FolioMkatsina'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't1FolioMkatsina' => 'Folio MKATSINÁ',
            't1FolioINFOMEX' => 'Folio I N F O M E X',
            't1SolicitudText' => 'Texto de Solicitud',
            't1FechaRecepcion' => 'Fecha de Recepcion',
            't1FechaTurno' => 'Fecha de Turno',
            't1FechaPrevencionSO' => 'Fecha de Prevencion',
            't1LimPetProrroga' => 'Fecha Prorroga S O',
            't1FechaProrroga' => 'Fecha de Prorroga',
            't1FechaLimiteRespoSO' => 'Fecha Respuesta S O',
            't1FechaLimiteResponder' => 'Fecha Responder CUTAI',
            't1FechaLimiteInfeomex' => 'Fecha INFOMEX',
            't1FechaConcluida' => 'Fecha Concluida',
            't1NumerPreg' => 'Numero de Preguntas',
            't1Recepcion' => 'Recepcion INFOMEX/MKATSINÁ',
            't1ConDatosPer' => 'Tiene datos Personales',
            't1FolioRRInfomex' => 'Recurso R INFOMEX',
            't1FolioRRivai' => 'Recurso R IVAI',
        ];
    }
}
