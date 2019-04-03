<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SujetoObligadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sujeto Obligados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sujeto-obligado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--<?= Html::a('Crear Sujeto Obligado', ['create'], ['class' => 'btn btn-success']) ?>-->

        <?= Html::button('Crear Sujeto Obligado', 
            ['value'=> Url::to('/index.php/sujeto-obligado/create') , 
            'class' => 'btn btn-success','id' =>'modalButton']) ?>
        
    </p>
    
     
    <?php
        Modal::begin([
             'header'=> '<h4> Crear SujetoObligado </h4>',
             'id' => 'modal',
             'size' => 'modal-lg',
            ]);
            
        echo "<div id='modalContant'></div>";
        
        Modal::end();
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            't3Codigo',
            't3Region',      
            't3TipoSO',
            't3SOnombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
