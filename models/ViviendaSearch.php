<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vivienda;

/**
 * ViviendaSearch represents the model behind the search form of `app\models\Vivienda`.
 */
class ViviendaSearch extends Vivienda
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['duenio', 'barrio', 'ciudad', 'calle', 'nro'], 'safe'],
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
        $query = Vivienda::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['ilike', 'duenio', $this->duenio])
            ->andFilterWhere(['ilike', 'barrio', $this->barrio])
            ->andFilterWhere(['ilike', 'ciudad', $this->ciudad])
            ->andFilterWhere(['ilike', 'calle', $this->calle])
            ->andFilterWhere(['ilike', 'nro', $this->nro]);

        return $dataProvider;
    }
}
