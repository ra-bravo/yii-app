<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TipoSujeto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-sujeto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 't6TipoOP')->textInput() ?>

    <?= $form->field($model, 't6NombreOP')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
