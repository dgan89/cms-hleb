<?php

use yii\helpers\Html;
use common\widgets\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model modules\article\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Статьи'), 'url' => ['index']];
?>

<?= DetailView::widget([
    'model' => $model,
    'formatter' => [
        'class' => 'common\widgets\detail\DetailFormatter'
    ],
    'attributes' => [
        'id',
        'title',
        'slug',
        'status_id:status',
        'created_at:datetime',
        'updated_at:datetime',
        [
            'attribute' => 'created_by',
            'value' => function($data) { return $data->created->username; }
        ], [
            'attribute' => 'updated_by',
            'value' => function($data) { return $data->updated->username; }
        ],
        'images:imageList',
        'description:html'
    ],
]) ?>