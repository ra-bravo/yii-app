<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Regiones;
use app\models\TipoSujeto;


/* @var $this yii\web\View */
/* @var $model app\models\SujetoObligado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sujeto-obligado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 't3Codigo')->textInput() ?>
    
     <?= $form->field($model, 't3Region')->dropDownList(
        ArrayHelper::map(Regiones::find()->all(),'t5codigorg','t5rgnombre'),
        ['prompt'=>'Seleciona una region']
    ) ?>

    <?= $form->field($model, 't3TipoSO')->dropDownList(
        ArrayHelper::map(TipoSujeto::find()->all(),'t6TipoOP', 't6NombreOP'),
        ['prompt'=>'Seleciona Tipo de Sujeto Obligado']
    ) ?>

    <?= $form->field($model, 't3SOnombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
