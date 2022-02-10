    <div class="col-lg-30 col-md-24 col-sm-12 col-xs-12" style="border-radius:6px">
        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn" style="border-radius:6px">
            <ul id="myTabedu1" class="tab-review-design">
                <li  ><span style="font-weight:bolder;color:#B73448;font-size:19px">Ajouter une annonce</span></li>
                <div id="myTabContent" class="tab-content custom-product-edit">
                    <div class="product-tab-list tab-pane fade active in" id="description"><br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div class="row">
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


                                                    $pname=time().'-annonce.png';
                                                    $tname=$_FILES["image"]["tmp_name"];
                                                    $uploads_dir="../../../images/annonce/";
                                                    move_uploaded_file($tname,$uploads_dir.$pname);

                                                    $titre=addslashes($_POST['titre']);
                                                    $description=addslashes($_POST['description']);
                                                    $audicion=$_POST['audicion'];
                                                    $editeur=$data['ID_EMPLOYEE'];
                                                    $datepub=$_POST['date'];

                                                    $r1="INSERT INTO annonce(ID_EMPLOYEE,TITRE, DESCRIPTION, IMAGE_ANNONCE, DOCUMENTS, DATE_PUB, AUDITION) VALUES ('{$editeur}','{$titre}','{$description}','{$pname}','{$cname}','{$datepub}','{$audicion}')";
                                                    $res1=$conex->query($r1);
                                                    if($res1){
                                                        unset($_POST);
                                                        echo '<script>window.location.replace("index.php?ajouter_annonce=1")</script>';
                                                    }

                                                }
                                                else echo "<h5 style='color:red'> type of image incorrect </h5>";
                                        }
                                        ?>
                                            <form method="POST" action="" enctype="multipart/form-data">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>TITRE : </label> 
                                                        <input name="titre" type="text" required class="form-control"  require>
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
                                                                   <option value="Professeurs">Professeurs</option>
                                                                   <option value="Publique">Publique</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>DATE DU PUBLICATION  :  </label> 
                                                        <input name="date" type="date" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>IMAGE (png,jpg,jpeg) : (optionnel) </label> 
                                                        <input name="image" type="file" class="form-control"  >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>DOCUMENT (.pdf) : (optionnel) </label> 
                                                        <input name="doc" type="file" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>DESCRIPTION : </label> 
                                                        <textarea name="description"   rows="200" cols="100" class="form-control" require></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="payment-adress mg-t-15">
                                                    <input type="submit" name="submit" id="basicInfoPosition" class="btn mg-b-15" value="Ajouter" style="color:white;background-color:#B73448">
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                      </div>
                </div>
           </div>  
        </div>
    </body>
 </html>

