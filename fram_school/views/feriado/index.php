<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FeriadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Feriados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feriado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Feriado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idferiado',
            'inicio_feriado',
            'fim_feriado',
            'idetapa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
