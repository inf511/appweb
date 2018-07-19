<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tuberia".
 *
 * @property int $idTuberia
 * @property string $medida
 * @property string $descripcion
 * @property string $precio
 *
 * @property DetPlanoTuberia[] $detPlanoTuberias
 */
class Tuberia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tuberia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['precio'], 'number'],
            [['medida'], 'string', 'max' => 25],
            [['descripcion'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTuberia' => 'Id Tuberia',
            'medida' => 'Medida',
            'descripcion' => 'Descripcion',
            'precio' => 'Precio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetPlanoTuberias()
    {
        return $this->hasMany(DetPlanoTuberia::className(), ['idTuberia' => 'idTuberia']);
    }
}
