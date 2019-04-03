<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SolicitudesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitudes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 't1FolioMkatsina') ?>

    <?= $form->field($model, 't1FolioINFOMEX') ?>

    <?= $form->field($model, 't1SolicitudText') ?>

    <?= $form->field($model, 't1FechaRecepcion') ?>

    <?= $form->field($model, 't1FechaTurno') ?>

    <?php // echo $form->field($model, 't1FechaPrevencionSO') ?>

    <?php // echo $form->field($model, 't1LimPetProrroga') ?>

    <?php // echo $form->field($model, 't1FechaProrroga') ?>

    <?php // echo $form->field($model, 't1FechaLimiteRespoSO') ?>

    <?php // echo $form->field($model, 't1FechaLimiteResponder') ?>

    <?php // echo $form->field($model, 't1FechaLimiteInfeomex') ?>

    <?php // echo $form->field($model, 't1FechaConcluida') ?>

    <?php // echo $form->field($model, 't1NumerPreg') ?>

    <?php // echo $form->field($model, 't1Recepcion') ?>

    <?php // echo $form->field($model, 't1ConDatosPer')->checkbox() ?>

    <?php // echo $form->field($model, 't1FolioRRInfomex') ?>

    <?php // echo $form->field($model, 't1FolioRRivai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
