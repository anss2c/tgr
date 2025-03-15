<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TKasus $model */

$this->title = $model->id_kasus;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'T Kasuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tkasus-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id_kasus' => $model->id_kasus], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id_kasus' => $model->id_kasus], [
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
            'id_kasus',
            'uraian_kasus:ntext',
            'waktu_kejadian',
            'tahun',
            'id_debitur',
            'id_jenis_kasus',
            'id_status_kasus',
            'satker',
            'waktu_lapor',
            'id_piutang_monsakti',
            'id_sebab_kasus',
            'id_user',
            'sumber_laporan:ntext',
            'tipe_pembayaran',
            'nilai_tgr',
        ],
    ]) ?>

</div>
