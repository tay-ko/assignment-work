<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Realty */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Realties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile("https://maps.googleapis.com/maps/api/js");
$this->registerJs("
    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var point = new google.maps.LatLng(". $model->lat.", ".$model->long.");
        var mapOptions = {
          center: point,
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
            position: point,
            map: map,
            title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
");

?>
<div class="realty-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'id_type',
            'id_status',
            'date',
            'price',
            'address',
            'long',
            'lat',
        ],
    ]) ?>

</div>
<div id="map-canvas"></div>