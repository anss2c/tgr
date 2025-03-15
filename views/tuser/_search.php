<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TUserSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tuser-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'kdsatker') ?>

    <?php // echo $form->field($model, 'id_jenis_role') ?>

    <?php // echo $form->field($model, 'authentication_key') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
