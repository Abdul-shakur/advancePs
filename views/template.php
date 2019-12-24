<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Inventory System</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!--=================================
  =            Plugins CSS            =
  ==================================-->

  <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="views/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="views/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="views/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="views/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="views/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="views/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="views/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="views/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="views/assets/css/lib/unix.css" rel="stylesheet">
    <link href="views/assets/css/style.css" rel="stylesheet">



    <!-- Ionicons -->
    <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
    

    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css"> 

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> 

     <!-- DataTables -->
    <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="views/plugins/iCheck/all.css">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="views/bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- Morris chart -->
    <link rel="stylesheet" href="views/bower_components/morris.js/morris.css">
    
    <!--====  End of Plugins CSS  ====-->
    
    <!--========================================
    =            plugins javascript            =
    =========================================-->
    <!-- jQuery 3 -->
    <script src="views/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="views/bower_components/fastclick/lib/fastclick.js"></script>

    <!-- AdminLTE App -->
    <script src="views/dist/js/adminlte.min.js"></script>

     <!-- DataTables -->
    <script src="views/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

    <!-- sweet alert -->
    <script src="views/plugins/sweetalert2/sweetalert2.all.js"></script>

    <!-- By default sweetalert2 doesn't support IE. To enable IE 11 support, include Promise polyfill -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

    <!-- iCheck 1.0.1 -->
    <script src="views/plugins/iCheck/icheck.min.js"></script>
    <!-- InputMask -->
    <script src="views/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="views/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="views/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- jQuery Number -->
    <script src="views/plugins/jqueryNumber/jquerynumber.min.js"></script>

    <!-- daterangepicker http://www.daterangepicker.com/-->
    <script src="views/bower_components/moment/min/moment.min.js"></script>
    <script src="views/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>


    <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
    <script src="views/bower_components/raphael/raphael.min.js"></script>
    <script src="views/bower_components/morris.js/morris.min.js"></script>

    <!-- ChartJS http://www.chartjs.org/-->
    <script src="views/bower_components/Chart.js/Chart.js"></script>
    
</head>

<body class="login-page">

<!-- Site wrapper -->

  <?php

    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "ok"){

      echo '<div class="wrapper">';

      /*=============================================
      =            header          =
      =============================================*/  

      include "modules/header.php";

      /*=============================================
      =            sidebar          =
      =============================================*/ 

      include "modules/sidebar.php";

      /*=============================================
      =            Content          =
      =============================================*/ 

      if(isset($_GET["route"])){

        if ($_GET["route"] == 'home' || 
            $_GET["route"] == 'users' ||
            $_GET["route"] == 'categories' ||
            $_GET["route"] == 'products' ||
            $_GET["route"] == 'customers' ||
            $_GET["route"] == 'sales' ||
            $_GET["route"] == 'create-sale' ||
            $_GET["route"] == 'edit-sale' ||
            $_GET["route"] == 'reports' ||
            $_GET["route"] == 'logout'){

          include "modules/".$_GET["route"].".php";

        }else{

           include "modules/404.php";
        
        }

      }else{

        include "modules/home.php";
      
      }
 
      /*=============================================
      =            Footer          =
      =============================================*/ 

      include "modules/footer.php";

      echo '</div>';

    }else{
       /*=============================================
      =            login          =
      =============================================*/ 

      include "modules/login.php";
    }
        
  ?>

  
<!-- ./wrapper -->

<script src="views/js/template.js"></script>
<script src="views/js/users.js"></script>
<script src="views/js/categories.js"></script>
<script src="views/js/products.js"></script>
<script src="views/js/customers.js"></script>
<script src="views/js/sales.js"></script>
<script src="views/js/reports.js"></script>

  <!--========================================
    =            plugins javascript            =
    =========================================-->

    
    <script src="views/assets/js/lib/jquery.min.js"></script>
    <!-- jquery vendor -->
    <script src="views/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="views/assets/js/lib/menubar/sidebar.js"></script>
    <script src="views/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="views/assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->
    <script src="views/assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="views/assets/js/lib/weather/weather-init.js"></script>
    <script src="views/assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="views/assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="views/assets/js/lib/chartist/chartist.min.js"></script>
    <script src="views/assets/js/lib/chartist/chartist-init.js"></script>
    <script src="views/assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="views/assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="views/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="views/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="views/assets/js/scripts.js"></script>

</body>
</html>
