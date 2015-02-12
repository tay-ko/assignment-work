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

    <p>
        <?= Html::a('Create Realty', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [   
                'attribute' => 'imagePath',
                'format'=>'image',
            ],
            'phone',
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
                'options'=>array('style'=>'width:10px; border:none'),   
                'value' => function($data) {
                    if (isset($data->status)) {
                        return $data->status->name;
                    }

                    return "";
                } 
            
            ],
            

            [
                'attribute'=>'date',
                'options'=>array('style'=>'width:100px; border:none'),    
            ],

            [
                'attribute'=>'price',
                'options'=>array('style'=>'width:10px; border:none'),    
            ],
            // 'address',
            // 'long',
            // 'lat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
