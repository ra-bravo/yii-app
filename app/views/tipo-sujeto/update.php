<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoSujeto */

$this->title = 'Actualizar Tipo Sujeto/Responsable Código: ' . $model->t6TipoOP;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Sujetos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->t6TipoOP, 'url' => ['view', 'id' => $model->t6TipoOP]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-sujeto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
