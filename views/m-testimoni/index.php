<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MTestimoniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mtestimonis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtestimoni-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mtestimoni', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'testiId',
            'testiNama',
            'testiPekerjaan',
            'testiKonten:ntext',
            'testiFoto',
            // 'testiStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
