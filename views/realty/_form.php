<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Realty */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="realty-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'id_type')->textInput() ?>

    <?= $form->field($model, 'id_status')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'long')->textInput() ?>

    <?= $form->field($model, 'lat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
