<?php

use app\models\TMenu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TMenuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'T Menus');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmenu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create T Menu'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_menu',
            'nama_menu',
            'level_menu',
            'jenis_role_user',
            'url_menu:url',
            //'jml_submenu',
            //'parent_id',
            //'status',
            //'icon_menu',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TMenu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_menu' => $model->id_menu]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
