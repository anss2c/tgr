<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TKasus;

/**
 * TKasusSearch represents the model behind the search form of `app\models\TKasus`.
 */
class TKasusSearch extends TKasus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kasus', 'id_status_kasus', 'nilai_tgr'], 'integer'],
            [['uraian_kasus', 'waktu_kejadian', 'tahun', 'id_debitur', 'id_jenis_kasus', 'satker', 'waktu_lapor', 'id_piutang_monsakti', 'id_sebab_kasus', 'id_user', 'sumber_laporan', 'tipe_pembayaran'], 'safe'],
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
        $query = TKasus::find();

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
            'id_kasus' => $this->id_kasus,
            'waktu_kejadian' => $this->waktu_kejadian,
            'id_status_kasus' => $this->id_status_kasus,
            'waktu_lapor' => $this->waktu_lapor,
            'nilai_tgr' => $this->nilai_tgr,
        ]);

        $query->andFilterWhere(['like', 'uraian_kasus', $this->uraian_kasus])
            ->andFilterWhere(['like', 'tahun', $this->tahun])
            ->andFilterWhere(['like', 'id_debitur', $this->id_debitur])
            ->andFilterWhere(['like', 'id_jenis_kasus', $this->id_jenis_kasus])
            ->andFilterWhere(['like', 'satker', $this->satker])
            ->andFilterWhere(['like', 'id_piutang_monsakti', $this->id_piutang_monsakti])
            ->andFilterWhere(['like', 'id_sebab_kasus', $this->id_sebab_kasus])
            ->andFilterWhere(['like', 'id_user', $this->id_user])
            ->andFilterWhere(['like', 'sumber_laporan', $this->sumber_laporan])
            ->andFilterWhere(['like', 'tipe_pembayaran', $this->tipe_pembayaran]);

        return $dataProvider;
    }
}
