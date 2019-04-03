<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResponsableSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="responsable-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 't5CodigoOP') ?>

    <?= $form->field($model, 't5CodigoSO') ?>

    <?= $form->field($model, 't5TipoOP') ?>

    <?php // echo $form->field($model, 't5Nombre') ?>

    <?php // echo $form->field($model, 't5ApelldoPOP') ?>

    <?php // echo $form->field($model, 't5ApelldoMOP') ?>

    <?php // echo $form->field($model, 't5CorreoOP') ?>

    <?php // echo $form->field($model, 't5Lada') ?>

    <?php // echo $form->field($model, 't5Telefono') ?>

    <?php // echo $form->field($model, 't5Celular') ?>

    <?php // echo $form->field($model, 't5ExtOP') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
