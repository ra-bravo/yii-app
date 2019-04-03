<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TurnoSujetoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Turno Sujetos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="turno-sujeto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Turno Sujeto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 't2ID',
            't2FolioMK',
            't2CodigoSO',
            't2FechaTurno',
            't2FechaPrevencion',
            't2FechaProrroga',
            't2FechaRespuesta',
            //'t2status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
