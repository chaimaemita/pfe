
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

<?php require APPROOT . '/views/includeSeller/navbar.php'; ?>

<!-- responsive -->
<?php require APPROOT . '/views/includeSeller/sidebar.php'; ?>

    
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
                      <h5 class="card-title text-center">seller</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-center">SELLER</li>
                    </ul>
                </div>
            </div>
        <div class="container-fluid border rounded" style=" margin-left: 5%; width: 100%;" id="info">
            <h4>Posts:</h4>
            <table class="table" id="info">
                <tr>
                    <th scope="row">
                        <img src="fluffy.webp" alt="" width="100">
                    </th>
                    <th scope="row">
                        <p>informations</p>
                    </th>
                    <th scope="row">
                        <div class="d-flex justify-content-around align-items-center">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 30px;"><i class="bi bi-eye"></i></button>
                            <a href="" style="color:#F5907C; font-size: 30px;"><i class="bi bi-pencil-square"></i></a>
                            <i class="bi bi-trash" style="color:#bfe6ba ; font-size: 30px;"></i>  
                        </div>                 
                    </th>
                    <!-- MODAL -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="fluffy.webp" alt="" width="100">
                    </th>
                    <th scope="row">
                        <p>informations</p>
                    </th>
                    <th scope="row">
                        <div class="d-flex justify-content-around align-items-center">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 30px;"><i class="bi bi-eye"></i></button>
                            <a href="" style="color:#F5907C; font-size: 30px;"><i class="bi bi-pencil-square"></i></a>
                            <i class="bi bi-trash" style="color:#bfe6ba; font-size: 30px;"></i>  
                        </div>                 
                    </th>
                    <!-- MODAL -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </tr>
                <tr>
                    <th>
                        <img src="fluffy.webp" alt="" width="100">
                    </th>
                    <th scope="row">
                        <p>informations</p>
                    </th>
                    <th scope="row">
                        <div class="d-flex justify-content-around align-items-center">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 30px;"><i class="bi bi-eye"></i></button>
                            <a href="" style="color:#F5907C; font-size: 30px;"><i class="bi bi-pencil-square"></i></a>
                            <i class="bi bi-trash" style="color:#bfe6ba ; font-size: 30px;"></i>  
                        </div>                 
                    </th>
                    <!-- MODAL -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </tr>
            </table>
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

<?php require APPROOT . '/views/includeSeller/header.php'; ?>
