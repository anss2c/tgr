<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TUser $model */
/** @var yii\widgets\ActiveForm $form */
?>

<section class="section">
    <div class="row">
        <div class="col-lg-6">

            <?php $form = ActiveForm::begin(); ?>
            <div class="row mb-3">
            <?= $form->field($model, 'id_user')->textInput(['maxlength' => true, 'class'=>'form-control'])->label('ID Pengguna',['class'=>'col-sm-3 col-form-label']) ?>
            </div>
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'kdsatker')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'id_jenis_role')->textInput() ?>

            <?= $form->field($model, 'authentication_key')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'is_active')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
