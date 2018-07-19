<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Empleado".
 *
 * @property int $idEmpleado
 * @property string $nombre
 * @property string $apellido
 * @property string $ci
 * @property string $telefono
 * @property string $email
 * @property string $password
 *
 * @property Plano[] $planos
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Empleado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'ci', 'telefono', 'email', 'password'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEmpleado' => 'Id Empleado',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'ci' => 'Ci',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanos()
    {
        return $this->hasMany(Plano::className(), ['idEmpleado' => 'idEmpleado']);
    }
}
