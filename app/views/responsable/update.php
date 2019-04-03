<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Responsable */

$this->title = 'Actualizar Titular / Responsable Operativo: ' . $model->t5CodigoOP;
$this->params['breadcrumbs'][] = ['label' => 'Responsables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->t5CodigoOP, 'url' => ['view', 'id' => $model->t5CodigoOP]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="responsable-update">

    <h1><?= Html::encode($this->title) ?></h1>

   <?=  $this->render('_form', [ 
       'model' => $model,  
       ]) 
    ?>
    
</div>
