<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TMenu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tmenu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level_menu')->textInput() ?>

    <?= $form->field($model, 'jenis_role_user')->textInput() ?>

    <?= $form->field($model, 'url_menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml_submenu')->textInput() ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'icon_menu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
