<?php

namespace app\common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\common\models\Follow;

/**
 * FollowSearch represents the model behind the search form of `app\common\models\Follow`.
 */
class FollowSearch extends Follow
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['yf_follow_id', 'area', 'customer_type', 'follow_status'], 'integer'],
            [['staff_name', 'company_name', 'follow_date'], 'safe'],
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
        $query = Follow::find();

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
            'yf_follow_id' => $this->yf_follow_id,
            'area' => $this->area,
            'customer_type' => $this->customer_type,
            'follow_status' => $this->follow_status,
        ]);

        $query->andFilterWhere(['like', 'staff_name', $this->staff_name])
            ->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'follow_date', $this->follow_date]);

        return $dataProvider;
    }
}
