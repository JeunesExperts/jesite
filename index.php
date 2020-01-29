<?php 

$url = '';
try {
	if (isset($_GET['url'])) {
		$url = explode('/', $_GET['url']);
	}
	if ($url == '') {
		require('controllers/indexController.php');
	}elseif($url[0]==='sign_up'){
		require('controllers/usersController.php');
		sign_up();
	}elseif($url[0]==='sign_in'){
		require('controllers/usersController.php');
		sign_in();
	}elseif($url[0]==='deconnection'){
		require('controllers/php/deconnection.php');
	}
	else{
		require('views/error404.html');
	}
} catch (Exception $e) {
	echo 'Erreur '.$e->getMessage();
}