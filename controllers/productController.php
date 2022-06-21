<?php
    class productController{

       public function getAllProduct(){
        $pro = Product::getAllp();
        return $pro;
       }

       public function getAllProducts(){
        $pro = Product::getAllproducts();
        return $pro;
       } 

       public function getOneProduct(){
        if (isset($_POST['idpro'])) {
            $data = array(
                'idpro' => $_POST['idpro']
            );
            $pro = Product::getProduct($data);
            return $pro;
        }
       }

       public function addProduct(){
            if (isset($_POST['addproduct'])) {
                $data = array(
                    'proname' => $_POST['proname'],
                    'price' => $_POST['price'],
                    'categorie' => $_POST['categorie'],
                );

                $result = Product::addp($data);
                if ($result === 'ok') {
                    Session::set('success','Product added');
                    Redirect::to('seller');
                }else {
                    echo $result;
                }
            }
       }

       public function updatePro(){
            if (isset($_POST['updatepro'])) {
                $data = array(
                    'idpro' => $_POST['idpro'],
                    'proname' => $_POST['proname'],
                    'price' => $_POST['price'],
                    'categorie' => $_POST['categorie']
                );

                $result = Product::updatepro($data);
                if ($result === 'ok') {
                    Session::set('success','Product added');
                    Redirect::to('seller');
                }else {
                    echo $result;
                }
            }
       }

       public function deletePro(){
            if (isset($_POST['idpro'])) {
                $data['idpro'] = $_POST['idpro'];
                $result = Product::deletepro($data);
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