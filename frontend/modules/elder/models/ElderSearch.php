<?php

namespace frontend\modules\elder\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\elder\models\Elder;

/**
 * ElderSearch represents the model behind the search form about `frontend\modules\elder\models\Elder`.
 */
class ElderSearch extends Elder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cid', 'house', 'catm', 'house_id', 'hospcode', 'hid', 'patient'], 'safe'],
            [['latitude', 'longitude'], 'number'],
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
        $query = Elder::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        $query->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'house', $this->house])
            ->andFilterWhere(['like', 'catm', $this->catm])
            ->andFilterWhere(['like', 'house_id', $this->house_id])
            ->andFilterWhere(['like', 'hospcode', $this->hospcode])
            ->andFilterWhere(['like', 'hid', $this->hid])
            ->andFilterWhere(['like', 'patient', $this->patient]);

        return $dataProvider;
    }
}
