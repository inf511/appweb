<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tuberia;

/**
 * TuberiaSearch represents the model behind the search form of `app\models\Tuberia`.
 */
class TuberiaSearch extends Tuberia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTuberia'], 'integer'],
            [['medida', 'descripcion'], 'safe'],
            [['precio'], 'number'],
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
        $query = Tuberia::find();

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
            'idTuberia' => $this->idTuberia,
            'precio' => $this->precio,
        ]);

        $query->andFilterWhere(['ilike', 'medida', $this->medida])
            ->andFilterWhere(['ilike', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
