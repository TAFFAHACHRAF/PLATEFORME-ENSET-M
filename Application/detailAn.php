<?php
            if(isset($_GET['id'])){
                require("header.php");
?> 
            <?php
            require('connexion.php');
            $r="select * from annonce,employee 
                 where annonce.ID_EMPLOYEE=employee.ID_EMPLOYEE
                 AND ID_ANNONCE='".$_GET['id']."'";

                $res=$conex->query($r);
                if($res)
                {
                    $d=$res->fetch_assoc();
                                            ?>
                    <div class="blog-details-area mg-b-15">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="blog-details-inner">  
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="latest-blog-single blog-single-full-view">
                                                    <div style="margin-left:5%;width:50%" class="blog-details blog-sig-details">
                                                        <p><?=$d['DESCRIPTION']?> </p>
                                                    </div>
                                                    <div class="blog-image">
                                                        
                                                        <?php
                                                        if(!empty($d['IMAGE_ANNONCE'])){
                                                        ?>
                                                        <img style="position:absolute;margin-left:60px;width:50%" src="images/annonce/<?=$d['IMAGE_ANNONCE']?>" alt="" />
                                                        
                                                        <?php
                                                        }
                                                        else {
                                                        ?>
                                                        <img style="margin-left:50%;width:50%" src="images/annonce/default.png" alt="" />
                                                        
                                                        <?php
                                                        }
                                                        ?>
                                                        <div class="blog-date" style="margin-left:50%;width:50%" style="background-color: #B73448;">
                                                        <?php
                                                        // $dat=explode("/",$d['DATE_PUB']);
                                                        // $m=DateTime ::createFromFormat('!m',$dat[1]);
                                                        // $month= $m->format('F');
                                                        ?>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                </div>

                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                if (!empty($d['DOCUMENTS'])){
                ?> 
                    <div class="pdf-viewer-area mg-b-30" style="margin-left:700px;width:50%">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <div class="pdf-single-pro">
                                        <a class="media" href="images/pdf/<?=$d['DOCUMENTS']?>"></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                </div>
                            </div>
                        </div>
                    </div>
        <?php        
                }                              
                }                            
        //  require('footer.php');?>
         <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        <script src="js/pdf/jquery.media.js"></script>
        <script src="js/pdf/pdf-active.js"></script>
   
    <?php 
            
            }
            else{
                header("location:index.php");
            }
    ?>