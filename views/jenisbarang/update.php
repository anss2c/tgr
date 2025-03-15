<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MJenisBarang $model */

$this->title = Yii::t('app', 'Update M Jenis Barang: {name}', [
    'name' => $model->id_jenis_barang,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'M Jenis Barangs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jenis_barang, 'url' => ['view', 'id_jenis_barang' => $model->id_jenis_barang]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mjenis-barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
