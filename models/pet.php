<?php 

class Pet {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM pet WHERE id_pet = :id_pet');
		$stmt->bindParam(':id_pet', $_SESSION["id"]);
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	static public function getAllpet(){
		$stmt = DB::connect()->prepare('SELECT * FROM pet');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	static public function getPet($data){
		 $id = $data['id'];
		try{
			$query = 'SELECT * FROM pet WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$pet = $stmt->fetch(PDO::FETCH_OBJ);
			return $pet;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO pet (nick_name, about_pet, age, id_pet) VALUES (:nickname, :pet, :age, :id_pet)');
		$stmt->bindParam(':nickname',$data['nick_name']);
		$stmt->bindParam(':pet',$data['about_pet']);
		$stmt->bindParam(':age',$data['age']);
		$stmt->bindParam(':id_pet',$_SESSION["id"]);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}
	
	static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE pet SET nick_name=:nickname, about_pet=:pet, age=:age WHERE id=:id');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':nickname',$data['nick_name']);
		$stmt->bindParam(':pet',$data['about_pet']);
		$stmt->bindParam(':age',$data['age']);
		$query = $stmt->execute();
		if($query){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

	static public function delete($data){
		$id = $data['id'];
		try{
			$query = 'DELETE FROM pet WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	// static public function searchpet($data){
	// 	$search = $data['search'];
	// 	try{
	// 		$query = 'SELECT * FROM pet WHERE nom LIKE ? OR prenom LIKE ?';
	// 		$stmt = DB::connect()->prepare($query);
	// 		$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
	// 		$employes = $stmt->fetchAll();
	// 		return $employes;
	// 	}catch(PDOException $ex){
	// 		echo 'erreur' . $ex->getMessage();
	// 	}
	// }
}
