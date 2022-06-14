<?php 
	if(isset($_POST['submit'])){
		$createUser = new UsersController();
		$createUser->register();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
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
                    <a href="index.html"><img src="logo.png" alt="" style="width: 100%; height: 100px;"></a>
                    <h2 style="text-shadow: 0 0 3px black, 0 0 5px lightblue">register</h2>
                </div>
                <form action="" method="post" class="d-flex justify-content-center flex-column" style="padding: 5%;">
                    <label for="name">username</label>
                    <input type="text" name="username" id="name">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                    <label for="mdp">Password</label>
                    <input type="password" name="mdp" id="mdp">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" id="phone">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date">
                    <input name="submit" type="submit" value="S'INCRIRE" style="background-color: lightblue; border: none; margin-top: 10px;">
                    <p>If you already have an account <a href="connexion.html">Se connecter</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>