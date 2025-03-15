<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TDebitur $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tdebitur-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_debitur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_debitur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip_debitur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik_debitur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pangkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_domisili')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alamat_ktp')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alamat_alternatif')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'no_ponsel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ponsel_alternatif')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
