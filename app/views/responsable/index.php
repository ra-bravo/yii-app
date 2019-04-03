<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ResponsableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Titular / Responsable Operativo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsable-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

        <?= Html::button('Crear Titular / Responsable Operativo', 
            ['value'=> Url::to('/index.php/responsable/create') , 'class' => 'btn btn-success','id' =>'modalButton']) ?>
    
    </p>
    
    <?php
        Modal::begin([
             'header'=> '<h4> Crear Titular </h4>',
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

            't5CodigoOP',
            't5CodigoSO',
            't5TipoOP',
            't5Nombre',
            't5ApelldoPOP',
            't5ApelldoMOP',
            //'t5CorreoOP',
            //'t5Lada',
            //'t5Telefono',
            //'t5Celular',
            //'t5ExtOP',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<div>

</div>