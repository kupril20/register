<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Finance Business - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>
<style>
  .page-heading {
	background-image: url(assets/images/foto.jpg);
}
</style>
  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
        
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Lembarkerjaid</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#top">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Tentang Kita</a>
              </li>                        
              <li class="nav-item">
                <a class="nav-link" href="daftar.html">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Keluar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Register</h1>
            <span>silahkan lakukan Register untuk membuat akun anda!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">  
            <form method="post">    
                <div class="divider d-flex align-items-center my-4">
                  <h1>Silahkan lengkapi data berikut</h1>
                </div>
      
               
                <div class="form-outline mb-4">
                  <input type="text" name="nama" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Nama lengkap" />
                  <label class="form-label" for="form3Example3">Nama Lengkap</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Email" />
                  <label class="form-label" for="form3Example3">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="number" name="no_tlpn" id="form3Example3" class="form-control form-control-lg"
                    placeholder="No Telepon" />
                  <label class="form-label" for="form3Example3">No Telepon</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="alamat" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Alamat" />
                  <label class="form-label" for="form3Example3">Alamat</label>
                </div>
      
                
                <div class="form-outline mb-3">
                  <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Kata Sandi" />
                  <label class="form-label" for="form3Example4">Kata Sandi</label>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                          </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button name="login"  class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem; margin-bottom:50px;">MASUK</button>                
                  </div>
              </form>
              <br>
            <br>
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
              echo "<script>location='/register/user/index.html?username=$username';</script>";
              exit;
            } else {
              echo "<script>alert('Username atau password salah!');</script>";
              echo "<script>location='index.php';</script>";
            }
          }
          ?>
    </div>

    

  


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          
          <div class="col-md-3 footer-item last-item">
           
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2020 Financial Business Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>