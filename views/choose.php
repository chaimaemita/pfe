<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        background-color: antiquewhite;
    }
    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar">
            <div class="container-fluid d-flex align-items-center justify-content-center">
              <a class="navbar-brand" href="index.html"><img src="public/img/logo.png" alt="" style="width: 70%;"></a>
            </div>
        </nav>
        <div class="container-fluid d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="public/img/adopt.png" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                  <h5 class="card-title">Client-zone</h5>
                  <p class="card-text">Clik the button</p>
                  <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="<?php echo BASE_URL;?>client"><input class="btn btn-outline-primary" type="button" value="Client" ></a>
                </div>                
            </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="public/img/sell.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                  <h5 class="card-title">Seller-zone</h5>
                  <p class="card-text"> Click the button</p>
                  <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="<?php echo BASE_URL;?>seller"><input class="btn btn-outline-primary" type="button" value="Seller" ></a>
                </div> 
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>