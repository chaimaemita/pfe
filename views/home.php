<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-PET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    #img{
        margin: 0 auto;
    }
    #gallery{
        background-color: #f7f1e3;
        height: auto;
        width: 100%;
        padding-top: 10%;
        padding-left: 10%;
    }
</style>
</head>
<body>
<div class="container-fluid" style="background-color: #ffc3a0; height: 100vh;">
    <nav class="navbar navbar-light fixed-top">
        <div class="container-fluid d-flex justify-content-around">
            <ul class="navbar-nav d-flex flex-row" style="text-decoration: none; list-style: none;">
                <li class="nav-item"><a class="navbar-brand" href="#scrollspyHeading1">About</a></li>
                <li class="nav-item"><a class="navbar-brand" href="#scrollspyHeading2">Our pets</a></li>
                <li class="nav-item"><a class="navbar-brand" href="#gallery">Gallery</a></li>
            </ul>
           <a href="#epet"><img src="logo.png" alt="logo" style="width: 70%;"></a>
            <ul class="d-flex justify-content-between" style="text-decoration: none; list-style: none;">
                <li><a class="navbar-brand" href="<?php echo BASE_URL;?>connexion">Se connecter</a></li>
                <li><a class="navbar-brand" href="<?php echo BASE_URL;?>sinscrire">S'inscrire</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid" style="padding-top: 15%; padding-left: 10%;" id="epet">
        <div class="row" >
            <div class="col-6" >
                <h2 class="w-50">Not only people need a house</h2>
                <p class="w-50">If u r thinking of bringing a cat or a dog,... or their needs welcome to our website.</p>
                <input class="w-25" type="button" value="MAKE A PET" style="height: 10%; background-color: black; color: #ffc3a0; border-radius: 30px; outline: none; border: none;">
            </div>
            <div class="col-6">
                <img src="pets.png" class="h-75" alt="image">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #DFEBE9; height: 100vh; padding-top: 10%; padding-left: 10%;" id="scrollspyHeading1">
    <div class="row d-flex justify-content-center align-items-center" style="padding: 0 5%;">
        <div class="col-6">
            <img src="needs.png" alt="" style="height: 350px;">
        </div>
        <div class="col-6 d-flex flex-column">
            <p class="w-75" style="font-size: 18px;"><span class="fw-bold">E-pet.com</span> is one of moroccan's leading online pet 
                stores. offering the highets quality over-the-counter pet
                medications. We understand the special bond
                between you and your pet and take their health and
                well-being very seriously. We hope to become your 
                favorite 1-stop online pet store, where you find quality
                 products at unbeatable prices.</p>
            <div class="d-flex">
                <input type="button" class="fw-bold" value="SIGN IN" style="width: 25%; border: none; border-radius: 30px; height: 35px;">
                <input type="button" class="fw-bold" value="SIGN UP" style="width: 25%; border: 1px solid black; border-radius: 30px; height: 35px; margin-left: 10%;">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #F8FFAE; height: 100vh; padding-top: 10%;" id="scrollspyHeading2">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="dog.jpg" class="d-block w-50" alt="image" id="img">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hello there, I'm MIKEY</h5>
                    <p>If you want to adopt me, please enter</p>
                </div>
          </div>
          <div class="carousel-item">
            <img src="puppy.webp" class="d-block w-50" alt="image" id="img">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hello there, I'm JOE</h5>
                    <p>If you want to adopt me, please enter </p>
                </div>
          </div>
          <div class="carousel-item">
            <img src="sphynx.webp" class="d-block w-50" alt="image" id="img">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hello there, my name is LOOLOO</h5>
                    <p>If you want to adopt me, please enter</p>
                </div>
          </div>
          <div class="carousel-item">
            <img src="kitten.jpg" class="d-block w-50" alt="image" id="img">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hello there, my name is COCO</h5>
                    <p>If you want to adopt me, please enter</p>
                </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
<div class="container-fluid" id="gallery" >
    <div class="row">
        <div class="col-md-3">
            <img src="fluffy.webp" alt="" class="w-75" style="height: 150px; margin: 5px 0;">
        </div>
        <div class="col-md-3">
            <img src="golden.jpg" alt="" class="w-75" style="height: 150px; margin: 5px 0;">
        </div>
        <div class="col-md-3">
            <img src="pomeranian.webp" alt="" class="w-75" style="height: 150px; margin: 5px 0;">
        </div>
        <div class="col-md-3">
            <img src="britishorthair.webp" alt="" class="w-75" style="height: 150px; margin: 5px 0;">
        </div>
        <div class="col-md-3">
            <img src="small.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px ;">
        </div>
        <div class="col-md-3">
            <img src="angry.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px ;">
        </div>
        <div class="col-md-3">
            <img src="smalldog.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
        <div class="col-md-3">
            <img src="funny.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
        <div class="col-md-3">
            <img src="cat.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
        <div class="col-md-3">
            <img src="happy.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
        <div class="col-md-3">
            <img src="frnds.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
        <div class="col-md-3">
            <img src="luv.jpg" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>