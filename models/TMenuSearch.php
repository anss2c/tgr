<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TMenu;

/**
 * TMenuSearch represents the model behind the search form of `app\models\TMenu`.
 */
class TMenuSearch extends TMenu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_menu', 'level_menu', 'jenis_role_user', 'jml_submenu', 'parent_id', 'status'], 'integer'],
            [['nama_menu', 'url_menu', 'icon_menu'], 'safe'],
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
        $query = TMenu::find();

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
            'id_menu' => $this->id_menu,
            'level_menu' => $this->level_menu,
            'jenis_role_user' => $this->jenis_role_user,
            'jml_submenu' => $this->jml_submenu,
            'parent_id' => $this->parent_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'nama_menu', $this->nama_menu])
            ->andFilterWhere(['like', 'url_menu', $this->url_menu])
            ->andFilterWhere(['like', 'icon_menu', $this->icon_menu]);

        return $dataProvider;
    }
}
