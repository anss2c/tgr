<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "m_jenis_barang".
 *
 * @property int $id_jenis_barang
 * @property string|null $jenis_barang
 * @property int|null $masa_manfaat
 *
 * @property TBmn[] $tBmns
 */
class MJenisBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'm_jenis_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis_barang'], 'required'],
            [['id_jenis_barang', 'masa_manfaat'], 'integer'],
            [['jenis_barang'], 'string', 'max' => 250],
            [['id_jenis_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis_barang' => 'Id Jenis Barang',
            'jenis_barang' => 'Jenis Barang',
            'masa_manfaat' => 'Masa Manfaat',
        ];
    }

    /**
     * Gets query for [[TBmns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTBmns()
    {
        return $this->hasMany(TBmn::class, ['id_jenis_bmn' => 'id_jenis_barang']);
    }
}
