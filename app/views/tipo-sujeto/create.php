<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoSujeto */

$this->title = 'Crear Tipo Sujeto';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Sujetos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-sujeto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
