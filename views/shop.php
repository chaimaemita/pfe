<?php
require_once 'controllers/UsersController.php';
$id = $_SESSION["id"]; 

$data = new productController();
$pro = $data->getAllProducts();
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
        #card{
                display: none !important;
            }

        @media screen and (max-width: 472px) {
            body {
                display: flex;
                flex-direction: column;
            }
            #table{
                display: none !important;
            }
            #welcome{
                margin-top: 20%;
            }
            #card{
                display: block !important;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light fixed-top" id="visible"
        style="background-color: #f7f1e3;  border: 0px solid; padding: 10px; box-shadow: 5px 10px 8px #888888;">
        <div class="container-fluid">
            <a href="<?php echo BASE_URL;?>home"><img src="public/img/logo.png" alt="logo" style="width: 70px; height: 70px;"></a>
            
            <a href="<?php echo BASE_URL;?>profileclient" style="text-decoration: none; color:black; font-weight: bold;"><?php echo $_SESSION['username']; ?></a>
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
    <div class="container-fluid" style="margin-top: 10%;">
        <div class="row boredr bg-light" style="margin: 0 15%; border-radius: 5px; box-shadow: -webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px #DFEBE9; ">
            <div class="col-md-6 mx-auto">
                <h3 id="welcome" style="padding-top: 15%;">Welcome <span><?php echo $_SESSION['username']; ?>👋</span>. <br> All your needs are here, in our shop 🛍.</h3>
            </div>
            <div class="col-md-4">
                <img src="public/img/shop.png" alt="" width="300">
            </div>
        </div>

        <table class="table table-striped" style="background-color: #fad390; margin-top: 3%;" id="table">
            <tr class="text-center">
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price(Dh)</th>
                        <th>Categorie</th>
                        <th>Options</th>
            </tr>
            <?php foreach($pro as $pros) :?>
                <input type="hidden" name="id" value="<?php echo $pros['idpro']; ?>">
            <tr class="text-center" style="vertical-align:middle;" id="table">
                <th><img src="public/img/wetfood.jpg" alt="" width="60"></th>
                <th><?php echo $pros['proname'] ;?></th>
                <th><?php echo $pros['price']; ?></th>
                <th><?php if($pros['categorie'] == 1 ){ echo'<span class="badge bg-secondary">food</span>';} elseif($pros['categorie'] == 2){ echo'<span class="badge bg-secondary">toy</span>';}elseif($pros['categorie'] == 3) {echo '<span class="badge bg-secondary">other</span>';};
						      ;?></th>

                <th><a href="">Buy</a></th>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div  class="container-fluid" id="card">
    <?php foreach($pro as $prod) :?>
        <input type="hidden" name="id" value="<?php echo $prod['idpro']; ?>">

        <div class="card d-flex justify-content-center align-items-center">
            <img src="public/img/wetfood.jpg" class="card-img-top" alt="..." width="18rem">
            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title"><?php echo $prod['proname'] ;?></h5>
                <p><?php echo $prod['price']; ?></p>
                <p><?php if($prod['categorie'] == 1 ){ echo'<span class="badge bg-secondary">food</span>';} elseif($prod['categorie'] == 2){ echo'<span class="badge bg-secondary">toy</span>';}elseif($prod['categorie'] == 3) {echo '<span class="badge bg-secondary">other</span>';};
				?></p>
                <a href="">seller's name</a>
                <a href="#" class="btn w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    style="background-color: #bfe6ba;">BUY</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>