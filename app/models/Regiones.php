<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbregiones".
 *
 * @property int $t5codigorg
 * @property string $t5rgnombre
 */
class Regiones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbregiones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t5codigorg', 't5rgnombre'], 'required'],
            [['t5codigorg'], 'integer'],
            [['t5rgnombre'], 'string', 'max' => 52],
            [['t5codigorg'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't5codigorg' => 'Código',
            't5rgnombre' => 'Descripción',
        ];
    }
}
