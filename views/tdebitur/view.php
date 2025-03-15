<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TDebitur $model */

$this->title = $model->id_debitur;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'T Debiturs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tdebitur-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id_debitur' => $model->id_debitur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id_debitur' => $model->id_debitur], [
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
            'id_debitur',
            'nama_debitur',
            'nip_debitur',
            'nik_debitur',
            'email:email',
            'id_jabatan',
            'id_pangkat',
            'alamat_domisili:ntext',
            'alamat_ktp:ntext',
            'alamat_alternatif:ntext',
            'no_ponsel',
            'no_ponsel_alternatif',
        ],
    ]) ?>

</div>
