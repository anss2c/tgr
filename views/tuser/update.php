<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TUser $model */

$this->title = Yii::t('app', 'Update T User: {name}', [
    'name' => $model->id_user,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'T Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_user, 'url' => ['view', 'id_user' => $model->id_user]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
