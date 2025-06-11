<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ubicacion".
 *
 * @property int $id
 * @property string|null $aula
 * @property string|null $descripcion
 *
 * @property Ordenadores[] $ordenadores
 */
class Ubicacion extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ubicacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aula', 'descripcion'], 'default', 'value' => null],
            [['aula'], 'string', 'max' => 20],
            [['descripcion'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'aula' => 'Aula',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * Gets query for [[Ordenadores]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenadores()
    {
        return $this->hasMany(Ordenadores::class, ['id_ubi' => 'id']);
    }

}
