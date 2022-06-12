<?php

class Users extends Controller{

    public function __construct(){
        $this->UserModel = $this->model('User');
    }


public function register(){

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = array(
                    'name' => $_POST['username'],
                    'email' => $_POST['email'],
                    'password' => $_POST['mdp'],
                    'phone' => $_POST['phone'],
                    'date' => $_POST['date'],
                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'phone_err' => '',
                    'date_err' => ''
                );

                // if (empty($data['username'])) {
                //     $data['name_err'] = 'Please enter your name';
                // }

                // if (empty($data['email'])) {
                //    $data['email'] = 'Please enter email';
                // }else {
                //     if ($this->Usermodel->findUserByEmail($data['email'])) {
                //         $data['email_err'] = 'Email already exist' ;
                //     }
                // }

                // if (empty($data['mdp'])) {
                //     $data['password_err'] = 'Please enter your password';
                // }elseif(strlen($data['mdp']) > 6){
                //     $data['password_err'] = 'Password must have at least 6 characters';
                // }

                // if (empty($data['phone'])) {
                //     $data['phone_err'] = 'Please enter your phone number';
                // }

                // if (empty($data['date'])) {
                //     $data['date_err'] = 'Please enter your birthday';
                // }

                if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['phone_err']) && empty($data['date_err'])) {
                    $data['mdp'] = password_hash($data['mdp'], PASSWORD_DEFAULT);
                    if ($this->UserModel->register($data)) {
                       flash('register_success', 'you are registerd you can login now');
                       redirect('user/login');
                    }
                }else {
                    $this->view('user/register', $data);
                }
            }

            $this->view('user/register');
        }


        public function login(){

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){   
                // process form
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);  

                $data = [
                   'email' => trim($_POST['email']),
                   'password' => trim($_POST['mdp']),
                   'email_err' => '',
                   'password_err' => ''
               ];

    
    
                //validate email
                // if(empty($data['email'])){
                //     $data['email_err'] = 'Please enter email';
                // }else{
                //     if($this->userModel->findUserByEmail($data['email'])){
                        //user found
                //     }else{
                //         $data['email_err'] = 'User not found';
                //     }
                // }
    
                //validate password 
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter your password';
                }elseif(strlen($data['password']) < 6){
                    $data['password_err'] = 'Password must be atleast six characters';
                }
    
                
                //make sure error are empty
                if(empty($data['email_err']) && empty($data['password_err'])){
                    var_dump($data['email']);
                    var_dump($data['password']);
                    if($this->UserModel->login($data['email'],$data['password'])){
                        $this->createUserSession($loggedInUser);
                        redirect('sellers/index');

                    }else{
                        $data['password_err'] = 'Password incorrect';
                        var_dump("yes 1");
                        $this->view('users/login', $data);
                    }
                }else{
                    var_dump("yes 2");

                    $this->view('users/login', $data);
                }
                
    
            }else{
                //init data f f
                $data = [
                    'email' => '',
                    'password' => '',
                    'email_err' => '',
                    'password_err' => ''
                ];

                //load view
                var_dump("yes 3");

                $this->view('user/login', $data);          
            }
        }
    
    
        //setting user section variable
        public function createUserSession($user){
            $_SESSION['user_id'] = $user->id;
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;
        }
    
    
        //logout and destroy user session
        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['name']);
            unset($_SESSION['email']);
            session_destroy();
            redirect('user/login');
        }
    

}




?>