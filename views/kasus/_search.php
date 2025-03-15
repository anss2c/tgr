<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TKasusSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tkasus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_kasus') ?>

    <?= $form->field($model, 'uraian_kasus') ?>

    <?= $form->field($model, 'waktu_kejadian') ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'id_debitur') ?>

    <?php // echo $form->field($model, 'id_jenis_kasus') ?>

    <?php // echo $form->field($model, 'id_status_kasus') ?>

    <?php // echo $form->field($model, 'satker') ?>

    <?php // echo $form->field($model, 'waktu_lapor') ?>

    <?php // echo $form->field($model, 'id_piutang_monsakti') ?>

    <?php // echo $form->field($model, 'id_sebab_kasus') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <?php // echo $form->field($model, 'sumber_laporan') ?>

    <?php // echo $form->field($model, 'tipe_pembayaran') ?>

    <?php // echo $form->field($model, 'nilai_tgr') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
