<?php 


function dd($message, $end = true) {
	echo "<pre>";
	print_r($message);
	echo '</pre>';
	if ($end) {
		die;
	}
}

function ddd($message, $end = true) {
	echo "<pre>";
	var_dump($message);
	echo '</pre>';
	if ($end) {
		die;
	}
}