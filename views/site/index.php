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

<span class="popular-title">Популярные обьявления</span>
<div class="gallery">
    <ul>
    <?php foreach ($populars as $popular): ?>
        <li><img src="<?= '/uploads/'.$popular->file ?>" alt="" width="150" height="100" /></li>
    <?php endforeach; ?>    
    </ul>
</div>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => false,
        'tableOptions' => ['class' => 'realty-table'],
        'columns' => [
            [
                'format' => 'html', 
                'value' => function($data) {
                    return $this->render('_grid_item', array('item' => $data));
                }
            ],
        ],
    ]); ?>

</div>