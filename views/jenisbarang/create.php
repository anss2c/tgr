<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MJenisBarang $model */

$this->title = Yii::t('app', 'Create M Jenis Barang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'M Jenis Barangs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mjenis-barang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
