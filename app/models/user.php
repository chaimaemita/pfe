<?php
class User{

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function getUser(){

        $this->db->query('SELECT * FROM `user`');
        $result = $this->db->resultSet();
        return $result;

    }

    public function register($data){
        $this->db->query('INSERT INTO user (user_name,email,password, phone, date) VALUES(:name,:email,:mdp,:phone,:date)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':mdp', $data['mdp']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':date', $data['date']);

        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    }

    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //check the row 
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function login($email,$password){

        $this->db->query('SELECT * FROM `user` where email =:email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hash_password = $row->password;

        if($hash_password = $row->password){
            return $row;
        }else{
            return false;
        }
    }


    public function getUserById($id){
        $this->db->query('SELECT * FROM user WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

}



?>