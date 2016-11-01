<?php

use common\models\Question;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Choice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="choice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'choose')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_correct')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question_id')->dropDownList(
        ArrayHelper::map(Question::find()->all(), 'id', 'ask'),
        [
            'prompt'=>'Select Questions',
        ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
