<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MJenisBarang;

/**
 * MJenisBarangSearch represents the model behind the search form of `app\models\MJenisBarang`.
 */
class MJenisBarangSearch extends MJenisBarang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis_barang', 'masa_manfaat'], 'integer'],
            [['jenis_barang'], 'safe'],
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
        $query = MJenisBarang::find();

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
            'id_jenis_barang' => $this->id_jenis_barang,
            'masa_manfaat' => $this->masa_manfaat,
        ]);

        $query->andFilterWhere(['like', 'jenis_barang', $this->jenis_barang]);

        return $dataProvider;
    }
}
