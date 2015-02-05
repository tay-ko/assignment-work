<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Realty;

/**
 * RealtySearch represents the model behind the search form about `app\models\Realty`.
 */
class RealtySearch extends Realty
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'id_type', 'id_status'], 'integer'],
            [['name', 'date', 'address'], 'safe'],
            [['price', 'long', 'lat'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Realty::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_user' => $this->id_user,
            'id_type' => $this->id_type,
            'id_status' => $this->id_status,
            'date' => $this->date,
            'price' => $this->price,
            'long' => $this->long,
            'lat' => $this->lat,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
