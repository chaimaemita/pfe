
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
            <a href="index.html"><img src="logo.png" alt="logo" style="width: 70px; height: 70px;"></a>
            
            <a href="index.html" style="text-decoration: none; color:black; font-weight: bold;">Accueil</a>
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
                    <a href="<?php echo BASE_URL;?>home" class="d-flex justify-content-center align-items-center"><img src="logo.png"
                            alt="logo"></a>
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
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
        <div class="d-flex justify-content-between align-items-center flex-row" id="profile">
            <div class="">
                <div class="card" style="width: 18rem;">
                    <img src="profileseller.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Client</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-envelope"></i>:E-mail</li>
                        <li class="list-group-item"><i class="bi bi-telephone"></i>:telephone</li>
                        <li class="list-group-item"><i class="bi bi-calendar"></i>:date</li>
                    </ul>
                    <input type="button" value="edit your profile" style="background-color: lightblue; border: none;">
                </div>
            </div>

            <div class="" style="background-color: white; padding: 10% 5%; padding-bottom: 0;">
                <h3>If you want to edit your profile</h3>
                <form action="" method="post" class="d-flex justify-content-center flex-column" style="padding: 5%;">
                    <label for="name">username</label>
                    <input type="text" name="username" id="name">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" id="phone">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date">
                    <input type="submit" value="UPDATE"
                        style="background-color: lightblue; border: none; margin-top: 10px;">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>