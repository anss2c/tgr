<?php

use app\models\TDebitur;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TDebiturSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Daftar Debitur');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tdebitur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Tambah Debitur'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_debitur',
            'nama_debitur',
            'nip_debitur',
            'nik_debitur',
            'email:email',
            //'id_jabatan',
            //'id_pangkat',
            //'alamat_domisili:ntext',
            //'alamat_ktp:ntext',
            //'alamat_alternatif:ntext',
            //'no_ponsel',
            //'no_ponsel_alternatif',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TDebitur $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_debitur' => $model->id_debitur]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
