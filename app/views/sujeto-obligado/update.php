<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SujetoObligado */

$this->title = 'Actualizar Sujeto Obligado Código: ' . $model->t3Codigo;
$this->params['breadcrumbs'][] = ['label' => 'Sujeto Obligados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->t3Codigo, 'url' => ['view', 'id' => $model->t3Codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sujeto-obligado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
