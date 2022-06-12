<?php require APPROOT . '/views/includeUser/header.php'; ?>

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
        justify-content: center;
        align-items: center;
        background-color: antiquewhite;
    }
    @media screen and (max-width: 472px){
        #con{
        width: 100% !important;
        }
    }
</style>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="d-flex justify-content-around align-items-center" style="padding: 0 auto; width: 80%;">
            <div class="d-flex justify-content-center flex-column" style="margin: 0 auto; border: 2px solid black; box-shadow: 10px 10px 5px 12px lightblue; border-radius: 15px; width: 50%;" id="con">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <a href="index.html"><img src="logo.png" alt="" style="width: 100%; height: 100px;"></a>
                    <h2 style="text-shadow: 0 0 3px black, 0 0 5px lightblue">register</h2>
                </div>
                <form  method="POST" action="<?php echo URLROOT; ?>/users/login" >
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input class="form-control" type="email" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="mdp">Password</label>
                            <input class="form-control" type="password" name="mdp" id="mdp">
                        </div>
                        <input type="submit" class="w-100" value="Login" style="background-color: lightblue;">
                    </form>
            </div>
        </div>
    </div>
    <?php require APPROOT . '/views/includeUser/footer.php'; ?>
