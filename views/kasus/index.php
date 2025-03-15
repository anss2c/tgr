<?php

use app\models\TKasus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TKasusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'T Kasuses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tkasus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create T Kasus'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kasus',
            'uraian_kasus:ntext',
            'waktu_kejadian',
            'tahun',
            'id_debitur',
            //'id_jenis_kasus',
            //'id_status_kasus',
            //'satker',
            //'waktu_lapor',
            //'id_piutang_monsakti',
            //'id_sebab_kasus',
            //'id_user',
            //'sumber_laporan:ntext',
            //'tipe_pembayaran',
            //'nilai_tgr',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TKasus $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kasus' => $model->id_kasus]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
