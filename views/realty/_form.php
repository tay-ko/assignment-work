<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Type;
use app\models\Status;
/* @var $this yii\web\View */
/* @var $model app\models\Realty */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="realty-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

     <?= $form->field($model, 'id_type')->dropDownList(ArrayHelper::map(Type::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'id_status')->dropDownList(ArrayHelper::map(Status::find()->all(), 'id', 'name')) ?>


    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'long')->textInput() ?>

    <?= $form->field($model, 'lat')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
