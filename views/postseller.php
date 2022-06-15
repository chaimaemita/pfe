<?php 
    if(isset($_POST['add'])){
		$newPet = new PetController();
		$newPet->addPet();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
   <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        width: 100%;
        height: 100vh;
        display: flex;
        background-color: #f7f1e3;
    }
    #logout:hover{
        background-color: antiquewhite;
    }
    #visible{
               display: none;
    }
    #navbar{
               display: block;
           }
    @media screen and (max-width: 472px) {
            body {
                display: flex;
                flex-direction: column;
            }

           #profile{
               display: flex;
               justify-content: center;
               align-items: center;
               flex-direction: column !important;
               margin-top: 20%;
           }
           #visible{
               display: block;
           }
           #navbar{
               display: none;
           }
           #profile{
               margin-right: 0 !important;
               margin-left: 0 !important;
           }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-light fixed-top" style="background-color:lightblue;" id="navbar">
        <div class="container-fluid d-flex justify-content-around">
            <ul class="navbar-nav d-flex flex-row" style="text-decoration: none; list-style: none;">
                <li class="nav-item pe-3"><a class="navbar-brand" href="<?php echo BASE_URL;?>seller"><i class="bi bi-house"></i>Dashbord</a></li>
                <li class="nav-item ps-3"><a class="navbar-brand" href="<?php echo BASE_URL;?>postseller"><i class="bi bi-pencil-square"></i>Post</a></li>
            </ul>
           <a href="index.html"><img src="logo.png" alt="logo" style="width: 70px; height: 70px;"></a>
            <ul class="d-flex justify-content-between" style="text-decoration: none; list-style: none;">
                <li class="nav-item pe-3"><a class="navbar-brand" href="<?php echo BASE_URL;?>profileseller"><i class="bi bi-file-person-fill"></i>Profile</a></li>
                <li class="ps-3"><a class="navbar-brand" href="<?php echo BASE_URL;?>logout" style=" border-radius: 5px; padding: 5px;" id="logout">LOG OUT</a></li>
            </ul>
        </div>
    </nav>
    <!-- responsive -->
    <nav class="navbar navbar-light fixed-top" id="visible"
    style="background-color: lightblue;  border: 0px solid; padding: 10px; box-shadow: 5px 10px 8px #888888;">
    <div class="container-fluid">
        <a href="index.html"><img src="logo.png" alt="logo" style="width: 70px; height: 70px;"></a>
        <h5>Seller's name</h5>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel" style="background-color: lightblue;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">E-PET</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <a href="index.html" class="d-flex justify-content-center align-items-center"><img src="logo.png"
                        alt="logo"></a>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item pb-3 ps-3"><a class="navbar-brand" href="seller.html"><i class="bi bi-house"></i>Dashbord</a></li>
                    <li class="nav-item pb-3 ps-3"><a class="navbar-brand" href="postseller.html"><i class="bi bi-pencil-square"></i>Post</a></li>
                    <li class="nav-item pb-3 ps-3"><a class="navbar-brand" href="profileseller.html"><i class="bi bi-file-person-fill"></i>Profile</a></li>
                    <li class="ps-3" style="margin-top: 20%;"><a class="navbar-brand" href="sinscrire.html"
                            style=" border-radius: 5px; padding: 5px;" id="logout"><i style="padding-right: 3%;"
                                class="bi bi-box-arrow-right"></i> LOG OUT</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
    <div class="container-fluid" style="padding: 6% 10%;">
        <div class="d-flex justify-content-center align-items-center flex-row" id="profile">
            <div class="">
                <div class="card" style="width: 18rem; margin-right: 50px;" id="profile">
                    <img src="profileseller.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_SESSION['username']; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-envelope"></i>: <?php echo $_SESSION['email']; ?></li>
                        <li class="list-group-item"><i class="bi bi-telephone"></i>: <?php echo $_SESSION['phone']; ?></li>
                    </ul>
                </div>
            </div>
            <div class="card" style="background-color: white; padding: 10% 5%; padding-bottom: 0; border-radius: 5px;">
            <div class="card-header" style="background-color: lightblue;">
                <h3 style="background-color: lightblue;">Post a new pet to adopt</h3>
            </div>    
           <div class="card-body">
                <form action="" method="post" class="d-flex justify-content-center flex-column" style="padding: 5%;">
                    <div class="form-group form-floating mb-3">
                        <input class="form-control" type="text" name="nickname" id="floatingInput" placeholder="xxxxx">  
                        <label for="floatingInput">🦄nickname</label> 
                    </div>
                    <div class="form-group form-floating mb-3">
                        <input  class="form-control" type="text" name="disc" id="floatingInput" placeholder="xxxxx">  
                        <label for="floatingInput">🐾about the pet</label>  
                    </div>
                    <div class="form-group form-floating">
                        <input class="form-control" type="text" name="date" id="floatingInput" placeholder="xxxxx">
                        <label for="floatingInput">🐾age</label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="submit" name="add" value="Add to your list" style="background-color: lightblue; border: none; margin-top: 10px;">
                    </div>
                </form>
           </div>
                
            </div>
        </div>
    </div>
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
