<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TurnoSujetoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="turno-sujeto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 't2ID') ?>

    <?= $form->field($model, 't2FolioMK') ?>

    <?= $form->field($model, 't2CodigoSO') ?>

    <?= $form->field($model, 't2FechaTurno') ?>

    <?= $form->field($model, 't2FechaPrevencion') ?>

    <?php // echo $form->field($model, 't2FechaProrroga') ?>

    <?php // echo $form->field($model, 't2FechaRespuesta') ?>

    <?php // echo $form->field($model, 't2status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
