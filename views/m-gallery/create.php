<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MGallery */

$this->title = 'Create Mgallery';
$this->params['breadcrumbs'][] = ['label' => 'Mgalleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mgallery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
