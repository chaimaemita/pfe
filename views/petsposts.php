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

        #resp {
            display: none !important;
        }

        @media screen and (max-width: 472px) {
            body {
                display: flex;
                flex-direction: column;
            }

            #cards {
                display: none !important;
            }

            #resp {
                display: block !important;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light fixed-top" id="visible"
        style="background-color: #f7f1e3;  border: 0px solid; padding: 10px; box-shadow: 5px 10px 8px #888888;">
        <div class="container-fluid">
            <a href="index.html"><img src="logo.png" alt="logo" style="width: 70px; height: 70px;"></a>
            <a href="index.html" style="text-decoration: none; color:black; font-weight: bold;">Client's name</a>
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
    <div class="container-fluid d-flex justify-content-center align-items-center flex-column" style="width: 100%;"
        id="cards">
        <div class="row" style="margin-top: 10%;">
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="puppy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            style="background-color: #bfe6ba;">See
                        </a>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="puppy.webp" class="card-img-top" alt="...">
                                <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                                <p class="fw-bold">5 months old</p>
                                <p>Youssoufia</p>
                                <a href="">seller's name</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">ADOPTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="fluffy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">LOOLOO <i class="bi bi-heart-fill"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="dog.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">COCO <i class="bi bi-suit-heart"></i></h5>
                        <p class="card-text">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 10%;">
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="puppy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="fluffy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">LOOLOO <i class="bi bi-heart-fill"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="dog.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">COCO <i class="bi bi-suit-heart"></i></h5>
                        <p class="card-text">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 10%;">
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="puppy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="fluffy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">LOOLOO <i class="bi bi-heart-fill"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="dog.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">COCO <i class="bi bi-suit-heart"></i></h5>
                        <p class="card-text">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- responsive -->
    <div class="container-fluid d-flex flex-column" style="margin-top: 30%;" id="resp">
        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
        <div class="card d-flex justify-content-center align-items-center">
            <img src="puppy.webp" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                <p class="fw-bold">5 months old</p>
                <p>Youssoufia</p>
                <a href="">seller's name</a>
                <a href="#" class="btn w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    style="background-color: #bfe6ba;">ADOPTE</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>