<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SujetoObligado */

$this->title = 'Crear Sujeto Obligado';
$this->params['breadcrumbs'][] = ['label' => 'Sujeto Obligados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sujeto-obligado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
