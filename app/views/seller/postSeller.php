<?php require APPROOT . '/views/includeSeller/header.php'; ?>


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
<?php require APPROOT . '/views/includeSeller/navbar.php'; ?>

<!-- responsive -->
<?php require APPROOT . '/views/includeSeller/sidebar.php'; ?>

    <div class="container-fluid" style="padding: 6% 10%;">
        <div class="d-flex justify-content-center align-items-center flex-row" id="profile">
            <div class="">
                <div class="card" style="width: 18rem; margin-right: 50px;" id="profile">
                    <img src="profileseller.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Seller's name</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-envelope"></i>:E-mail</li>
                        <li class="list-group-item"><i class="bi bi-telephone"></i>:telephone</li>
                    </ul>
                </div>
            </div>
            <div class="" style="background-color: white; padding: 10% 5%; padding-bottom: 0; border-radius: 5px;">
                <h3>Post a new pet to adopt</h3>
                <form action="" method="post" class="d-flex justify-content-center flex-column" style="padding: 5%;">
                    <label for="name">nickname</label>
                    <input type="text" name="nickname" id="ckname">   
                    <label for="disc">about the pet</label>
                    <input type="text" name="disc" id="disc">             
                    <label for="date">age</label>
                    <input type="date" name="date" id="date">
                    <input type="submit" value="Add to your list" style="background-color: lightblue; border: none; margin-top: 10px;">
                </form>
            </div>
        </div>
    </div>
    
    </div>
    
    <?php require APPROOT . '/views/includeSeller/footer.php'; ?>
