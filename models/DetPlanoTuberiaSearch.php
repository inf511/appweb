<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetPlanoTuberia;

/**
 * DetPlanoTuberiaSearch represents the model behind the search form of `app\models\DetPlanoTuberia`.
 */
class DetPlanoTuberiaSearch extends DetPlanoTuberia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idDetPlanoTuberia', 'idPlano', 'idTuberia', 'index'], 'integer'],
            [['distancia', 'precioUnitario', 'precioTotal', 'posX', 'posY'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DetPlanoTuberia::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idDetPlanoTuberia' => $this->idDetPlanoTuberia,
            'idPlano' => $this->idPlano,
            'idTuberia' => $this->idTuberia,
            'distancia' => $this->distancia,
            'precioUnitario' => $this->precioUnitario,
            'precioTotal' => $this->precioTotal,
            'index' => $this->index,
            'posX' => $this->posX,
            'posY' => $this->posY,
        ]);

        return $dataProvider;
    }
}
