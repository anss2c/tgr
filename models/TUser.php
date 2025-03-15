<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_user".
 *
 * @property string $id_user
 * @property string $username
 * @property string|null $password
 * @property string|null $nama
 * @property string|null $nip
 * @property string|null $email
 * @property string $kdsatker
 * @property int $id_jenis_role role utama
 * @property string $authentication_key
 * @property int $is_active
 *
 * @property MRole $jenisRole
 * @property MSatker $kdsatker0
 * @property TKasus[] $tKasuses
 * @property TRiwayat[] $tRiwayats
 * @property TRole[] $tRoles
 */
class TUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'username', 'kdsatker', 'id_jenis_role', 'authentication_key'], 'required'],
            [['id_jenis_role', 'is_active'], 'integer'],
            [['authentication_key'], 'string'],
            [['id_user'], 'string', 'max' => 9],
            [['username'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 200],
            [['nama', 'nip', 'email'], 'string', 'max' => 50],
            [['kdsatker'], 'string', 'max' => 6],
            [['id_user'], 'unique'],
            [['id_jenis_role'], 'exist', 'skipOnError' => true, 'targetClass' => MRole::class, 'targetAttribute' => ['id_jenis_role' => 'id_jenis_role']],
            [['kdsatker'], 'exist', 'skipOnError' => true, 'targetClass' => MSatker::class, 'targetAttribute' => ['kdsatker' => 'kd_satker']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'nama' => 'Nama',
            'nip' => 'Nip',
            'email' => 'Email',
            'kdsatker' => 'Kdsatker',
            'id_jenis_role' => 'role utama',
            'authentication_key' => 'Authentication Key',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * Gets query for [[JenisRole]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisRole()
    {
        return $this->hasOne(MRole::class, ['id_jenis_role' => 'id_jenis_role']);
    }

    /**
     * Gets query for [[Kdsatker0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdsatker0()
    {
        return $this->hasOne(MSatker::class, ['kd_satker' => 'kdsatker']);
    }

    /**
     * Gets query for [[TKasuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTKasuses()
    {
        return $this->hasMany(TKasus::class, ['id_user' => 'id_user']);
    }

    /**
     * Gets query for [[TRiwayats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTRiwayats()
    {
        return $this->hasMany(TRiwayat::class, ['entry_by' => 'id_user']);
    }

    /**
     * Gets query for [[TRoles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTRoles()
    {
        return $this->hasMany(TRole::class, ['id_user' => 'id_user']);
    }
}
