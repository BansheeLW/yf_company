<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\common\models\Follow */

$this->title = $model->yf_follow_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Follows'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="follow-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->yf_follow_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->yf_follow_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'yf_follow_id',
            'staff_name',
            'company_name',
            [
                'attribute'=>'area',
                'value'=>function($model){
                    return \app\models\SearchForm::$areaList[$model->area];
                }
            ],
            [
                'attribute'=>'customer_type',
                'value'=>function($model){
                    return \app\models\SearchForm::$typeList[$model->customer_type];
                }
            ],
            [
                'attribute'=>'follow_status',
                'value'=>function($model){
                    return \app\models\SearchForm::$statusList[$model->follow_status];
                }
            ],
            'follow_date',
        ],
    ]) ?>
</div>
