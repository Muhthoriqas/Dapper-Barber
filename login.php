<?php
require 'function.php';

if( isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result =mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

  if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row["password"])){
      header("Location: index.html");
      exit;
    }else{
      echo "<script>
      alert('Password Wrong!')
    </script>";
    }
  }else{
    echo "<script>
    alert('Username Invalid!, Plese Sign Up First!')
  </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="sciript.js" defer></script>

    <!-- <link rel="shortcut icon" href="" type="image/x-icon" /> -->
    <title>Login Barber</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="mx-auto mt-5 text-center">
          <img src="img/logo.png" width="8%" alt="Logo Barber" />
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-7 mt-3">
          <img
            class="img-fluid"
            src="img/loginImg.svg"
            width="550px"
            alt="Login
          Image"
          />
        </div>
        <div class="col-md-5 mt-3">
          <div class="card shadow-sm p-3">
            <div class="card-body">
              <h4>Sign In</h4>
              <p class="text-muted">Get the Best Haircut Here!</p>
              <form action="" class="mt-4" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username" name="username" id="username" autocomplete="off" required/>
                </div>
                <div class="input-group mt-2">
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    id="password"
                    name="password"
                    autocomplete="off"
                    required
                  />
                  <div class="input-group-append">
                    <span class="input-group-text" onclick="displayPassword()">
                      <i id="display-pass" data-feather="eye"></i>
                      <i id="hiden-pass" data-feather="eye-off"></i>
                    </span>
                  </div>
                </div>
                <div class="text-end mt-2">
                  <small>
                    <a class="text-theme" href="">Forgot Password ?</a>
                  </small>
                </div>
                <div class="d-grid gap-2">
                  <button class="btn mt-2 btn-color-theme" type="submit" name="login" id="login">
                    Sign In
                  </button>
                  <p class="text-center">
                    Don't have an account yet?
                    <a class="text-theme" href="registrasi.php">Sign Up</a>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/feather-icons"></script>

    <script>
      feather.replace();
    </script>
  </body>
</html>
