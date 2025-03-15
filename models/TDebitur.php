<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_debitur".
 *
 * @property string $id_debitur
 * @property string $nama_debitur
 * @property string|null $nip_debitur
 * @property string $nik_debitur
 * @property string $email
 * @property string|null $id_jabatan
 * @property string|null $id_pangkat
 * @property string|null $alamat_domisili
 * @property string|null $alamat_ktp
 * @property string|null $alamat_alternatif
 * @property string|null $no_ponsel
 * @property string|null $no_ponsel_alternatif
 *
 * @property MJabatan $jabatan
 * @property MWaliDebitur[] $mWaliDebiturs
 * @property MPangkat $pangkat
 * @property TKasus[] $tKasuses
 */
class TDebitur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_debitur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_debitur', 'nama_debitur', 'nik_debitur', 'email'], 'required'],
            [['alamat_domisili', 'alamat_ktp', 'alamat_alternatif'], 'string'],
            [['id_debitur', 'nik_debitur'], 'string', 'max' => 16],
            [['nama_debitur'], 'string', 'max' => 200],
            [['nip_debitur'], 'string', 'max' => 18],
            [['email'], 'string', 'max' => 100],
            [['id_jabatan'], 'string', 'max' => 4],
            [['id_pangkat'], 'string', 'max' => 3],
            [['no_ponsel', 'no_ponsel_alternatif'], 'string', 'max' => 15],
            [['id_debitur'], 'unique'],
            [['id_pangkat'], 'exist', 'skipOnError' => true, 'targetClass' => MPangkat::class, 'targetAttribute' => ['id_pangkat' => 'id_pangkat']],
            [['id_jabatan'], 'exist', 'skipOnError' => true, 'targetClass' => MJabatan::class, 'targetAttribute' => ['id_jabatan' => 'id_jabatan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_debitur' => 'Id Debitur',
            'nama_debitur' => 'Nama Debitur',
            'nip_debitur' => 'Nip Debitur',
            'nik_debitur' => 'Nik Debitur',
            'email' => 'Email',
            'id_jabatan' => 'Id Jabatan',
            'id_pangkat' => 'Id Pangkat',
            'alamat_domisili' => 'Alamat Domisili',
            'alamat_ktp' => 'Alamat Ktp',
            'alamat_alternatif' => 'Alamat Alternatif',
            'no_ponsel' => 'No Ponsel',
            'no_ponsel_alternatif' => 'No Ponsel Alternatif',
        ];
    }

    /**
     * Gets query for [[Jabatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJabatan()
    {
        return $this->hasOne(MJabatan::class, ['id_jabatan' => 'id_jabatan']);
    }

    /**
     * Gets query for [[MWaliDebiturs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMWaliDebiturs()
    {
        return $this->hasMany(MWaliDebitur::class, ['id_debitur' => 'id_debitur']);
    }

    /**
     * Gets query for [[Pangkat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPangkat()
    {
        return $this->hasOne(MPangkat::class, ['id_pangkat' => 'id_pangkat']);
    }

    /**
     * Gets query for [[TKasuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTKasuses()
    {
        return $this->hasMany(TKasus::class, ['id_debitur' => 'id_debitur']);
    }
}
