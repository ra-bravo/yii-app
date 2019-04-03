<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbSujetoObligado".
 *
 * @property int $t3Codigo
 * @property int $t3Region
 * @property int $t3TipoSO
 * @property string $t3SOnombre
 */
class SujetoObligado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbSujetoObligado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t3Codigo', 't3SOnombre'], 'required'],
            [['t3Codigo', 't3Region', 't3TipoSO'], 'integer'],
            [['t3SOnombre'], 'string', 'max' => 254],
            [['t3Codigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't3Codigo' => 'Código:',
            't3Region' => 'Región',
            't3TipoSO' => 'Tipo',
            't3SOnombre' => 'Descripción',
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function relations()
     {
         return array(
         'Region' => array(self::BELONGS_TO, 'tbregiones', 't5codigorg'),
         //Prestar atención a esta parte, ya que "categoria" será usado para acceder a dicho modelo y hacer consultas de una forma sencilla.
         //El modelo Categorias tiene los siguientes campos: id_categoria (pk) y desc_categoria
         );
     }
}
