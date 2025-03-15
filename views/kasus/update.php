<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TKasus $model */

$this->title = Yii::t('app', 'Update T Kasus: {name}', [
    'name' => $model->id_kasus,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'T Kasuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kasus, 'url' => ['view', 'id_kasus' => $model->id_kasus]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tkasus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
