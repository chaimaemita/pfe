<?php 
	if(isset($_POST['submit'])){
		$loginUser = new UsersController();
		$loginUser->auth();
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
            <div class="d-flex justify-content-center flex-column border" style="margin: 0 auto; border: 2px solid black; box-shadow: 10px 10px 5px 12px lightblue; border-radius: 15px; width: 50%;" id="con">
                <div class="d-flex justify-content-center align-items-center flex-column" style="margin-top: 5%;">
                    <a href="index.html"><img src="public/img/logo.png" alt="" style="width: 100%; height: 100px;"></a>
                    <h2 style="text-shadow: 0 0 3px black, 0 0 5px lightblue">register</h2>
                </div>
                <form action="" method="POST" class="d-flex justify-content-center flex-column needs-validation" style="padding: 5%;" novalidate>
                <div class="form-floating mb-2">
                    <input class="form-control" type="email" name="email" placeholder="email" id="email" required>
                    <label for="email">E-mail</label>
                    <div class="invalid-feedback">
                      Please provide a valid e-mail.
                    </div>
                </div>    
                <div class="form-floating mb-2">
                    <input type="password" name="mdp"  class="form-control" id="validationCustom04" placeholder="password" required>
                    <label for="validationCustom03" class="form-label">password</label>
                    <div class="invalid-feedback">
                      Please enter your password.
                    </div>
                  </div>
                <div class="mb-3 form-check mt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remb">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                    <input name="submit" class="form-control" type="submit" value="Se connecter" style="background-color: lightblue; border: none; margin-top: 10px;" required>
                    <p>If you don't have an account <a href="<?php BASE_URL;?>sinscrire">S'inscrire</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
</script>
</body>
</html>