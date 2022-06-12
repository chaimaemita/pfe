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
    @media screen and (max-width: 768px){
        #sinsc{
        height: 100vh !important;
        margin-top: 30% !important;
        }
    }
    @media screen and (max-width: 1024px){
        #sinsc{
        height: auto !important;
        margin-top: 20% !important;
        }
    }
    @media screen and (max-width: 472px){
        #sinsc{
        width: 100% !important;
        height: 100vh;
        font-size: small;
        }
    }
</style>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center">
        <div class="d-flex justify-content-around align-items-center flex-row" style="padding: 2% 10%; width: 100%;">
            <div class="d-flex justify-content-center flex-column" style="margin: 0 10%; border: 2px solid black; box-shadow: 10px 10px 5px 5px lightblue; border-radius: 15px; width: 50%; height: 100vh;" id="sinsc">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <a href="index.html"><img src="<?php echo URLROOT; ?>/img/logo.png" alt="" style="width: 100%; height: 100px;"></a>
                    <h2 style="text-shadow: 0 0 3px black, 0 0 5px lightblue">register</h2>
                </div>
                <form action="<?php echo URLROOT; ?>/users/register" method="post">
                        <div class="form-group">
                            <label for="name">username</label>
                            <input class="form-control" type="text" name="username" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input class="form-control" type="email" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="mdp">Password</label>
                            <input class="form-control" type="password" name="mdp" id="mdp">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" type="number" name="phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input class="form-control" type="date" name="date" id="date">
                        </div>
                        <input class="w-100" name="sinscrir" type="submit" value="S'INCRIRE" style="background-color: lightblue;">
                    </form>
            </div>
        </div>
    </div>
    <?php require APPROOT . '/views/includeUser/footer.php'; ?>
