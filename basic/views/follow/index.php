<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\common\models\FollowSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Follows');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="follow-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Follow'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'yf_follow_id',
            'staff_name',
            'company_name',
            [
                'attribute' => 'area',
                'value' => function($model){
                return \app\models\SearchForm::$areaList[$model->area];},
            ],
            [
                'attribute' => 'customer_type',
                'value' => function($model){
                    return \app\models\SearchForm::$typeList[$model->customer_type];}
            ],
            [
                'attribute' => 'follow_status',
                'value' => function($model){
                    return \app\models\SearchForm::$statusList[$model->follow_status];},
            ],
            //'follow_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
