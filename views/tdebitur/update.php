<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TDebitur $model */

$this->title = Yii::t('app', 'Update T Debitur: {name}', [
    'name' => $model->id_debitur,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'T Debiturs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_debitur, 'url' => ['view', 'id_debitur' => $model->id_debitur]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tdebitur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
