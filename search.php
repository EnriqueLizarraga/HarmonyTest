
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Harmony</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    <img width="100%" src="assets/img/logo.jpg">
    <img width="100%" src="assets/img/morgan-logo.png">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <div class="row">
          <div class="col-xl-7"></div>
          <div class="col-xl-5">
            <ul>
              <a href="#" target="_blank"><img width="80px" src="assets/img/GEL-SoftGel-Logo-Cropped.png"></a>
              <a href="#" target="_blank"><img width="80px" src="assets/img/7696-polygel-logo-R.png"></a>
              <a href="#" target="_blank"><font size="4" color="fffffc">Brand</font></a>
              <a href="#" target="_blank"><img width="37px" src="assets/img/icon_red_1.png"></a>
              <a href="#" target="_blank"><img width="37px"  src="assets/img/icon_red_2.png"></a>
              <a href="#" target="_blank"><img width="37px"  src="assets/img/icon_red_3.png"></a>
              <a href="#" target="_blank"><img width="37px"  src="assets/img/icon_red_4.png"></a>
              <a href="#" target="_blank"><img width="37px"  src="assets/img/icon_red_5.png"></a>

            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-1"></div>
          <div class="col-xl-6">
            <ul>
              <li><a class="nav-link scrollto active" href="#">  <p style="font-size: 1.2em"> Home</p></a></li>
              <li><a class="nav-link scrollto active" href="page-design.php">  <p style="font-size: 1.2em"> Web Design</p></a></li>
              <li><a class="nav-link scrollto active" href="search.php">  <p style="font-size: 1.2em"> Search</p></a></li>
              <li><a class="nav-link scrollto " href="#portfolio"><font color="#fffffc"> PRODUCTS </font></a></li>
              <li><a class="nav-link scrollto" href="#team"><font color="#fffffc"> VIRTUAL SALON </font></a></li>
              <li><a class="nav-link scrollto" href="#team"><font color="#fffffc"> NAILSTYLE </font></a></li>
              <li><a class="nav-link scrollto" href="#team"><font color="#fffffc"> VIDEOS </font></a></li>
              <li><a class="nav-link scrollto" href="#team"><font color="#fffffc"> AND GELICH </font></a></li>
              <li><a class="nav-link scrollto" href="#team"><font color="#fffffc"> PRO </font></a></li>
            </ul>
          </div>
        </div>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->


  <section>


      <div class="row" >
        <div class="col-xl-4"></div>
        <div class="col-xl-4">
              <div class="row height d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                  <div class="search">
                    <form method="post" action="search.php">
                        <i class="fa fa-search"></i>
                         <input type="text" class="form-control" name="search-word" placeholder="Search something">
                          <button type="submit" ><font color="white">Search</font></button>
                    </form>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-xl-2"></div>
      </div>
      <div class="row">
        <div class="col-xl-1"></div>
        <div class="col-xl-11">
          
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buscar = $_POST["search-word"];
    if($buscar == ""){
      $buscar = "qwertyuiopasdfghjklzxcvbnz";
    }

    $nombre_archivo = 'search_database.csv';
 
    $datos = array();
    if (($archivo = fopen($nombre_archivo, 'r')) !== false) {
        while (($fila = fgetcsv($archivo, 1000, ',')) !== false) {
            // Accede a los datos de cada fila
            $columna1 = $fila[0];
            $columna2 = $fila[1];
            $columna3 = $fila[2];
            $posicion = strpos($columna3, $buscar);

            if ($posicion !== false) {
                array_push($datos ,$columna1,$columna2,$columna3);

            } else {
               // echo "La cadena '$buscar' no fue encontrada";
            }

        }
        fclose($archivo);
    }
    ?>

    <table>
      <thead>
          <tr style="background:#568997"> 
              <th>Link</th>
              <th>Name</th>
              <th>Description</th>
          </tr>
      </thead>
      <tbody>

    <?php

    for ($i = 0; $i < count($datos); $i++) {
      ?>
      
            <tr style="background:#56899738">
                <td  style="background:#66899738">  <?php print_r($datos[$i] );  $i=$i+1; ?>  </td>
                <td  style="background:#292f3438">  <?php print_r($datos[$i] ); $i=$i+1; ?>  </td>
                <td  style="background:#6899738 ;height: 25vh">  <?php print_r($datos[$i] ) ;  ?>  </td>
            </tr>

      
    </table>
      <?php
    }

    ?>
      </tbody>
   <?php
  


}




?>

        </div>
      </div>
  </section>




  <!-- ======= Footer ======= -->
  <footer style="background:#333333; width:99.3%" >
    <div style="background:#333333;" class="row margin-top">
      <div class="col-xl-2"></div>
      <div class="col-xl-3">
         <div class="row margin-top">
           <div class="col-xl-8 centra-div">
            <img width="85%" src="assets/img/logo.jpg">
             <p style="font-size: 1.2em; margin:-2.5% 1;" class="centra-div italic"> <font color="#999999">As Nail Artists ourselves, we understand that nothing is more important than the tools of our craft and nothing is more challenging than product inconsistencies. It has been and always will be that quality is our #1 priority. We are proud to identify as a PETA certified cruelty-free brand. *Nail Alliance - North America, Inc. PETA Certification.</font> </p >
           </div>
         </div>
      </div>
      <div class="col-xl-3"></div>
      <div class="col-xl-4">
            <div class="row margin-top">
              <div class="col-xl-1 "></div>
              <div class="col-xl-8">
                <p style="font-size: 26px; margin:-2.5% 1;"> <font color="white"><b>CONTACT US</b></font> </p >
              </div>
            </div>
            <div class="row margin-top-2">
              <div class="col-xl-1 "></div>
              <div class="col-xl-7 ">
                <p style="font-size: 1.2em; margin:-2.5% 1;" class="align-left-text"> <font color="white"><b>Email:</b></font><font color="#999999"> performance@harmony.com </font></p >
                <p style="font-size: 1.2em; margin:-2.5% 1;" class="align-left-text"> <font color="white"><b>Tel:</b></font> <font color="#999999">714.773.9758</font></p >
                <p style="font-size: 1.2em; margin:-2.5% 1;" class="align-left-text"> <font color="white"><b>Fax</b></font> <font color="#999999">714.773.2767 </font></p >
              </div>
            </div>
            <div class="row margin-top-6">
              <div class="col-xl-6 ">
                <p style="font-size: 28px; margin:-2.5% 1;" class="centra-div"> <font color="white">Nail Alliance - North America, Inc. </font> </p >
                <p style="font-size: 28px; margin:-2.5% 1;" class="centra-div"> <font color="#999999">1545 Moonstone </font> </p >
                <p style="font-size: 28px; margin:-2.5% 1;" class="centra-div"> <font color="#999999">Brea, CA 92821 </font> </p >
              </div>
            </div>
      </div>


    </div>
    <div style="background:#333333;" class="row">
      <div class="col-xl-12 margin-top shadow-div"></div>
    </div>
    <div class="row ">
      <div class="col-xl-12 footer-down-div">
        <p style="font-size: 1.2em; margin:-2.5% 1;" class="centra-div  margin-top-2"> <font color="#999999">Copyright © 2023 Nail Alliance - North America, Inc. All Rights Reserved. • Terms and Conditions • Privacy Policy </font> </p >

          <div style="margin-left:15%; ">
            <a href="#" target="_blank"><img src="assets/img/icon_red_1.png"></a>
            <a href="#" target="_blank"><img src="assets/img/icon_red_2.png"></a>
            <a href="#" target="_blank"><img src="assets/img/icon_red_3.png"></a>
            <a href="#" target="_blank"><img src="assets/img/icon_red_4.png"></a>
            <a href="#" target="_blank"><img src="assets/img/icon_red_5.png"></a>
            <a href="#" target="_blank"><img width="40px" src="assets/img/icon_red_6.svg"></a>
          </div>
      </div>
    </div>


  </footer><!-- End Footer -->



  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
