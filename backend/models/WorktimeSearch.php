<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\mysql\Worktime;

/**
 * WorktimeSearch represents the model behind the search form of `common\models\mysql\Worktime`.
 */
class WorktimeSearch extends Worktime
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'adept_id', 'top_time', 'undertime', ' created_at', 'updated_at'], 'integer'],
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
        $query = Worktime::find();

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
            'adept_id' => $this->adept_id,
            'top_time' => $this->top_time,
            'undertime' => $this->undertime,
            ' created_at' => $this-> created_at,
            'updated_at' => $this->updated_at,
        ]);

        return $dataProvider;
    }
}
