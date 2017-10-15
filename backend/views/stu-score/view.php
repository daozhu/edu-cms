<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\StuScore */

$this->title = $model->stu_name." 的成绩";
$this->params['breadcrumbs'][] = ['label' => '成绩列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stu-score-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <!--<?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'stu_name',
            'mobile',
            'age',
            'sex',
            'grade',
            'subject',
            'batch_name',
            'score',
            //'status',
            //'created_at',
            //'updated_at',
        ],
    ]) ?>

</div>
