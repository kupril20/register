<?php
include 'config/koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login</title>
    <style>
      body {
        background-image: url("assets/img/bg3.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: relative;
      }
      .divider:after,
      .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
      }
      .h-custom {
        height: calc(100% - 73px);
      }
      @media (max-width: 450px) {
        .h-custom {
          height: 100%;
        }
      }
    </style>
  </head>
  <body>
 
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="assets/img/anak.png" class="img-fluid" alt="Sample image" style="height 500px;">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <div class="container" 
        style="margin-top: 100px; 
        background-color:white;
        height:450px;
        border-radius: 25px;
        padding: 20px;">    
          <form method="post">    
              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Selamat Datang di Lembarkerjaid</p>
              </div>
    
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="username" id="form3Example3" class="form-control form-control-lg"
                  placeholder="masukan alamat email" />
                <label class="form-label" for="form3Example3">Alamat Email</label>
              </div>
    
              <!-- Password input -->
              <div class="form-outline mb-3">
                <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                  placeholder="masukan kata sandi" />
                <label class="form-label" for="form3Example4">Kata Sandi</label>
              </div>
    
              <div class="d-flex justify-content-between align-items-center">
                        </div>
    
              <div class="text-center text-lg-start mt-4 pt-2">
                <button name="login"  class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">MASUK</button>
               
                  <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun ? silahkan klik <a href="register.php"
                    class="link-danger">Buat Akun</a></p>
              </div>
            </form>

          </div>          
        </div>
      </div>
    </section>   
    </div>
    <?php
        if (isset($_POST['login'])) {

          //ngambil data yang dikirim dari form
          $username = $_POST["username"];
          $password = $_POST["password"];

          //proses periksa usernam dan password di database
          $query = "SELECT * FROM user WHERE username ='$username' AND password='$password'";
          $obj_query = mysqli_query($koneksi, $query);
          $data = mysqli_fetch_assoc($obj_query);

          if ($data != null) {
            $_SESSION['username'] = $username;
            echo "<script>alert('Login berhasil!');</script>";
            echo "<script>loscation='/register/user/index.html?username=$username';</script>";
            } 
          
          else {
            echo "<script>alert('Username atau password salah!');</script>";
            echo "<script>location='index.php';</script>";
          }
        }
        ?>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>