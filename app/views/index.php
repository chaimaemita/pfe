<?php require APPROOT . '/views/includeIndex/header.php'; ?>

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

    <!--  nav bar -->
       <?php require APPROOT . '/views/includeIndex/navbar.php'; ?>
    <!-- end nav bar -->

    <div class="container-fluid" style="padding-top: 15%; padding-left: 10%;" id="epet">
        <div class="row" >
            <div class="col-6" >
                <h2 class="w-50">Not only people need a house</h2>
                <p class="w-50">If u r thinking of bringing a cat or a dog,... or their needs welcome to our website.</p>
                <input class="w-25" type="button" value="MAKE A PET" style="height: 10%; background-color: black; color: #ffc3a0; border-radius: 30px; outline: none; border: none;">
            </div>
            <div class="col-6">
                <img src="<?php echo URLROOT; ?>/img/pets.png" class="h-75" alt="image">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #DFEBE9; height: 100vh; padding-top: 10%; padding-left: 10%;" id="scrollspyHeading1">
    <div class="row d-flex justify-content-center align-items-center" style="padding: 0 5%;">
        <div class="col-6">
            <img src="<?php echo URLROOT; ?>/img/needs.png" alt="" style="height: 350px;">
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
            <img src="<?php echo URLROOT; ?>/img/dog.jpg" class="d-block w-50" alt="image" id="img">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hello there, I'm MIKEY</h5>
                    <p>If you want to adopt me, please enter</p>
                </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo URLROOT; ?>/img/puppy.webp" class="d-block w-50" alt="image" id="img">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hello there, I'm JOE</h5>
                    <p>If you want to adopt me, please enter </p>
                </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo URLROOT; ?>/img/sphynx.webp" class="d-block w-50" alt="image" id="img">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hello there, my name is LOOLOO</h5>
                    <p>If you want to adopt me, please enter</p>
                </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo URLROOT; ?>/img/kitten.jpg" class="d-block w-50" alt="image" id="img">
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
            <img src="<?php echo URLROOT; ?>/img/fluffy.webp" alt="" class="w-75" style="height: 150px; margin: 5px 0;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo URLROOT; ?>/img/golden.jpg" alt="" class="w-75" style="height: 150px; margin: 5px 0;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo URLROOT; ?>/img/pomeranian.webp" alt="" class="w-75" style="height: 150px; margin: 5px 0;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo URLROOT; ?>/img/britishorthair.webp" alt="" class="w-75" style="height: 150px; margin: 5px 0;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo URLROOT; ?>/img/small.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px ;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo URLROOT; ?>/img/angry.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px ;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo URLROOT; ?>/img/smalldog.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo URLROOT; ?>/img/funny.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo URLROOT; ?>/img/cat.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo URLROOT; ?>/img/happy.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo URLROOT; ?>/img/frnds.webp" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo URLROOT; ?>/img/luv.jpg" alt="" class="w-75" style="height: 150px; margin-bottom: 5px;">
        </div>
    </div>
</div>

<?php require APPROOT . '/views/includeIndex/footer.php'; ?>