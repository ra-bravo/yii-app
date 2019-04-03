<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbTipoSO".
 *
 * @property int $t6TipoOP
 * @property string $t6NombreOP
 */
class TipoSujeto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbTipoSO';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t6TipoOP', 't6NombreOP'], 'required'],
            [['t6TipoOP'], 'integer'],
            [['t6NombreOP'], 'string', 'max' => 52],
            [['t6TipoOP'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't6TipoOP' => 'Código',
            't6NombreOP' => 'Descripción',
        ];
    }
}
