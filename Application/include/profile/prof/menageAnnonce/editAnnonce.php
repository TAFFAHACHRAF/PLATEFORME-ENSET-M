        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="border-radius:6px">
            <div class="container-fluid" style="border-radius:6px">
                <div class="row" style="border-radius:6px">
                    
                    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12" style="border-radius:6px">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn" style="border-radius:6px">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li  ><span style="font-weight:bolder;color:#B73448;font-size:19px">Modifier une annonce </span></li>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description"><br>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                        <form method="POST" action=""  enctype="multipart/form-data">
                                                                <?php
                                                                $re="select * from annonce where ID_ANNONCE='".$_GET["upadate_ann"]."'";
                                                                $rese=$conex->query($re);
                                                                $edit=$rese->fetch_assoc();
                                                                ?>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>TITRE : </label> 
                                                            <input name="titre" type="text" required class="form-control"  value="<?= stripslashes($edit['TITRE'])?>" require>
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>AUDITION : </label> 
                                                            <select name="audicion" class="form-control"  required>
                                                                <?php
                                                                    $reqAud="SELECT FILIERE_LIBELLE FROM filiere";
                                                                    $res=$conex->query($reqAud);
                                                                    if($res){
                                                                        $dataAu=$res->fetch_assoc();
                                                                        ?>
                                                                        <option value="<?= $dataAu['FILIERE_LIBELLE'] ?>"><?= $dataAu['FILIERE_LIBELLE'] ?></option>
                                                                        <?php
                                                                    }
                                                                ?>
                                                                    <!-- selected a ajouter -->
                                                                    <option value="Professeurs">Professeurs</option>
                                                                    <option value="Publique">Publique</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>DATE DU PUBLICATION  :  </label> 
                                                            <input name="date" type="date" class="form-control" value="<?= stripslashes($edit['DATE_PUB'])?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>IMAGE (png,jpg,jpeg) : (optionnel) </label> 
                                                            <input name="image" type="file" class="form-control"  value="<?= stripslashes($edit['IMAGE_ANNONCE'])?>" require>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>DOCUMENT (.pdf) : (optionnel) </label> 
                                                            <input name="doc" type="file" class="form-control" value="<?= stripslashes($edit['DOCUMENTS'])?>" require>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>DESCRIPTION : </label> 
                                                            <textarea name="description"   rows="200" cols="100" class="form-control" require><?= stripslashes($edit['DESCRIPTION'])?></textarea>
                                                        </div>
                                                    </div>
                                                            <div class="col-lg-12">
                                                            <div class="payment-adress mg-t-15">
                                                                <input type="submit" name="submit" id="basicInfoPosition" class="btn mg-b-15" value="Modifier" style="color:white;background-color:#B73448">
                                                        </form> 
                                                                            
                                                        <?php
                                                        if (isset($_POST['submit'])) {
                                                            $array=array('image/png','image/jpeg','image/jpg');
                                                            if(in_array($_FILES['image']['type'],$array) && $_FILES['doc']['type']=='application/pdf'){
                                                                $pname=time().'-annonce.png';
                                                                $tname=$_FILES["image"]["tmp_name"];
                                                                $uploads_dir="../../../images/annonce/";
                                                                move_uploaded_file($tname,$uploads_dir.$pname);

                                                                $cname=time().'-fich.pdf';
                                                                $docname=$_FILES["doc"]["tmp_name"];
                                                                $uploads_dir="../../../images/pdf/";
                                                                move_uploaded_file($docname,$uploads_dir.$cname);

                                                                $titre=$_POST['titre'];
                                                                $description=$_POST['description'];
                                                                $audicion=$_POST['audicion'];
                                                                $date=$_POST['date'];

                                                               $r1="UPDATE annonce 
                                                                        set TITRE='".addslashes($titre)."' 
                                                                            ,DATE_PUB='".$date."'
                                                                            ,DESCRIPTION='".addslashes($description)."'
                                                                            ,AUDITION='".$audicion."'
                                                                            ,IMAGE_ANNONCE='".$pname."'
                                                                            ,DOCUMENTS='".$cname."'
                                                                        WHERE ID_ANNONCE='{$_GET['upadate_ann']}'";
                                                                $res1=$conex->query($r1);
                                                                if($res1){
                                                                    unset($_GET);
                                                                    echo '<script>window.location.replace("index.php?gestion_ann=3")</script>';
                                                                }
                                                        }
                                                        }
                                                    
                                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>