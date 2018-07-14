<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\common\models\Follow */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="follow-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'yf_follow_id')->textInput() ?>

    <?= $form->field($model, 'staff_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->dropDownList(\app\models\SearchForm::$areaList) ?>

    <?= $form->field($model, 'customer_type')->dropDownList(\app\models\SearchForm::$typeList) ?>

    <?= $form->field($model, 'follow_status')->dropDownList(\app\models\SearchForm::$statusList) ?>

    <?= $form->field($model, 'follow_date')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
