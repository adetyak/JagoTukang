<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\widgets\Datepicker;
use kartik\widgets\Select2;
use kartik\checkbox\CheckboxX;
use kartik\depdrop\DepDrop;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\TOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="torder-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'orderTgl')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Masukan Tanggal Order ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'todayHighlight' => true
        ]
    ]); ?>

    <?= $form->field($model, 'orderJenisBayar')->widget(Select2::classname(), [
        'data' => ['TN' => 'Tunai','TR' => 'Transfer','KK' => 'Kartu Kredit'],
        'options' => ['placeholder' => 'Pilih Jenis Bayar ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'orderAlamat')->textArea(['rows' => '6']) ?>

    <?= $form->field($model, 'orderKota')->widget(Select2::classname(), [
        'data' => ['a'=>'a','b'=>'b'],
        'options' => ['id' => 'cat-id','placeholder' => 'Pilih Kota ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'orderKelurahan')->widget(DepDrop::classname(), [
         'options' => ['id'=>'subcat-id'],
         'pluginOptions'=>[
             'depends'=>['cat-id'],
             'placeholder' => 'Select...',
             'url' => Url::to(['/t-order/generate-daerah'])
         ]
     ]); ?>

    <?php
    // $form->field($model, 'orderKelurahan')->widget(Select2::classname(), [
    //     'data' => [''],
    //     'options' => ['placeholder' => 'Pilih Kelurahan ...'],
    //     'pluginOptions' => [
    //         'allowClear' => true
    //     ],
    // ]);
    ?>

    <?= $form->field($model, 'orderKecamatan')->widget(Select2::classname(), [
        'data' => [''],
        'options' => ['placeholder' => 'Pilih Kecamatan ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'orderDaerah')->widget(Select2::classname(), [
        'data' => [''],
        'options' => ['placeholder' => 'Pilih Daerah ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'orderKodePos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderAlamatNote')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderGpsKoordinat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderBiayaTransport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderStatus')->checkbox(['label' => 'Active']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
