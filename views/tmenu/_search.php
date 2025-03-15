<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TMenuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tmenu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_menu') ?>

    <?= $form->field($model, 'nama_menu') ?>

    <?= $form->field($model, 'level_menu') ?>

    <?= $form->field($model, 'jenis_role_user') ?>

    <?= $form->field($model, 'url_menu') ?>

    <?php // echo $form->field($model, 'jml_submenu') ?>

    <?php // echo $form->field($model, 'parent_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'icon_menu') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
