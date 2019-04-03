<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TurnoSujeto */

$this->title = 'Create Turno Sujeto';
$this->params['breadcrumbs'][] = ['label' => 'Turno Sujetos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="turno-sujeto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
