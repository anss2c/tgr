<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TMenu $model */

$this->title = $model->id_menu;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'T Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tmenu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id_menu' => $model->id_menu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id_menu' => $model->id_menu], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_menu',
            'nama_menu',
            'level_menu',
            'jenis_role_user',
            'url_menu:url',
            'jml_submenu',
            'parent_id',
            'status',
            'icon_menu',
        ],
    ]) ?>

</div>
