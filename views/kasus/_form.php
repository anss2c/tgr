<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TKasus $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tkasus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kasus')->textInput() ?>

    <?= $form->field($model, 'uraian_kasus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'waktu_kejadian')->textInput() ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_debitur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jenis_kasus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_status_kasus')->textInput() ?>

    <?= $form->field($model, 'satker')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waktu_lapor')->textInput() ?>

    <?= $form->field($model, 'id_piutang_monsakti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_sebab_kasus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sumber_laporan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tipe_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_tgr')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
