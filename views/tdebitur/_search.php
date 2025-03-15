<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TDebiturSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tdebitur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_debitur') ?>

    <?= $form->field($model, 'nama_debitur') ?>

    <?= $form->field($model, 'nip_debitur') ?>

    <?= $form->field($model, 'nik_debitur') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'id_jabatan') ?>

    <?php // echo $form->field($model, 'id_pangkat') ?>

    <?php // echo $form->field($model, 'alamat_domisili') ?>

    <?php // echo $form->field($model, 'alamat_ktp') ?>

    <?php // echo $form->field($model, 'alamat_alternatif') ?>

    <?php // echo $form->field($model, 'no_ponsel') ?>

    <?php // echo $form->field($model, 'no_ponsel_alternatif') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
