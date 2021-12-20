<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'db_register'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM transaksi";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}
?>
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
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Tentang Kita</a>
              </li>                        
              <li class="nav-item">
                <a class="nav-link" href="daftar.php">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transaksi.php">Validasi</a>
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
            <h1>Validasi Transaksi</h1>
            <span>silahkan lakukan Pembayaran untuk mendapatkan Member!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">  
          <center>
                    <?php
                    $no     = 1;
                    while ($data = mysqli_fetch_array($query)) {
                    ?>

                        <div class="card">
                            <?php
                            if($data['bukti_transaksi'] == NULL){
                            ?>
                            <img src="assets/images/noimage.jpg" width="100px" height="300px">
                            <?php
                                }
                            else{
                                ?>
                            <img src="assets/images/<?php echo $data['bukti_transaksi']; ?>" width="100px" height="300px">
                            <?php
                                }
                            ?>
                            <div class="container">
                                <h4>
                                    <td><?php echo $data['nama_barang'] ?></td>
                                </h4>                                
                                <h2><?php echo $data['harga_bayar'] ?></h2>
                                <?php echo $data['status'] ?>
                                <p>
                                    <?php
                                    if ($data['status'] == "Belum Lunas") {
                                    ?>
                                <form method="POST" action="form_add_transaksi.php?username=<?php echo $username; ?>&&id_transaksi=<?php echo $data['id_transaksi']; ?>" enctype="multipart/form-data">
                                    <table>
                                        <tbody>
                                            <br>
                                            <tr>
                                                <td><input type="file" name="bukti_transaksi" id="foto"></td>
                                            </tr>
                                            <input type="date" name="tgl_transaksi" id="form3Example3" class="form-control form-control-lg"/>
                                            <tr>
                                                <td colspan="3">
                                                    <button type=" submit" name="tambah" class="btn btn-success" style="margin-top: 10px; width: 100%;">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <h5 style="text-align: left;">Lakukan Transfer sesuai nominal ke No Rekening berikut<br>
                                                    Bank BRI : 1234-5678-91011 <br> LEMBARKERJAID <br><br>
                                                </h5>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            <?php
                                    } else {
                            ?>
                                <table>
                                    <tbody>
                                        <tr>
                                            <!-- <td><input type="file" name="foto_validasi" id="foto"></td> -->
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <!-- <button type=" submit" name="tambah" class="btn btn-success" style="margin-top: 10px;">Upload</button> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php
                                    }
                            ?>
                            </p>

                            </div>
                        </div>
                    <?php $no++;
                    } ?>
                </center>
              <br>
            <br>
            </div>          
          </div>
        </div>
      </section>   
      </div>
      <?php
          if (isset($_POST['tambah'])) {
  
            //ngambil data yang dikirim dari form
            $tgl_transaksi = $_POST["tgl_transaksi"];
            $bukti_transaksi = $_POST["bukti_transaksi"];
   
            //proses periksa usernam dan password di database
            $query = "INSERT INTO customer VALUES ('','$nama','$email','$no_tlp','$alamat','$password')";
            $obj_query = mysqli_query($koneksi, $query);
            // $data = mysqli_fetch_assoc($obj_query);
  
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Berhasil di tambahkan")';  
            echo '</script>';  

            //echo $nama,$email,$no_tlp,$alamat,$password;
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