<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Slider;

/**
 * SliderSearch represents the model behind the search form of `frontend\models\Slider`.
 */
class SliderSearch extends Slider
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sort_order', 'is_public', 'target'], 'integer'],
            [['title', 'subtitle', 'description', 'image', 'link', 'create_date', 'update_date'], 'safe'],
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        // По возрастанию (1, 2, 10):
        //$query = Slider::find()->orderBy('LENGTH(sort_order) ASC, sort_order ASC');

        // По убыванию (10, 2, 1):
        //$query = Slider::find()->orderBy('LENGTH(sort_order) DESC, sort_order DESC');
        $query = Slider::find()->orderBy('LENGTH(sort_order), sort_order');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 30,
            ],
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'sort_order' => $this->sort_order,
            'is_public' => $this->is_public,
            'target' => $this->target,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'subtitle', $this->subtitle])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'link', $this->link]);

        return $dataProvider;
    }
}
