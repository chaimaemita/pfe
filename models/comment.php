<?php
    class Comment{

        static public function getAllCom(){
            $stmt = DB::connect()->prepare('SELECT * FROM `comments` WHERE id_cmts= :id_cmts');
            $stmt->bindParam(':id_cmts', $_SESSION['id']);
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }

        static public function getAllComments(){
            $stmt = DB::connect()->prepare('SELECT * FROM `comments`');
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }

        static public function getComment($data){
            $id = $data['id'];
            $stmt = DB::connect()->prepare('SELECT * FROM `comments` WHERE id= :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $com = $stmt->fetch(PDO::FETCH_OBJ);
            return $com;
        }        

        static public function addCom($data){
            $stmt = DB::connect()->prepare('INSERT INTO comments (name, email, phone, comment, id_cmts) VALUES (:name, :email, :phone, :comment, :id_cmts)');
            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':phone', $data['phone']);
            $stmt->bindParam(':comment', $data['comment']);
            $stmt->bindParam(':id_cmts', $_SESSION["id"]);

            if ($stmt->execute()) {
                return 'ok';
            }else {
                return 'error';
            }
            $stmt->close();
            $stmt = null;


        }
    }


?>