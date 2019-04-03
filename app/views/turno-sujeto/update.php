<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TurnoSujeto */

$this->title = 'Update Turno Sujeto: ' . $model->t2FolioMK;
$this->params['breadcrumbs'][] = ['label' => 'Turno Sujetos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->t2ID, 'url' => ['view', 'id' => $model->t2ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="turno-sujeto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
