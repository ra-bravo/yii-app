<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TurnoSujeto */

$this->title = $model->t2ID;
$this->params['breadcrumbs'][] = ['label' => 'Turno Sujetos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="turno-sujeto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->t2ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->t2ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            't2ID',
            't2FolioMK',
            't2CodigoSO',
            't2FechaTurno',
            't2FechaPrevencion',
            't2FechaProrroga',
            't2FechaRespuesta',
            't2status',
        ],
    ]) ?>

</div>
