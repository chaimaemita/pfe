<?php 

class User{

	static public function login($data){
		$email = $data['email'];
		try{
			$query = 'SELECT * FROM user WHERE email=:email ';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":email" => $email));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO user (`user_name`, `email`, `password`, `phone`, `date`) VALUES (:username,:email,:password,:phone,:date)');
		$stmt->bindParam(':username',$data['user_name']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':password',$data['password']);
		$stmt->bindParam(':phone',$data['phone']);
		$stmt->bindParam(':date',$data['date']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

}

 ?>