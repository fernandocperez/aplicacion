<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ordenadores".
 *
 * @property int $id
 * @property string|null $marca
 * @property string|null $modelo
 * @property string|null $estado
 * @property string|null $formato_anio
 * @property int|null $id_ubi
 *
 * @property Ubicacion $ubi
 */
class Ordenadores extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ordenadores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marca', 'modelo', 'estado', 'formato_anio', 'id_ubi'], 'default', 'value' => null],
            [['formato_anio'], 'safe'],
            [['id_ubi'], 'integer'],
            [['marca', 'modelo'], 'string', 'max' => 100],
            [['estado'], 'string', 'max' => 500],
            [['id_ubi'], 'exist', 'skipOnError' => true, 'targetClass' => Ubicacion::class, 'targetAttribute' => ['id_ubi' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'estado' => 'Estado',
            'formato_anio' => 'Año Formateado',
            'id_ubi' => 'Id Ubi',
        ];
    }

    /**
     * Gets query for [[Ubi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUbi()
    {
        return $this->hasOne(Ubicacion::class, ['id' => 'id_ubi']);
    }

}
