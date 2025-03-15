<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_kasus".
 *
 * @property int $id_kasus
 * @property string $uraian_kasus
 * @property string|null $waktu_kejadian
 * @property string|null $tahun
 * @property string $id_debitur
 * @property string $id_jenis_kasus
 * @property int $id_status_kasus
 * @property string|null $satker
 * @property string|null $waktu_lapor
 * @property string|null $id_piutang_monsakti
 * @property string|null $id_sebab_kasus
 * @property string $id_user pelapor kasus awal
 * @property string|null $sumber_laporan
 * @property string|null $tipe_pembayaran TUNAI, CICIL
 * @property int|null $nilai_tgr
 *
 * @property TDebitur $debitur
 * @property MJenisKasus $jenisKasus
 * @property MSatker $satker0
 * @property MSebabKasus $sebabKasus
 * @property MStatusKasus $statusKasus
 * @property TBayar[] $tBayars
 * @property TFile[] $tFiles
 * @property TIdtb[] $tIdtbs
 * @property TRiwayat[] $tRiwayats
 * @property TUser $user
 */
class TKasus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_kasus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kasus', 'uraian_kasus', 'id_debitur', 'id_jenis_kasus', 'id_status_kasus', 'id_user'], 'required'],
            [['id_kasus', 'id_status_kasus', 'nilai_tgr'], 'integer'],
            [['uraian_kasus', 'sumber_laporan'], 'string'],
            [['waktu_kejadian', 'waktu_lapor'], 'safe'],
            [['tahun'], 'string', 'max' => 4],
            [['id_debitur'], 'string', 'max' => 16],
            [['id_jenis_kasus', 'id_sebab_kasus'], 'string', 'max' => 3],
            [['satker'], 'string', 'max' => 6],
            [['id_piutang_monsakti'], 'string', 'max' => 20],
            [['id_user'], 'string', 'max' => 9],
            [['tipe_pembayaran'], 'string', 'max' => 5],
            [['id_kasus'], 'unique'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => TUser::class, 'targetAttribute' => ['id_user' => 'id_user']],
            [['id_jenis_kasus'], 'exist', 'skipOnError' => true, 'targetClass' => MJenisKasus::class, 'targetAttribute' => ['id_jenis_kasus' => 'id_jenis_kasus']],
            [['id_sebab_kasus'], 'exist', 'skipOnError' => true, 'targetClass' => MSebabKasus::class, 'targetAttribute' => ['id_sebab_kasus' => 'id_sebab_kasus']],
            [['id_status_kasus'], 'exist', 'skipOnError' => true, 'targetClass' => MStatusKasus::class, 'targetAttribute' => ['id_status_kasus' => 'id_status_kasus']],
            [['id_debitur'], 'exist', 'skipOnError' => true, 'targetClass' => TDebitur::class, 'targetAttribute' => ['id_debitur' => 'id_debitur']],
            [['satker'], 'exist', 'skipOnError' => true, 'targetClass' => MSatker::class, 'targetAttribute' => ['satker' => 'kd_satker']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kasus' => 'Id Kasus',
            'uraian_kasus' => 'Uraian Kasus',
            'waktu_kejadian' => 'Waktu Kejadian',
            'tahun' => 'Tahun',
            'id_debitur' => 'Id Debitur',
            'id_jenis_kasus' => 'Id Jenis Kasus',
            'id_status_kasus' => 'Id Status Kasus',
            'satker' => 'Satker',
            'waktu_lapor' => 'Waktu Lapor',
            'id_piutang_monsakti' => 'Id Piutang Monsakti',
            'id_sebab_kasus' => 'Id Sebab Kasus',
            'id_user' => 'pelapor kasus awal',
            'sumber_laporan' => 'Sumber Laporan',
            'tipe_pembayaran' => 'TUNAI, CICIL',
            'nilai_tgr' => 'Nilai Tgr',
        ];
    }

    /**
     * Gets query for [[Debitur]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDebitur()
    {
        return $this->hasOne(TDebitur::class, ['id_debitur' => 'id_debitur']);
    }

    /**
     * Gets query for [[JenisKasus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisKasus()
    {
        return $this->hasOne(MJenisKasus::class, ['id_jenis_kasus' => 'id_jenis_kasus']);
    }

    /**
     * Gets query for [[Satker0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatker0()
    {
        return $this->hasOne(MSatker::class, ['kd_satker' => 'satker']);
    }

    /**
     * Gets query for [[SebabKasus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSebabKasus()
    {
        return $this->hasOne(MSebabKasus::class, ['id_sebab_kasus' => 'id_sebab_kasus']);
    }

    /**
     * Gets query for [[StatusKasus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatusKasus()
    {
        return $this->hasOne(MStatusKasus::class, ['id_status_kasus' => 'id_status_kasus']);
    }

    /**
     * Gets query for [[TBayars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTBayars()
    {
        return $this->hasMany(TBayar::class, ['id_kasus' => 'id_kasus']);
    }

    /**
     * Gets query for [[TFiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTFiles()
    {
        return $this->hasMany(TFile::class, ['id_kasus' => 'id_kasus']);
    }

    /**
     * Gets query for [[TIdtbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTIdtbs()
    {
        return $this->hasMany(TIdtb::class, ['id_kasus' => 'id_kasus']);
    }

    /**
     * Gets query for [[TRiwayats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTRiwayats()
    {
        return $this->hasMany(TRiwayat::class, ['id_kasus' => 'id_kasus']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(TUser::class, ['id_user' => 'id_user']);
    }
}
