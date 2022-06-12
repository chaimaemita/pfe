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

<?php require APPROOT . '/views/includeClient/navbar.php'; ?>

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
    
    <?php require APPROOT . '/views/includeClient/footer.php'; ?>
