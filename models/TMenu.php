<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_menu".
 *
 * @property int $id_menu
 * @property string|null $nama_menu
 * @property int $level_menu
 * @property int $jenis_role_user
 * @property string|null $url_menu
 * @property int|null $jml_submenu
 * @property int|null $parent_id
 * @property int|null $status
 * @property string|null $icon_menu
 *
 * @property MRole $jenisRoleUser
 */
class TMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['level_menu', 'jenis_role_user'], 'required'],
            [['level_menu', 'jenis_role_user', 'jml_submenu', 'parent_id', 'status'], 'integer'],
            [['nama_menu'], 'string', 'max' => 100],
            [['url_menu', 'icon_menu'], 'string', 'max' => 255],
            [['jenis_role_user'], 'exist', 'skipOnError' => true, 'targetClass' => MRole::class, 'targetAttribute' => ['jenis_role_user' => 'id_jenis_role']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_menu' => 'Id Menu',
            'nama_menu' => 'Nama Menu',
            'level_menu' => 'Level Menu',
            'jenis_role_user' => 'Jenis Role User',
            'url_menu' => 'Url Menu',
            'jml_submenu' => 'Jml Submenu',
            'parent_id' => 'Parent ID',
            'status' => 'Status',
            'icon_menu' => 'Icon Menu',
        ];
    }

    /**
     * Gets query for [[JenisRoleUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisRoleUser()
    {
        return $this->hasOne(MRole::class, ['id_jenis_role' => 'jenis_role_user']);
    }
}
