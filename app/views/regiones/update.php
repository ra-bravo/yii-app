<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Regiones */

$this->title = 'Actualizar región : ' . $model->t5rgnombre ;
$this->params['breadcrumbs'][] = ['label' => 'Regiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->t5codigorg, 'url' => ['view', 'id' => $model->t5codigorg]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="regiones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
