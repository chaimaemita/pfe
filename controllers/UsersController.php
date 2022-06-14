<?php 
include_once 'models/User.php';

class UsersController {

	public function auth(){
		if(isset($_POST['submit'])){
			$data['email'] = $_POST['email'];
			$result = User::login($data);
			// print_r($result);
			// die();
			if($result->email === $_POST['email'] && password_verify($_POST['mdp'],$result->password)){
				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				 Redirect::to('choose');
			}else{
				Session::set('error','Pseudo ou mot de passe est incorrect');
				Redirect::to('connexion');
				// echo 'hello';
			}
		}
	}

	public function register(){
		if(isset($_POST['submit'])){
			$options = [
				'cost' => 12
			];
			$password = password_hash($_POST['mdp'],PASSWORD_BCRYPT,$options);
			// $password = ($_POST['mdp']);
			$data = array(
				'user_name' => $_POST['username'],
				'email' => 	$_POST['email'],	
				'password' => $password,
				'phone' => 	$_POST['phone'],	
				'date' => 	$_POST['date']	
			);
			$result = User::createUser($data);
			if($result === 'ok'){
				Session::set('success','Compte crée');
				Redirect::to('connexion');
			}else{
				echo $result;
			}
		}
	}

	static public function logout(){
		session_destroy();
	}


}
