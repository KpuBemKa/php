<?php
	$connect = mysqli_connect('localhost', 'root', '', 'pizzaform');

	if(!$connect){
		die('Conectarea la baza de date nu a reusit');
	}
?>

