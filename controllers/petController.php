<?php 

class PetController{

	public function getAllPet(){
		$pet = Pet::getAll();
		return $pet;
	}

	public function getAllPets(){
		$pet = Pet::getAllpet();
		return $pet;
	}

	public function getOnePet(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$pet = Pet::getPet($data);
			return $pet;
		}
	}
	// public function findPet(){
	// 	if(isset($_POST['search'])){
	// 		$data = array('search' => $_POST['search']);
	// 	}
	// 	$employes = Employe::searchEmploye($data);
	// 	return $employes;
	// } 

	public function addPet(){
		if(isset($_POST['add'])){
			$data = array(
				'nick_name' => $_POST['nickname'],
				'about_pet' => $_POST['disc'],
				'age' => $_POST['date']
			);
			$result = Pet::add($data);
			if($result === 'ok'){
				Session::set('success','Employé Ajouté');
				Redirect::to('seller');
			}else{
				echo $result;
			}
		}
	}

	public function updatePet(){
		if(isset($_POST['update'])){
			$data = array(
				'id' => $_POST['id'],
				'nick_name' => $_POST['nickname'],
				'about_pet' => $_POST['disc'],
				'age' => $_POST['date']
			);
			$result = Pet::update($data);
			if($result === 'ok'){
				Session::set('success','Employé Modifié');
				Redirect::to('seller');
			}else{
				echo $result;
			}
		}
	}

	public function deletePet(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = Pet::delete($data);
			if($result === 'ok'){
				Session::set('success','Employé Supprimé');
				Redirect::to('seller');
			}else{
				echo $result;
			}
		}
	}

}



?>