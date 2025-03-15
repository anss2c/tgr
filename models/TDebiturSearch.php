<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TDebitur;

/**
 * TDebiturSearch represents the model behind the search form of `app\models\TDebitur`.
 */
class TDebiturSearch extends TDebitur
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_debitur', 'nama_debitur', 'nip_debitur', 'nik_debitur', 'email', 'id_jabatan', 'id_pangkat', 'alamat_domisili', 'alamat_ktp', 'alamat_alternatif', 'no_ponsel', 'no_ponsel_alternatif'], 'safe'],
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
        $query = TDebitur::find();

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
        $query->andFilterWhere(['like', 'id_debitur', $this->id_debitur])
            ->andFilterWhere(['like', 'nama_debitur', $this->nama_debitur])
            ->andFilterWhere(['like', 'nip_debitur', $this->nip_debitur])
            ->andFilterWhere(['like', 'nik_debitur', $this->nik_debitur])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'id_jabatan', $this->id_jabatan])
            ->andFilterWhere(['like', 'id_pangkat', $this->id_pangkat])
            ->andFilterWhere(['like', 'alamat_domisili', $this->alamat_domisili])
            ->andFilterWhere(['like', 'alamat_ktp', $this->alamat_ktp])
            ->andFilterWhere(['like', 'alamat_alternatif', $this->alamat_alternatif])
            ->andFilterWhere(['like', 'no_ponsel', $this->no_ponsel])
            ->andFilterWhere(['like', 'no_ponsel_alternatif', $this->no_ponsel_alternatif]);

        return $dataProvider;
    }
}
