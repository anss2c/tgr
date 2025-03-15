<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TUser $model */

$this->title = Yii::t('app', 'Create T User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'T Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
