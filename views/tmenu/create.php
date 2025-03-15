<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TMenu $model */

$this->title = Yii::t('app', 'Create T Menu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'T Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmenu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
