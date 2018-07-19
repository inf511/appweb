<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DetPlanoTuberia".
 *
 * @property int $idDetPlanoTuberia
 * @property int $idPlano
 * @property int $idTuberia
 * @property string $distancia
 * @property string $precioUnitario
 * @property string $precioTotal
 * @property int $index
 * @property string $posX
 * @property string $posY
 *
 * @property Plano $plano
 * @property Tuberia $tuberia
 */
class DetPlanoTuberia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'DetPlanoTuberia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idPlano', 'idTuberia', 'index'], 'default', 'value' => null],
            [['idPlano', 'idTuberia', 'index'], 'integer'],
            [['distancia', 'precioUnitario', 'precioTotal', 'posX', 'posY'], 'number'],
            [['idPlano'], 'exist', 'skipOnError' => true, 'targetClass' => Plano::className(), 'targetAttribute' => ['idPlano' => 'idPlano']],
            [['idTuberia'], 'exist', 'skipOnError' => true, 'targetClass' => Tuberia::className(), 'targetAttribute' => ['idTuberia' => 'idTuberia']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idDetPlanoTuberia' => 'Id Det Plano Tuberia',
            'idPlano' => 'Id Plano',
            'idTuberia' => 'Id Tuberia',
            'distancia' => 'Distancia',
            'precioUnitario' => 'Precio Unitario',
            'precioTotal' => 'Precio Total',
            'index' => 'Index',
            'posX' => 'Pos X',
            'posY' => 'Pos Y',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlano()
    {
        return $this->hasOne(Plano::className(), ['idPlano' => 'idPlano']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTuberia()
    {
        return $this->hasOne(Tuberia::className(), ['idTuberia' => 'idTuberia']);
    }
}
