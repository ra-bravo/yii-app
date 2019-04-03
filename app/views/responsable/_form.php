<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\SujetoObligado;
use app\models\TipoSujeto;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Responsable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="responsable-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 't5CodigoOP')->textInput() ?>
    
    <?= $form->field($model, 't5CodigoSO')->dropDownList(
        ArrayHelper::map(SujetoObligado::find()->all(),'t3Codigo','t3SOnombre'),
        ['prompt'=>'Seleciona Sujeto Obligado']
    ) ?>

    <?= $form->field($model, 't5TipoOP')->dropDownList(
        ArrayHelper::map(TipoSujeto::find()->all(),'t6TipoOP','t6NombreOP'),
        ['prompt'=>'Seleciona Tipo de Sujeto Obligado']
    ) ?>
    
    <?= $form->field($model, 't5Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't5ApelldoPOP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't5ApelldoMOP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't5CorreoOP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't5Lada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't5Telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't5Celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't5ExtOP')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
