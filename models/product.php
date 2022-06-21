<?php
class Product{

    static public function getAllp(){
        $stmt = DB::connect()->prepare('SELECT * FROM products WHERE id_product = :id_product');
        $stmt->bindParam(':id_product',  $_SESSION["id"]);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    
    static public function getAllproducts(){
        $stmt = DB::connect()->prepare('SELECT * FROM products');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function getProduct($data){
        $idpro = $data['idpro'];
        $stmt = DB::connect()->prepare('SELECT * FROM products WHERE idpro=:idpro');
        $stmt->bindParam(':idpro',$idpro);
        $stmt->execute();
        $pro = $stmt->fetch(PDO::FETCH_OBJ);
    //     print_r($pro);
    //    die();
        return $pro;

    }

    static public function addp($data){
        $stmt = DB::connect()->prepare('INSERT INTO products (proname, price, categorie, id_product) VALUES (:proname, :price, :categorie, :id_product)');
        $stmt->bindParam(':proname',$data['proname']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':categorie',$data['categorie']);
        $stmt->bindParam(':id_product', $_SESSION["id"]);

        if ($stmt->execute()) {
            return 'ok';
        }else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function updatepro($data){
        $stmt = DB::connect()->prepare('UPDATE `products` SET proname=:proname, price=:price, categorie=:categorie WHERE idpro=:idpro');
        $stmt->bindParam(':idpro',$data['idpro']);
        $stmt->bindParam(':proname',$data['proname']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':categorie',$data['categorie']);
        $query= $stmt->execute();
       
        if ($query) {
            return 'ok';
        }else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    } 

    static public function deletepro($data){
        $idpro = $data['idpro'];
        try {
            $request = 'DELETE FROM products WHERE idpro=:idpro';
            $stmt = DB::connect()->prepare($request);
            $stmt->execute(array(":idpro" => $idpro));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

}
    



?>