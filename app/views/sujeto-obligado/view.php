<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\SujetoObligado */

$this->title = 'Sujeto Obligados Código: ' . $model->t3Codigo;
$this->params['breadcrumbs'][] = ['label' => 'Sujeto Obligados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sujeto-obligado-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->t3Codigo], ['class' => 'btn btn-primary']) ?>
        
        <?= Html::a('Eliminar', ['delete', 'id' => $model->t3Codigo], [
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
            't3Codigo',
            't3Region',
            't3TipoSO',
            't3SOnombre',
        ],
    ]) ?>

</div>
