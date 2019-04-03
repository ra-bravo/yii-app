<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Responsable */

$this->title = 'Titular / Responsable Operativo' . $model->t5CodigoOP;
$this->params['breadcrumbs'][] = ['label' => 'Responsables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="responsable-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->t5CodigoOP], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->t5CodigoOP], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que quieres eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            't5CodigoOP',
            't5CodigoSO',
            't5TipoOP',
            't5Nombre',
            't5ApelldoPOP',
            't5ApelldoMOP',
            't5CorreoOP',
            't5Lada',
            't5Telefono',
            't5Celular',
            't5ExtOP',
        ],
    ]) ?>

</div>
