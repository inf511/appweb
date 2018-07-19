<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Plano".
 *
 * @property int $idPlano
 * @property int $idEmpleado
 * @property int $idVivienda
 * @property string $fecha
 *
 * @property DetPlanoTuberia[] $detPlanoTuberias
 * @property Empleado $empleado
 * @property Vivienda $vivienda
 */
class Plano extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Plano';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idEmpleado', 'idVivienda'], 'default', 'value' => null],
            [['idEmpleado', 'idVivienda'], 'integer'],
            [['fecha'], 'safe'],
            [['idEmpleado'], 'exist', 'skipOnError' => true, 'targetClass' => Empleado::className(), 'targetAttribute' => ['idEmpleado' => 'idEmpleado']],
            [['idVivienda'], 'exist', 'skipOnError' => true, 'targetClass' => Vivienda::className(), 'targetAttribute' => ['idVivienda' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPlano' => 'Id Plano',
            'idEmpleado' => 'Id Empleado',
            'idVivienda' => 'Id Vivienda',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetPlanoTuberias()
    {
        return $this->hasMany(DetPlanoTuberia::className(), ['idPlano' => 'idPlano']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleado()
    {
        return $this->hasOne(Empleado::className(), ['idEmpleado' => 'idEmpleado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVivienda()
    {
        return $this->hasOne(Vivienda::className(), ['id' => 'idVivienda']);
    }
}
