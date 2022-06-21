<?php 
include_once 'models/User.php';

class UsersController {

	public function auth(){
		if(isset($_POST['submit'])){
			$data['id'] = $_POST['id'];
			$data['email'] = $_POST['email'];
			$data['user_name'] = $_POST['username'];
			$result = User::login($data);

			if($result->email === $_POST['email'] && password_verify($_POST['mdp'],$result->password)){
				$_SESSION['logged'] = true;
				$_SESSION['id'] = $result->id;
				$_SESSION['email'] = $result->email;
				$_SESSION['username'] = $result->user_name;
				$_SESSION['phone'] = $result->phone;
				$_SESSION['date'] = $result->date;
				 Redirect::to('choose');
			}else{
				Session::set('error','Pseudo ou mot de passe est incorrect');
				Redirect::to('connexion');
				
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
	public function updateUser(){
		if (isset($_POST['update'])) {
			$data = array(
				'id' => $_POST['id'],
				'username' => $_POST['username'],
				'email' => 	$_POST['email'],
				'phone' => 	$_POST['phone'],	
				'date' => 	$_POST['date']
			);
			$result = User::update($data);
			if ($result = 'ok') {
				session::set('success','Employé Modifié');
				Redirect::to('profileseller');
			}else {
				echo $result;
			}

		}
	}
	public function updateUserclient(){
		if (isset($_POST['updateclient'])) {
			$data = array(
				'id' => $_POST['id'],
				'username' => $_POST['username'],
				'email' => 	$_POST['email'],
				'phone' => 	$_POST['phone'],	
				'date' => 	$_POST['date']
			);
			$result = User::update($data);
			if ($result = 'ok') {
				session::set('success','Employé Modifié');
				Redirect::to('profileclient');
			}else {
				echo $result;
			}

		}
	}

	static public function logout(){
		session_destroy();
	}

	public function getUser($id){
		$data = array(
			'id' => $id
		);
		$dataUser = new User();
		$dataUser = $dataUser->getUser($data);
		return $dataUser;
	}
	
	public function getPost($id){
		$data = array(
			'id' => $id
		);
		$dataUser = new User();
		$dataUser = $dataUser->getPost($data);
		return $dataUser;
	}


}
