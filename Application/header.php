
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- index-mp-layout208:42-->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="ENSET Mohammedia " />
<meta name="keywords" content="bts, chichaoua, bts chichaoua, inscription , #" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<link rel="icon" type="image/png" href="EN.svg"/>

<!-- Page Title -->
<title>Enset Mohammedia</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bs4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.css">
    <script src="./js/script.js" defer></script>

</head>
<body class="">
<div id="wrapper" class="clearfix">
  
  
  
  <!-- Header -->
  <header>
        <!--partie 1-->
        <section class="bg-light">
            <div class="container" style="padding: 3px;">
                <div class="row pt-2">
                     <div class="col-md-6 col d-md-flex">
                         <p class="mr-3 paragraph-header">
                             <i class="far fa-envelope mr-1"></i>
                             enset@gmail.com
                         </p> 
                         <p class="paragraph-header">
                             <i class="fas fa-mobile-alt mr-1"></i>
                             +212 7657657656
                        </p>
                     </div>
                     <div  class="col-md-6 col d-flex justify-content-end icons">
                        <span>
                            <!-- we use i tag to show the icons of fontawsome library -->
                            <a href="https://twitter.com/"><i class="fab fa-twitter ml-1"></i></a>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook ml-1"></i></a>
                            <a href="google.com"><i class="fab fa-google-plus ml-1"></i></a>
                            <a href="https://www.instagram.com/" ><i class="fab fa-instagram ml-1"></i></a>
                            <a href="index.php"><i class="far fa-user ml-1"></i></a>
                        </span>
                     </div>   
                </div>
              </div>
        </section>
        
         <section class="container pt-3 navbar-1 bg-white"> 
             <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#"><img src="EN.svg" alt="enset logo" class="w-50"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <?php
                  if(!isset($_GET['id'])){
                    ?>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="#">information</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="#">filiere</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="#">contact</a>
                  </li>
                  <li class="nav-item mr-0">
                    <a class="nav-link text-dark" href="login/login.php?user_connect">connexion</a>
                  </li>
                  <?php
                  }
                  else{
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Menue principale <span class="sr-only">(current)</span></a>
                    </li>
                    <?php
                  }
                  ?>
                </ul>
              </div>
          </nav>
         </section>
    </header>