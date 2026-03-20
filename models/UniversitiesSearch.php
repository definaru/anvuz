<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;


class UniversitiesSearch extends Universities
{

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [[
                'title', 
                'description', 
                'logotype', 
                'photo', 
                'features', 
                'media', 
                'types_training', 
                'additional', 
                'contacts', 
                'person',
                'region',
                'href', 
                'date_create', 
                'date_update'
            ], 'safe'],
        ];
    }

    
    public function scenarios()
    {
        return Model::scenarios();
    }


    public function search($params)
    {
        $query = Universities::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 6,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['id' => $this->id]);
        $query->andFilterWhere(['like', 'title', $this->title])
              ->andFilterWhere(['like', 'description', $this->description])
              ->andFilterWhere(['like', 'logotype', $this->logotype])
              ->andFilterWhere(['like', 'photo', $this->photo])
              ->andFilterWhere(['like', 'features', $this->features])
              ->andFilterWhere(['like', 'media', $this->media])
              ->andFilterWhere(['like', 'types_training', $this->types_training])
              ->andFilterWhere(['like', 'additional', $this->additional])
              ->andFilterWhere(['like', 'contacts', $this->contacts])
              ->andFilterWhere(['like', 'href', $this->href])
              ->andFilterWhere(['like', 'person', $this->person])
              ->andFilterWhere(['like', 'region', $this->region])
              ->andFilterWhere(['like', 'date_create', $this->date_create])
              ->andFilterWhere(['like', 'date_update', $this->date_update]);

        return $dataProvider;
    }

}