<?php 
	if(isset($_POST['envoyer'])){
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

    <div class="container">
        <div class="row border" style="border: 2px solid black; box-shadow: 10px 10px 5px 5px lightblue; border-radius: 15px; height: auto;margin: 5%;">
            <div method="POST"  class="col-md-6 mx-auto" style="margin-top: 5%;">
                <h3 class="text-center">Enter your information.</h3>
                <form method="POST" class="row g-3 needs-validation" novalidate>
                  <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name" required>
                    <label for="floatingInput" class="form-label">Name</label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="email" name="email" class="form-control" id="validationCustom03" placeholder="e-mail" required>
                    <label for="validationCustom03" class="form-label">E-mail</label>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="password" name="mdp"  class="form-control" id="validationCustom04" placeholder="password" required>
                    <label for="validationCustom03" class="form-label">password</label>
                    <div class="invalid-feedback">
                      Please enter your password.
                    </div>
                  </div>
                  <div class=" form-floating mb-2" >
                    <input type="number" name="phone" class="form-control" id="validationCustom05" placeholder="phone" required>
                    <label for="validationCustom05" class="form-label">Phone</label>
                    <div class="invalid-feedback">
                      Please provide a valid number.
                    </div>
                  </div>
                  <div class="form-floating mb-2">
                      <input type="date" name="date" class="form-control" id="validationCustom05" placeholder="date" required>
                      <label for="validationCustom05" class="form-label">Date</label>
                      <div class="invalid-feedback">
                        Please provide a valid birthday date.
                      </div>
                    </div>
                  <div class="form-group">
                    <input name="envoyer" class="form-control" type="submit" value="S'INCRIRE" style="background-color: lightblue; border: none; margin-top: 10px;">
                  </div>
                  <p>If you already have an account <a href="<?php BASE_URL;?>connexion">Se connecter</a></p>

                  </form>
            </div>
       
        <div class="col-md-4 mx-auto">
            <div class="d-flex justify-content-center align-items-center flex-column" style="margin: 50%;">
              <a href="<?php BASE_URL;?>home"><img src="public/img/logo.png" alt=""></a>
              <h2 style="text-shadow: 0 0 3px black, 0 0 5px lightblue">register</h2>
            </div>
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