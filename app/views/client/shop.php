<?php require APPROOT . '/views/includeClient/header.php'; ?>


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
        #card{
                display: none !important;
            }

        @media screen and (max-width: 472px) {
            body {
                display: flex;
                flex-direction: column;
            }
            #table{
                display: none !important;
            }
            #welcome{
                margin-top: 20%;
            }
            #card{
                display: block !important;
            }
        }
    </style>
</head>

<body>

<?php require APPROOT . '/views/includeClient/navbar.php'; ?>

    <div class="container-fluid" style="margin-top: 15%;">
        <h3 id="welcome">Welcome <span>Client's name</span>. <br> All your needs are here, in our shop.</h3>

        <table class="table table-striped" style="background-color: #bfe6ba; margin-top: 3%;">
            <tr class="text-center" style="vertical-align:middle;" id="table">
                <th><img src="wetfood.jpg" alt="" width="60"></th>
                <th>Product's name</th>
                <th>Price</th>
                <th><i class="bi bi-eye"></i></th>
                <th>Buy</th>
            </tr>
        </table>
    </div>
    <div  class="container-fluid" id="card">
        <div class="card d-flex justify-content-center align-items-center">
            <img src="wetfood.jpg" class="card-img-top" alt="..." width="18rem">
            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title">Product's name></h5>
                <p>Price</p>
                <a href="">seller's name</a>
                <a href="#" class="btn w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    style="background-color: #bfe6ba;">BUY</a>
            </div>
        </div>
    </div>

    <?php require APPROOT . '/views/includeClient/footer.php'; ?>
