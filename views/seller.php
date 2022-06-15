<?php 
    require_once 'controllers/UsersController.php';
    $id = $_SESSION["id"];    
    $data = new PetController();
    $pet = $data->getAllPet();
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
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
    #none{
        display: block;
    }
    #profile{
        display: block !important;
    }
    @media screen and (max-width: 768px){
        #cards{
            margin-top: 10%;
        }
        #clrs{
            width: 100% !important;
            /* display:  !important; */
            /* justify-content: center !important;
            align-items: center !important; */
        }

    }
    @media screen and (max-width: 425px) {
        #cards{
            margin-left: 30% !important;
            margin-top: 10%;
        }
        #clrs{
            display: flex !important;
            flex-direction: column !important;
        }
    }
    @media screen and (max-width: 472px) {
        #visible{
        display: block;
    }
    #none{
        display: none;
    }
    #clrs{
        margin-top: 30%;
        margin-left: 70%;
        display: flex;
        flex-direction: column !important;
        justify-content: center !important;
        align-items: center !important;
    }
    #profile{
        display: none !important;
    }
    #info{
        width: 100% !important;
    }
    }
    </style>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-light fixed-top" style="background-color:lightblue;" id="none">
        <div class="container-fluid d-flex justify-content-around" >
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
    <nav class="navbar navbar-light fixed-top" style="background-color: lightblue;  border: 0px solid; padding: 10px; box-shadow: 5px 10px 8px #888888;"
        id="visible">
        <div class="container-fluid">
            <a href="index.html"><img src="logo.png" alt="logo" style="width: 70px; height: 70px;"></a>
            <h5>Seller's name</h5>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" style="background-color:lightblue;" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">E-PET</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
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
    <div class="row" style="padding: 10% 10%; padding-bottom: 50px;">
        <div class="container-fluid">
        <div class="d-flex flex-column" id="cards">
            <div class="d-flex justify-content-center align-items-center flex-row  mx-auto" id="clrs">
                        <div style="width: 250px; border-radius: 5px; background-color: #F5907C;">
                            <div class="fs-1 ps-3">
                                <i class="bi bi-person"></i>  
                                <p class="fs-5">Clients</p>    
                            </div>
                            <div class="d-flex flex-column align-items-end ms-6">       
                            <p class="fs-5 pe-3">5</p>    
                            </div>  
                        </div>
                        <div style="width: 250px; border-radius: 5px; background-color: #FFBE6E; margin-left: 20px;">
                            <div class="fs-1 ps-3">
                                <i class="bi bi-file-earmark-richtext"></i> 
                                <p class="fs-5">posts</p>            
                            </div>                
                            <div class="d-flex flex-column align-items-end ms-6">    
                               <p class="fs-5 pe-3">5</p>       
                            </div>        
                        </div>
                        <div style="width: 250px; border-radius: 5px; background-color: #bfe6ba; margin-left: 20px;">
                            <div class="fs-1 ps-3">
                                <i class="bi bi-chat-left-text"></i>      
                                <p class="fs-5">comments</p>    
                            </div>
                            <div class="d-flex flex-column align-items-end ms-6">
                                <p class="fs-5 pe-3">5</p>      
                            </div>  
                        </div> 
                        <div style="width: 250px; border-radius: 5px; background-color: lightblue; margin-left: 20px;">
                            <div class="fs-1 ps-3">
                                <i class="bi bi-shield-exclamation"></i>
                                <p class="fs-5">reclamations</p>
                            </div>
                            <div class="d-flex flex-column align-items-end ms-6">
                                <p class="fs-5 pe-3">5</p>    
                            </div>  
                        </div> 
            </div>
        </div>
    </div>
    </div>
    <div class="container" style="padding: 0 10%;">
        <div class="container d-flex flex-row justify-content-around align-items-center">
            <div>
                <div class="card" style="width: 16rem; margin-left: 15%; background-color: lightblue;" id="profile">
                    <img src="profileseller.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center"><?php echo $_SESSION['username']; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-center">SELLER</li>
                    </ul>
                </div>
            </div>
        <div class="card border rounded" style=" margin-left: 5%; width: 100%;" id="info">
            <div class="card-header">
            <h4>PETS</h4>
            <a href="<?php echo BASE_URL;?>postseller" class="btn btn-sm btn-secondary mr-2 mb-2" style="float:right;"><i class="bi bi-plus"></i></a>
            </div>
            <div class="card-body">
            <table class="table table-hover" id="info">
                <tr>
                    <th class="text-center">image</th>
                    <th class="text-center">nickname</th>
                    <th class="text-center">about pet</th>
                    <th class="text-center">age</th>
                    <th class="text-center">options</th>
                </tr>
                
                    <?php foreach($pet as $pets) :?>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $pets['id'];?>">
                    <th>
                        <img src="fluffy.webp" alt="" width="100">
                    </th>
                    <th  style="vertical-align: middle;">
                        <p><?php echo $pets['nick_name'];  ?></p>
                    </th>
                    <th  style="vertical-align: middle;">
                        <p><?php echo $pets['about_pet'];  ?></p>
                    </th>
                    <th  style="vertical-align: middle;">
                        <p><?php echo $pets['age'];  ?></p>
                    </th>
                    <th >
                        <div class="d-flex justify-content-around align-items-center" style="vertical-align: middle;">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 30px;"><i class="bi bi-eye"></i></button>
                            <form action="postupdate" method="POST">
                                <input type="hidden" name="id" value="<?php echo $pets['id'] ?>">
                                <button class="border-0 bg-white p-0" style="color: #F5907C; font-size: 30px;">
                                    <i class="bi bi-pencil-square" style="width: ;"></i>
                                </button>            
                            </form>
                            <form action="postdelete" method="post">
                                <input type="hidden" name="id" value="<?php echo $pets['id'] ?>">
                                <button class="border-0 bg-white p-0" style="color: #F5907C;">
                                    <i class="bi bi-trash" style="color:#bfe6ba ; font-size: 30px;"></i>                                
                                </button>  
                            </form>
                        </div>                 
                    </th>
                    <?php endforeach; ?>
                    <!-- MODAL -->
                    <?php foreach($pet as $pets) :?>
                        <input type="hidden" name="id" value="<?php echo $pets['id'];?>">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><?php echo $pets['nick_name'];?></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $pets['about_pet'];  ?></p>
                                <p><?php echo $pets['age'];  ?></p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php endforeach; ?>
                </tr>
            </table>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="container d-flex flex-row" style="padding: 5% 10%;" id="content">
            <div class="border rounded" style="margin-right: 5%;">
                <canvas id="myChart" style="width:100%;max-width:600px" id="chart"></canvas>
                <script>
                    var xValues = ["males", "females"];
                    var yValues = [51, 49,];
                    var barColors = [
                        "lightblue",
                        "#F5907C",
                        ];
        
                    new Chart("myChart", {
                    type: "pie",
                    data: {
                        labels: xValues,
                        datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                        }]
                    },
                    options: {
                        title: {
                        display: true,
                        text: "Client's gender"
                        }
                    }
                    });
                </script>
            </div>
            <div class="border rounded" id="comments">
                <h4>comments:</h4>
            <table class="table">
                <tr>
                    <th scope="row">
                        <h6><i class="bi bi-person-circle"></i> Client</h6>
                    </th>
                    <th scope="row">
                        <p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
                    </th>
                </tr>
                <tr>
                    <th scope="row">
                        <h6><i class="bi bi-person-circle"></i> Client</h6>
                    </th>
                    <th scope="row">
                        <p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
                    </th>
                </tr>
                <tr>
                    <th scope="row">
                        <h6><i class="bi bi-person-circle"></i> Client</h6>
                    </th>
                    <th scope="row">
                        <p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
                    </th>
                </tr>
            </table>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>