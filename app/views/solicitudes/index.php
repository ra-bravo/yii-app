<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SolicitudesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitudes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitudes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Captura Solicitude', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            't1FolioMkatsina',
            't1FolioINFOMEX',
            //'t1SolicitudText:ntext',
            't1FechaRecepcion',
            't1FechaTurno',
            //'t1FechaPrevencionSO',
            //'t1LimPetProrroga',
            't1FechaProrroga',
            //'t1FechaLimiteRespoSO',
            't1FechaLimiteResponder',
            't1FechaLimiteInfeomex',
            //'t1FechaConcluida',
            //'t1NumerPreg',
            //'t1Recepcion',
            //'t1ConDatosPer:boolean',
            //'t1FolioRRInfomex',
            //'t1FolioRRivai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
