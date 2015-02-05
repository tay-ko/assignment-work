<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RealtySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="realty-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'id_type') ?>

    <?= $form->field($model, 'id_status') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'long') ?>

    <?php // echo $form->field($model, 'lat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
