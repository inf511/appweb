<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Vivienda".
 *
 * @property int $id
 * @property string $duenio
 * @property string $barrio
 * @property string $ciudad
 * @property string $calle
 * @property string $nro
 */
class Vivienda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Vivienda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['duenio', 'barrio', 'ciudad', 'calle'], 'string', 'max' => 50],
            [['nro'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'duenio' => 'Duenio',
            'barrio' => 'Barrio',
            'ciudad' => 'Ciudad',
            'calle' => 'Calle',
            'nro' => 'Nro',
        ];
    }
}
