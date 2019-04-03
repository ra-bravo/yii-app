<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Solicitudes;
use app\models\SujetoObligado;
use yii\jui\DatePicker;
// use zhuravljov\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\TurnoSujeto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="turno-sujeto-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 't2FolioMK')->textInput(['maxlength' => true]) ?> -->
      <!--[ArrayHelper::map(User::findAll(['active' => '1']), 'id', 'name')],-->
      <!--[ArrayHelper::map(User::find()->where('id' => $id)->all(), 'id', 'name')],-->
    <?= $form->field($model, 't2FolioMK')->dropDownList(
        ArrayHelper::map(Solicitudes::find()->all(),'t1FolioMkatsina','t1FolioMkatsina'),
        ['prompt'=>'Seleciona una solicitud']
    )?>

      <!--<?= $form->field($model, 't2CodigoSO')->textInput() ?>-->
    <?= $form->field($model, 't2CodigoSO')->dropDownList(
        ArrayHelper::map(SujetoObligado::find()->all(),'t3Codigo','t3SOnombre'),
        ['prompt'=>'Seleciona Sujeto Obligado']
    )?>
    

    <?= $form->field($model, 't2FechaTurno')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?>

    <?= $form->field($model, 't2FechaPrevencion')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?>

    <?= $form->field($model, 't2FechaProrroga')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?>

    <?= $form->field($model, 't2FechaRespuesta')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?>

    <?= $form->field($model, 't2status')->textInput() ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
