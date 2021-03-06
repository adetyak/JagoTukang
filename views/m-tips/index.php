<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MTipsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mtips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtips-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mtips', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tipsId',
            'tipsJudul',
            'tipsDeskripsi:ntext',
            'tipsDibuatTgl',
            'tipsDibuatOleh',
            // 'tipsStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
