<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RealtySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Realties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="realty-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [   
                'attribute' => 'imagePath',
                'format'=>'image',
            ],

            'name',
            [   
                'attribute' => 'id_type',
                'value' => function($data) {
                    if (isset($data->type)) {
                        return $data->type->name;
                    }

                    return "";
                } 
            
            ],
            [   
                'attribute' => 'id_status',
                'value' => function($data) {
                    if (isset($data->status)) {
                        return $data->status->name;
                    }

                    return "";
                } 
            
            ],
            [   
                'attribute' => 'id_user',
                'value' => function($data) {
                    if (isset($data->user)) {
                        return $data->user->username;
                    }

                    return "";
                } 
            
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
            ],
        ],
    ]); ?>

</div>
