<?php
    session_name("employer");
    session_start();
        if(isset($_SESSION['login']) and isset($_SESSION['idemp'])){
?> 
<!doctype html>
<html >

<head>
    <meta http-equiv="pragma" content="no-cache" />
    <title> Profile professeur </title>
    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=arial:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        
        <link rel="stylesheet" href="../css/data-table/bootstrap-table.css">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../css/owl.transitions.css">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="../css/animate.css">
        <!-- normalize CSS
            ============================================ -->
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="../css/meanmenu.min.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="../css/main.css">
        <!-- educate icon CSS
            ============================================ -->
        <link rel="stylesheet" href="../css/educate-custon-icon.css"> 
        <!-- morrisjs CSS
            ============================================ -->
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="../css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="../css/metisMenu/metisMenu-vertical.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="../style.css">  
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="../css/form/all-type-forms.css">
        <!--    awetsam --> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <style>
            body {
                overflow-x : hidden;
            }
        </style>
       
    </head>
    
        <?php
            require('../../../connexion.php');
            $r="select * from compte,employee 
                where ID_EMPLOYEE='{$_SESSION['idemp']}'
                AND compte.ID_COMPTE=employee.ID_COMPTE";

            $res=$conex->query($r);
            if($res){
                $data=$res->fetch_assoc();
        ?>
                <body style="height:200px;background-color:#B73448;position: relative;">    
                    <div class="left-sidebar-pro" >
                        <nav id="sidebar" class="">
                            <div class="sidebar-header">
                                <a href="index.php"><img class="main-logo" src="../img/logo/enset1.svg" alt="" /></a>
                                    <strong><a href="index.php"><img src="../enset-1.png"  alt="" /></a></strong>
                            </div><br>
                            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                                <nav class="sidebar-nav left-sidebar-menu-pro">
                                    <ul class="metismenu" id="menu1">
                                        <li>
                                            <a class="has-arrow" href="index.php">
                                            <i class='fa fa-home' style='font-size:18px;color: black'></i>
                                                    <span class="mini-click-non">&nbsp;&nbsp;&nbsp;Éducation</span>
                                            </a>
                                        </li>
                        
                                        <li>
                                            <a class="has-arrow" href="all-director.php" aria-expanded="false"><i  class='fas fa-marker' style='font-size:18px;color: black'></i> <span class="mini-click-non">&nbsp;&nbsp;&nbsp;Notes</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="My Account" href="index.php?gestionNotes=true"<span class="mini-sub-pro">Ajouter Un note </span></a></li>
                                                <!-- <li><a title="Edit Password" href=""<span class="mini-sub-pro">gestion des notes</span></a></li> -->
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="has-arrow" href="all-director.php" aria-expanded="false"><i  class='fas fa-newspaper' style='font-size:18px;color: black'></i> <span class="mini-click-non">&nbsp;&nbsp;&nbsp;Annonce</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="My Account" href="index.php?annonce=true"<span class="mini-sub-pro">Ajouter une annonce </span></a></li>
                                                <li><a title="My Account" href="index.php?gestion_ann=true"<span class="mini-sub-pro">Gestion Annonce </span></a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="has-arrow" href="all-director.php" aria-expanded="false"><i  class='fas fa-close' style='font-size:18px;color: black'></i> <span class="mini-click-non">&nbsp;&nbsp;&nbsp;Absence</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="My Account" href="index.php?absent=true"<span class="mini-sub-pro">Ajouter L'absence </span></a></li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a class="has-arrow" href="all-director.php" aria-expanded="false"><i  class='fa fa-cog' style='font-size:18px;color: black'></i> <span class="mini-click-non">&nbsp;&nbsp;&nbsp;Paramètres</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="My Account" href="index.php?account_et=<?= $data['ID_EMPLOYEE'] ?>"<span class="mini-sub-pro">Modifier le Profil </span></a></li>
                                                <li><a title="Edit Password" href="index.php?update_pass=<?= $data['ID_EMPLOYEE'] ?>"<span class="mini-sub-pro">Modifier le mot de passe</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a  href="../../../index.php?etout=2" aria-expanded="false"><i class='fa fa-sign-out' style='font-size:18px;color: black'></i> <span class="mini-click-non">&nbsp;&nbsp;&nbsp; Se déconnecter</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <!-- End Left menu area -->
                    <!-- Start Welcome area -->
                    <div class="all-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="logo-pro">
                                        <!-- <a href="index.php"><img class="main-logo" src="../img/logo/logo.png" alt="" /></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-advance-area" >
                            <div class="header-top-area" style="background-color: #B73448">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="header-top-wraper">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <br>
                                                        <div class="breadcome-heading" >
                                                            <form role="search" class="sr-input-func" >
                                                                <style>
                                                                    ::placeholder {
                                                                        color:white !important;
                                                                        opacity: 0.8;
                                                                    }
                                                                </style>
                                                                <input type="text"   placeholder="Rechercher..." class="search-int form-control">
                                                                <a href="#"><i style="color:white" class="fa fa-search"></i></a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="header-right-info" style="padding: 10px 0;">
                                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                                        <div class="notification-single-top">
                                                                            <h1>Notifications</h1>
                                                                        </div>
                                                                        <ul class="notification-menu" style="text-align:center" >
                                                                        <?php
                                                                            $r1="select a.ID_ANNONCE,a.TITRE,a.DESCRIPTION,a.DATE_PUB,a.IMAGE_ANNONCE,a.DOCUMENTS,em.NOM,em.PRENOM 
                                                                            from annonce a,employee em WHERE a.ID_EMPLOYEE=em.ID_EMPLOYEE 
                                                                            AND a.AUDITION='PROFESSEUR'
                                                                            order by a.DATE_PUB DESC";

                                                                            $res=$conex->query($r1); 
                                                                            if($res){
                                                                                while($d=$res->fetch_assoc()){
                                                                        ?>
                                                                                <li style="text-align:center; padding:0;margin:0;margin-left:-70px;">
                                                                                    <a href="index.php?detail_an=<?=$d['ID_ANNONCE']?>">
                                                                                        <div class="notification-icon" style="background-color:#B73448">
                                                                                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                                                                        </div>
                                                                                        <div class="notification-content">
                                                                                            <span class="notification-date" style="width:140px;color:orange"><?=$d['DATE_PUB']?></span><br><br>
                                                                                            <h2 style="width:140px;margin-left:50px"><?=$d['NOM']." ".$d['PRENOM']?></h2>
                                                                                            <p style="width:140px;margin-left:50px;">ajouter une nouvelle annonce ! </p>
                                                                                        </div>
                                                                                    </a>
                                                                                </li><hr>
                                                                        <?php
                                                                                }
                                                                            }
                                                                        ?>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                 <li class="nav-item">
                                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                                            <img src="../img/profile/<?= (empty($data['IMG_PROFILE'])) ? 'avatar.png' : $data['IMG_PROFILE'] ?>" alt="" />
                                                                            <span class="admin-name"><?= $data['NOM'] ?></span>
                                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                                    </a>    
                                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                                        <li><a href="index.php?account_et=<?= $data['ID_EMPLOYEE'] ?>"><span class="edu-icon edu-home-admin author-log-ic"></span>Mon compte</a>
                                                                        </li>
                                                                        </li>
                                                                        <li><a href="../../../index.php?etout=2"><span class="edu-icon edu-locked author-log-ic"></span>Se déconnecter</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- Mobile Menu start -->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="mobile-menu">
                                                <nav id="dropdown">
                                                    <ul class="mobile-menu-nav">
                                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Accueil <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                            <ul class="collapse dropdown-header-top">
                                                                <li><a href="index.php">index </a></li>
                                                                
                                                            </ul>
                                                        </li>
                                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Paramètres <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                                <li><a href="index.php?detail_an=".<?= $data['ID_ETUDIANT']?>>Modifier le Profil</a>
                                                                </li>
                                                                <li><a href="editPassword.php">Modifier le mot de passe</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="../../../index.php?etout=2">Se déconnecter</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="breadcome-area">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                            <div class="">
                                                <div class="row" >                                      
                                                    <hr style="color: yellow; opacity: 0.3;"> 
                                                    <div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-left: -390px;">
                                                        <ul class="breadcome-menu" >
                                                            <li><a href="#"> <i style="color: white !important;" class="fa fa-home"></i></a>
                                                            </li>
                                                            <?php
                                                                if(!isset($_GET['account_et']) && !isset($_GET['update_pass'])){
                                                            ?>
                                                                 <li><span style="color: white !important;" class="bread-blod">- Annonce &nbsp;&nbsp;&nbsp;&nbsp;</span></li>
                                                            <?php 
                                                                }
                                                                else{
                                                            ?>
                                                                 <li><span style="color: white !important;">-Mon&nbsp;profil &nbsp;&nbsp;&nbsp;&nbsp;</span></li>
                                                            <?php
                                                                }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>
                           
                            <div class="blog-details-area mg-b-15">
                                <div class="container-fluid">
                                       <div class="row">
                           <?php 

                                if(empty($_GET['detail_an']) && empty($_GET['upadate_ann']) && empty($_GET['gestion_ann']) && empty($_GET['account_et']) && empty($_GET['update_pass']) && empty($_GET['ajouter_annonce']) && empty($_GET['absence']) && empty($_GET['biblio']) && empty($_GET['gestionNotes']) && empty($_GET['absent']) && empty($_GET['annonce']) && empty($_GET['absId'])){
                                    $res=$conex->query($r1); 
                                    if($res){
                                        while($d=$res->fetch_assoc()){
                            ?>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="blog-details-inner">  
                                                        <div class="row">
                                                            <div>
                                                                <div class="latest-blog-single blog-single-full-view">
                                                                    <div class="blog-image  " style="padding: 0px 10px 0px 10px;">
                                                                        <h4><span class="blog-ht" href="#"><?=stripslashes($d['TITRE'])?></span></h4>
                                                                        <?php
                                                                        if(!empty($d['IMAGE_ANNONCE'])){
                                                                        ?>
                                                                            <a href="index.php?detail_an=<?=$d['ID_ANNONCE']?>"><img src="../../../images/annonce/<?=$d['IMAGE_ANNONCE']?>" alt="" /></a>
                                                                        <?php
                                                                        }
                                                                        else{
                                                                        ?>
                                                                            <a href="index.php?detail_an=<?=$d['ID_ANNONCE']?>"><img src="../../../images/annonce/default.png" alt="" /></a>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        <div class="blog-date" style="background-color: #B73448;">
                                                                        <?php
                                                                        // $dat=explode("-",$d['DATE_PUB']);
                                                                        // $m=DateTime ::createFromFormat('!m',$dat[1]);
                                                                        // $month= $m->format('F');
                                                                        ?>
                                                            <p><span class="blog-day"><?= $d['DATE_PUB'] ?></span></p>
                                                        </div>
                                                    </div>
                                                    <div class="blog-details blog-sig-details">
                                                        <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
                                                            <span><a href="#"><i class="fa fa-user"></i> <b>Editeur :</b> <?=$d['NOM']." ".$d['PRENOM']?></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                <?php        
                        }   
                ?>
                             </div>
                        </div>
                    </div>
                <?php                         
                    } 
                }
                if(!empty($_GET['account_et'])){
                    require("profile.php");
                }
                elseif(!empty($_GET['update_pass'])){
                    require("editPassword.php");
                }
                elseif(!empty($_GET['gestionNotes'])){
                    require("gestionDesNotes.php");
                }elseif(isset($_GET['absent'])) {
                    require("absence.php");
                }elseif(isset($_GET['biblio'])) {
                    require("library.php");
                }
                elseif(isset($_GET['annonce'])){
                    require("menageAnnonce/addEvents.php");
                }
                elseif(isset($_GET['absId'])){
                    require("ajouterAbsForm.php");
                }
                elseif(!empty($_GET['gestion_ann'])){
                    require("menageAnnonce/menageAnnonce.php");
                }
                elseif(isset($_GET['upadate_ann'])){
                    require('menageAnnonce/editAnnonce.php');
                }
                elseif(!empty($_GET['ajouter_annonce'])){
                    require("menageAnnonce/addEvents.php");
                }
                else{
            
                if(isset($_GET['detail_an'])){
                $rf="select * from annonce where ID_ANNONCE='".$_GET['detail_an']."'";
                $resf=$conex->query($rf);
                if($resf)
                {
                    $df=$resf->fetch_assoc();
                ?>
                    <div class="blog-details-area mg-b-15">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="blog-details-inner">  
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="latest-blog-single blog-single-full-view">
                                                        <h3><span class="blog-ht" href="#"><?= '<br>'.stripslashes($df['TITRE'])?></a></h1>
                                                        <h5><span class="blog-ht" href="#"><?= '<br>'.stripslashes($df['DESCRIPTION'])?></span></h4>
                                                    <div class="blog-image">
                                                        <?php
                                                        if(!empty($df['IMAGE_ANNONCE'])){
                                                        ?>
                                                        <a href="index.php?detail_an=<?= $_GET['detail_an'] ?>"><img src="../../../images/annonce/<?= $df['IMAGE_ANNONCE'] ?>" alt="" />
                                                            </a>
                                                        <?php
                                                        }
                                                        else {
                                                        ?>
                                                        <a href="index.php?detail_an=<?= $_GET['detail_an'] ?>"><img src="../../../images/annonce/default.png" alt="" />
                                                        </a>
                                                        <?php
                                                        }
                                                        ?>
                                                        <div class="blog-date" style="background-color: #B73448;">
                                                        <?php
                                                        // $dat=explode("-",$df['DATE_PUB']);
                                                        // $m=DateTime ::createFromFormat('!m',$dat[1]);
                                                        // $month= $m->format('F');
                                                        ?>
                                                            <p><span class="blog-day"><?= $df['DATE_PUB'] ?></span></p>
                                                        </div>
                                                    </div>
                                                    <div class="blog-details blog-sig-details">
                                                        <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
                                                            <?php
                                                                $resFIN=$conex->query($r1); 
                                                                if($resFIN){
                                                                    $dFIN=$resFIN->fetch_assoc();
                                                            ?>
                                                            <span><a href="#"><i class="fa fa-user"></i> <b>éditeur :</b> <?=$dFIN['NOM']." ".$dFIN['PRENOM']?></a></span>
                                                            <?php
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                <?php 
                if (!empty($df['DOCUMENTS'])){
                ?> 
                    <div class="pdf-viewer-area mg-b-15">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="pdf-single-pro">
                                        <a  href="../../../images/pdf/<?=$df['DOCUMENTS']?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                          <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
           <?php        
                }  
            }                                                    
                ?>
                <?php
                }  
            }                         
                ?>    
                </div></div>
                <br><br><br><br><div class="footer-copyright-area" style="background: none;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer-copy-right">
                                    <p style="color: black;">Copyright © 2022. Tous les droits sont réservés.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- jquery
            ============================================ -->
            <script src="../js/vendor/jquery-1.12.4.min.js"></script>
            <!-- bootstrap JS
                ============================================ -->
            <script src="../js/bootstrap.min.js"></script>
            <!-- meanmenu JS
                ============================================ -->
            <script src="../js/jquery.meanmenu.js"></script>
            <!-- owl.carousel JS
                ============================================ -->
            <script src="../js/owl.carousel.min.js"></script>
            <!-- sticky JS
                ============================================ -->
            <script src="../js/jquery.sticky.js"></script>
            <!-- scrollUp JS
                ============================================ -->
            <script src="../js/jquery.scrollUp.min.js"></script>
            <script src="../js/main.js"></script>
            <!-- counterup JS
                ============================================ -->
            <script src="../js/counterup/jquery.counterup.min.js"></script>
            <script src="../js/counterup/waypoints.min.js"></script>
            <script src="../js/counterup/counterup-active.js"></script>
            <!-- mCustomScrollbar JS
                ============================================ -->
            <script src="../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="../js/scrollbar/mCustomScrollbar-active.js"></script>
            <!-- metisMenu JS
                ============================================ -->
            <script src="../js/metisMenu/metisMenu.min.js"></script>
            <script src="../js/metisMenu/metisMenu-active.js"></script>
            <!-- plugins JS
                ============================================ -->
            <script src="../js/sparkline/jquery.sparkline.min.js"></script>
            <script src="../js/sparkline/jquery.charts-sparkline.js"></script>
            <script src="../js/sparkline/sparkline-active.js"></script>
            <script src="../js/plugins.js"></script>
            <script src="../js/c3-charts/d3.min.js"></script>
            <script src="../js/c3-charts/c3.min.js"></script>
            <script src="../js/c3-charts/c3-active.js"></script>
    </body>
</html>
<?php 
        }
    }
    else{
         header("location:../../../login/login.php?login=hoho");
    }
?>