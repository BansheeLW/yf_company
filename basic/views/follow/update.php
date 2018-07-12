<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\common\models\Follow */

$this->title = Yii::t('app', 'Update Follow: ' . $model->yf_follow_id, [
    'nameAttribute' => '' . $model->yf_follow_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Follows'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->yf_follow_id, 'url' => ['view', 'id' => $model->yf_follow_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="follow-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
