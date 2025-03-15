<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TDebitur $model */

$this->title = Yii::t('app', 'Create T Debitur');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'T Debiturs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tdebitur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
