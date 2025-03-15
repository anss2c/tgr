<?php

use app\models\MJenisBarang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\MJenisBarangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'M Jenis Barangs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mjenis-barang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create M Jenis Barang'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jenis_barang',
            'jenis_barang',
            'masa_manfaat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MJenisBarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_jenis_barang' => $model->id_jenis_barang]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
