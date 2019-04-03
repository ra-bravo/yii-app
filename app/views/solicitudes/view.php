<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitudes */

$this->title = $model->t1FolioMkatsina;
$this->params['breadcrumbs'][] = ['label' => 'Solicitudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="solicitudes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->t1FolioMkatsina], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->t1FolioMkatsina], [
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
            't1FolioMkatsina',
            't1FolioINFOMEX',
            't1SolicitudText:ntext',
            't1FechaRecepcion',
            't1FechaTurno',
            't1FechaPrevencionSO',
            't1LimPetProrroga',
            't1FechaProrroga',
            't1FechaLimiteRespoSO',
            't1FechaLimiteResponder',
            't1FechaLimiteInfeomex',
            't1FechaConcluida',
            't1NumerPreg',
            't1Recepcion',
            't1ConDatosPer:boolean',
            't1FolioRRInfomex',
            't1FolioRRivai',
        ],
    ]) ?>

</div>
