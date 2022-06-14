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

            display: flex;
            flex-direction: column;
            background-color: #DFEBE9;
        }

        #cards {
            width: 18rem;
        }

        @media screen and (max-width: 472px) {
            body {
                display: flex;
                flex-direction: column;
            }

            #home {
                display: flex;
                flex-direction: column;
                margin-top: 60px;
                margin-bottom: 100%;
            }

            #img {
                display: none;
            }

            #parag {
                width: 100%;
                font-size: 10%;
                padding: 0 !important;
            }

            #cards {
                margin-top: 10%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column !important;
                width: 100%;

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
                    <a href="index.html" class="d-flex justify-content-center align-items-center"><img src="logo.png"
                            alt="logo"></a>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item ps-3 pb-3"><a class="navbar-brand" href="petsposts.html"><i
                                    class="bi bi-file-earmark-post" style="padding-right: 3%;"></i>Posts</a></li>
                        <li class="nav-item ps-3 pb-3"><a class="navbar-brand" href=""><i class="bi bi-shop"
                                    style="padding-right: 3%;"></i>Shop</a></li>
                        <li class="nav-item ps-3 pb-3"><a class="navbar-brand" href="profileclient.html"><i
                                    style="padding-right: 3%;" class="bi bi-file-person-fill"></i>Profile</a></li>
                        <li class="ps-3" style="margin-top: 20%;"><a class="navbar-brand" href="sinscrire.html"
                                style=" border-radius: 5px; padding: 5px;" id="logout"><i style="padding-right: 3%;"
                                    class="bi bi-box-arrow-right"></i> LOG OUT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="background-color: #DFEBE9; padding: 10%;" id="scrollspyHeading1">
        <div class="d-flex justify-content-center align-items-center flex-row" id="home"
            style="padding: 0 5%; border: 1px solid #DFEBE9; padding: 10px; box-shadow: 5px 10px 18px #888888; border-radius: 5px;">
            <div class="">
                <img src="needs.png" alt="" style="height: 350px;" id="img">
            </div>
            <div class="d-flex flex-column">
                <p class="w-75" id="parag" style="font-size: 18px; padding-left: 20%;"><span
                        class="fw-bold">E-pet.com</span> is one of moroccan's leading online pet
                    stores. offering the highets quality over-the-counter pet
                    medications. We understand the special bond
                    between you and your pet and take their health and
                    well-being very seriously. We hope to become your
                    favorite 1-stop online pet store, where you find quality
                    products at unbeatable prices.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center flex-row"
        style="height: 100vh; width: 100%;" id="cards">
        <div class="card d-flex justify-content-center align-items-center">
            <img src="puppy.webp" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                <a href="petsposts.html" class="btn w-100" style="background-color: #bfe6ba;">See</a>
            </div>
        </div>
        <div class="card d-flex justify-content-center align-items-center">
            <img src="fluffy.webp" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title">LOOLOO <i class="bi bi-heart-fill"></i></h5>
                <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                <a href="petsposts.html" class="btn w-100" style="background-color: #bfe6ba;">See</a>
            </div>
        </div>
        <div class="card d-flex justify-content-center align-items-center">
            <img src="dog.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title">COCO <i class="bi bi-suit-heart"></i></h5>
                <p class="card-text">Hello there can you adopt me. I have no home.</p>
                <a href="petsposts.html" class="btn w-100" style="background-color: #bfe6ba;">See</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>