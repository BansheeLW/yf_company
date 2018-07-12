<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\common\models\FollowSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="follow-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'yf_follow_id') ?>

    <?= $form->field($model, 'staff_name') ?>

    <?= $form->field($model, 'company_name') ?>

    <?= $form->field($model, 'area') ?>

    <?= $form->field($model, 'customer_type') ?>

    <?php // echo $form->field($model, 'follow_status') ?>

    <?php // echo $form->field($model, 'follow_date') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
