<?php 
	if(isset($_POST['submit'])){
		$loginUser = new UsersController();
		$loginUser->auth();
        // echo 'sjssjs';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>
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
                <form action="" method="POST" class="d-flex justify-content-center flex-column" style="padding: 5%;">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                    <label for="mdp">Password</label>
                    <input type="password" name="mdp" id="mdp">
                    <input name="submit" type="submit" value="Se connecter" style="background-color: lightblue; border: none; margin-top: 10px;">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remb">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <p>If you don't have an account <a href="sinscrire.html">S'inscrire</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>