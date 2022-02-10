<?php
        session_name("employer");
        session_start();
            if(isset($_SESSION['login']) and isset($_SESSION['idemp'])){
                if(isset($_GET['id'])){
                    require('../../../../connexion.php');
                    $re="DELETE FROM annonce WHERE ID_ANNONCE = '{$_GET['id']}' ";
                    $rese=$conex->query($re);
                    if($rese){
                        unset($_GET);
                        echo '<script>window.location.replace("../index.php?gestion_ann=3")</script>';                                        
                    }

                }
            }
                    
    ?>