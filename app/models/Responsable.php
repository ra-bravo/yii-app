<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbResponsableOperativo".
 *
 * @property int $t5CodigoOP
 * @property int $t5CodigoSO
 * @property int $t5TipoOP
 * @property string $t5Nombre
 * @property string $t5ApelldoPOP
 * @property string $t5ApelldoMOP
 * @property string $t5CorreoOP
 * @property string $t5Lada
 * @property string $t5Telefono
 * @property string $t5Celular
 * @property string $t5ExtOP
 */
class Responsable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbResponsableOperativo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t5CodigoOP', 't5CodigoSO', 't5TipoOP', 't5Nombre', 't5ApelldoMOP'], 'required'],
            [['t5CodigoOP', 't5CodigoSO', 't5TipoOP'], 'integer'],
            [['t5Nombre', 't5ApelldoPOP', 't5ApelldoMOP'], 'string', 'max' => 30],
            [['t5CorreoOP'], 'string', 'max' => 128],
            [['t5Lada'], 'string', 'max' => 3],
            [['t5Telefono'], 'string', 'max' => 7],
            [['t5Celular'], 'string', 'max' => 10],
            [['t5ExtOP'], 'string', 'max' => 5],
            [['t5CodigoOP'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't5CodigoOP' => 'Código',
            't5CodigoSO' => 'Código Sujeto Obligado',
            't5TipoOP' => 'Tipo de Responsable',
            't5Nombre' => 'Nombre',
            't5ApelldoPOP' => 'Apellido paterno',
            't5ApelldoMOP' => 'Apellido materno',
            't5CorreoOP' => 'Correo Institucional',
            't5Lada' => 'Lada',
            't5Telefono' => 'Teléfono',
            't5Celular' => 'Celular',
            't5ExtOP' => 'Ext.',
        ];
    }
}
