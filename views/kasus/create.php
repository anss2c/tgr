<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TKasus $model */

$this->title = Yii::t('app', 'Create T Kasus');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'T Kasuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tkasus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
