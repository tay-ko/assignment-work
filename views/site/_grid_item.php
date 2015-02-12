<?php 

use yii\helpers\ArrayHelper;
use yii\helpers\Url;

?>

<div class="panel panel-primary">
	<div class="panel-body">
		<div href="#" class="thumbnail">
		    <img src="<?= $item->getImagePath();?>" alt="...">
		</div>
	    <div class="content">
			<h4><a href="<?= Url::toRoute(['/site/view', 'id' => $item->id]);?>"><?= $item->name;?><a></h4>
			<p>Address: <?= $item->address?></p>
			<p>Price: $<?= $item->price?></p>
			<p>Contacts: <?= implode(', ', ArrayHelper::map($item->getPhones(), 'id','number'))?>
		</div>
	</div>
		<div class="panel-footer">
			<a class="pull-right" href="<?= Url::toRoute(['/site/view', 'id' => $item->id]);?>">
			<span class="glyphicon glyphicon-eye-open"></span> Show more</a>
			<br class="clearfix"/>
		</div>
</div>