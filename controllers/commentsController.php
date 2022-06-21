<?php
  class commentsController{

    public function getAllComments(){
        $com = Comment::getAllCom();
        return $com;
    }

    public function getAllComment(){
        $com = Comment::getAllComments();
        return $com;
    }

    public function getOneComment(){
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $com = Comment::getComment($data);
            return $com;
        }
    }

    public function addComment(){
        if (isset($_POST['send'])) {
            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'comment' => $_POST['comment']
            );

            $result = Comment::addCom($data);
            if ($result === 'ok') {
                Session::set('success', 'comment added');
                Redirect::to('contacter');
            }else {
                echo $result;
            }
        }
    }

}


?>