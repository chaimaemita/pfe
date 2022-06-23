<?php
    class Comment{

        static public function getAllCom(){
            // var_dump($_SESSION['id']);
            // exit();
            // $data['name_pet'] = 'mita';
            $stmt = DB::connect()->prepare('SELECT * FROM `demande`  WHERE user = :user');
            $stmt->bindParam(':user', $_SESSION['id']);
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }

        // static public function getAllComments(){
        //     $stmt = DB::connect()->prepare('SELECT * FROM `demande`');
        //     $stmt->execute();
        //     return  $stmt->fetchAll((PDO::FETCH_ASSOC));;
        //     $stmt->close();
        //     $stmt = null;
        // }

        static public function getComment($data){
            // print_r($data);
            // die();
            $id = $data['id'];
            $stmt = DB::connect()->prepare('SELECT * FROM `demande` WHERE id= :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $com = $stmt->fetchALL(PDO::FETCH_OBJ);
            return $com;
        }        

        static public function addCom($data){
            $stmt = DB::connect()->prepare('INSERT INTO demande (name, email, phone, demande,name_pet,user) VALUES (:name, :email, :phone, :demande, :name_pet, :user)');
            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':phone', $data['phone']);
            $stmt->bindParam(':demande', $data['demande']);
            $stmt->bindParam(':name_pet', $_SESSION['nick_name']);
            $stmt->bindParam(':user', $_SESSION['id']);
            $query = $stmt->execute();
            // print_r($stmt);
            // die();
                if ($query) {
                    return 'ok';
                }else {
                    return 'error';
                }
            // $stmt->clos
            e();
            $stmt = null;


        }
    }


?>