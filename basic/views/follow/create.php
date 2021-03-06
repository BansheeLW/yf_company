<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\common\models\Follow */

$this->title = Yii::t('app', 'Create Follow');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Follows'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="follow-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
