<?php
    require_once 'controllers/UsersController.php';
    $id = $_SESSION["id"];

    $namePet = new PetController();
    $nick_name = $namePet->getAllPets();
   

    if (isset($_POST['send'])) {
        $com = new commentsController();
        $com->addComment();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #DFEBE9;
        }

        @media screen and (max-width: 472px) {
            body {
                display: flex;
                flex-direction: column;
            }

           #profile{
               display: flex;
               flex-direction: column !important;
           }
        }
    </style>
</head>

<body>
   
    <nav class="navbar navbar-light fixed-top" id="visible"
        style="background-color: #f7f1e3;  border: 0px solid; padding: 10px; box-shadow: 5px 10px 8px #888888;">
        <div class="container-fluid">
            <a href="<?php echo BASE_URL;?>home"><img src="public/img/logo.png" alt="logo" style="width: 70px; height: 70px;"></a>
            
            <a href="<?php echo BASE_URL;?>client" style="text-decoration: none; color:black; font-weight: bold;"><?php echo $_SESSION['username']; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="background-color: #f7f1e3;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">E-PET</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <a href="<?php echo BASE_URL;?>home" class="d-flex justify-content-center align-items-center"><img src="public/img/logo.png"
                            alt="logo"></a>
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item ps-3 pb-3"><a class="navbar-brand" href="<?php echo BASE_URL;?>client"><i
                                    class="bi bi-house-fill" style="padding-right: 3%;"></i>Accueil</a></li>
                        <li class="nav-item ps-3 pb-3"><a class="navbar-brand" href="<?php echo BASE_URL;?>petsposts"><i
                                    class="bi bi-file-earmark-post" style="padding-right: 3%;"></i>Posts</a></li>
                        <li class="nav-item ps-3 pb-3"><a class="navbar-brand" href="<?php echo BASE_URL;?>shop"><i class="bi bi-shop"
                                    style="padding-right: 3%;"></i>Shop</a></li>
                        <li class="nav-item ps-3 pb-3"><a class="navbar-brand" href="<?php echo BASE_URL;?>profileclient"><i
                                    style="padding-right: 3%;" class="bi bi-file-person-fill"></i>Profile</a></li>
                        <li class="ps-3" style="margin-top: 20%;"><a class="navbar-brand" href="<?php echo BASE_URL;?>logout"
                                style=" border-radius: 5px; padding: 5px;" id="logout"><i style="padding-right: 3%;"
                                    class="bi bi-box-arrow-right"></i> LOG OUT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="padding: 6% 10%;">
        <div class="row" id="profile">
            <div class="col-md-6">
                <div class="card" style="background-color: white; padding: 5% 5%; padding-bottom: 0;">
                    <div class="card-header" style="background-color: #f7f1e3;">
                        <h3>🐰 to adopt this one, make a comment.</h3>
                    </div> 
                    <div class="card-body">
                        <form action="" method="POST" class="d-flex justify-content-center flex-column" style="padding: 5%;">
                            <div class="form-group form-floating mb-3">
                                <input class="form-control" id="floatingInput" placeholder="xxxxx" type="text" name="name">
                                <label for="floatingInput">username</label>
                            </div>
                            <div class="form-group form-floating mb-3">
                                <input class="form-control" id="floatingInput" placeholder="xxxxx" type="email" name="email">
                                <label for="floatingInput">E-mail</label>
                            </div>
                            <div class="form-group form-floating mb-3">
                                <input class="form-control" id="floatingInput" placeholder="xxxxx" type="number" name="phone">
                                <label for="floatingInput">Phone</label>

                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" name="demande" placeholder="demande" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">demande</label>
                            </div>
                            <div class="form-floating mt-3">
                            <select class="form-select" aria-label="Default select example" name ="name_pet">
                            <option selected>choose your pet</option>
                                <?php foreach($nick_name as $val) :?>
                            <option><?php echo $val['nick_name']; ?></option>
                            <?php endforeach; ?>
                            </select>
                            </div>
                            <input class="form-control fw-bold" type="submit" value="SEND" name="send" style="background-color: #f7f1e3; border: none; margin-top: 10px;">          
                        </form>
                    </div>   
                </div>
            </div>
            <div class="col-md-3 ">
                <img src="public/img/comment.png" alt="">
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>