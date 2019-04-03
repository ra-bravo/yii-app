<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitudes */

$this->title = 'Actualizar Solicitudes: ' . $model->t1FolioMkatsina;
$this->params['breadcrumbs'][] = ['label' => 'Solicitudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->t1FolioMkatsina, 'url' => ['view', 'id' => $model->t1FolioMkatsina]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solicitudes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
