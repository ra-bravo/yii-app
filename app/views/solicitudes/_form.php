<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitudes */
/* @var $form yii\widgets\ActiveForm */

// Yii::$app->formatter->locale = 'es-MX';
// echo Yii::$app->formatter->asDate('now') 


?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="solicitudes-form" style="background-color:lavender;">
        
    <?php $form = ActiveForm::begin(); ?>
      <div class="row">
          <div class="col-sm-1" style="background-color:lavender;"></div>
        <div class="col-sm-2" style="background-color:lavender;">
               <?= $form->field($model, 't1FolioMkatsina')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-2" style="background-color:lavender;">
             <?= $form->field($model, 't1FolioINFOMEX')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-8"></div>
      </div>
     <div class="row">
         <div class="col-sm-1"></div>
         <div class="col-sm-10" style="background-color:lavender;">
             <?= $form->field($model, 't1SolicitudText')->textarea(['rows' => 8]) ?>
         </div>
         <div class="col-sm-1"></div>
     </div>
     <div class="row"><p>Fechas Control CUTAI</p></div>
     <div class="row">
         <div class="col-sm-1" style="background-color:lavender;"></div>
         <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FechaRecepcion')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?> </div>
         <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FechaTurno')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?></div>
         <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FechaPrevencionSO')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?></div>
         <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FechaProrroga')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?></div>
         <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FechaConcluida')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?></div>
         <div class="col-sm-1" style="background-color:lavender;"></div>
     </div>
     <div class="row"><p>Fechas Limite / Control SO</p></div>
     <div class="row">
         <div class="col-sm-1" style="background-color:lavender;"></div>
         <!--<div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FechaPrevencionSO')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?></div>              -->
         <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1LimPetProrroga')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?></div>
         <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FechaLimiteRespoSO')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?></div>
         <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FechaLimiteInfeomex')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?></div>
         <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FechaLimiteResponder')->widget(DatePicker::className(),['language' => 'es-MX', 'dateFormat' => 'yyyy-MM-dd']) ?></div> 
         
     </div>
     <div class="row">
        <div class="col-sm-1" style="background-color:lavender;"></div>
        <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FolioRRInfomex')->textInput(['maxlength' => true]) ?></div>
        <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FolioRRivai')->textInput(['maxlength' => true]) ?></div>
        <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1FolioRRInfomex')->textInput(['maxlength' => true]) ?></div>          
        <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1NumerPreg')->textInput() ?></div>
        <div class="col-sm-2" style="background-color:lavender;"><?= $form->field($model, 't1ConDatosPer')->checkbox() ?></div>     
     </div>
     <div class="row">
         <div class="col-sm-1" style="background-color:lavender;"></div>     
        <div class="col-sm-4" style="background-color:lavender;"><?= $form->field($model, 't1Recepcion')->textInput(['maxlength' => true]) ?></div>
        <div class="col-sm-5" style="background-color:lavender;"></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
