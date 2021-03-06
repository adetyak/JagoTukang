<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MUser */

$this->title = 'Update Muser: ' . $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'Musers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userId, 'url' => ['view', 'id' => $model->userId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="muser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
