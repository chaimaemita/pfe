<?php 
require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php';


$home = new HomeController();

$pages = ['home','sinscrire', 'connexion','choose','client'];

if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){

	if(isset($_GET['page'])){
		if(in_array($_GET['page'],$pages)){
			$page = $_GET['page'];
			$home->index($page);
		}else{
			include('views/includes/404.php');
		}
	}else{
		$home->index('home');
	}


require_once './views/includes/footer.php';


}
else if(isset($_GET['page']) && $_GET['page'] === 'sinscrire'){
	$home->index('sinscrire');
}else if(isset($_GET['page']) && $_GET['page'] === 'connexion'){
	$home->index('connexion');
}else{
	$home->index('connexion');
}