<br>

       <?php
             if( isset($_GET['mettreAjourProf'])) {
                 $id = $_GET['mettreAjourProf'];
                 $sql = "SELECT * FROM  employee e INNER JOIN compte c ON e.ID_COMPTE=c.ID_COMPTE WHERE ID_EMPLOYEE='$id'";
                 $rep = $conex->query($sql);
                 $data = $rep->fetch_assoc();
             }
       ?>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="border-radius:6px">
            <div class="container-fluid" style="border-radius:6px">
                <div class="row" style="border-radius:6px">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"style="border-radius:6px">
                        <div class="profile-info-inner" style="border-radius:6px">
                            <div class="profile-img">
                                    <img src="../img/profile/<?= (empty($data['IMG_PROFILE'])) ? 'avatar.png' : $data['IMG_PROFILE'] ?>" id="ysf" >
                                    <style>
                                        #ysf{
                                            display: block;
                                            margin-left: auto;
                                            margin-right: auto;
                                            border:5px solid #B73448;
                                            width: 50%;
                                            border-radius:50%;
                                            width:200px;
                                            height:200px;
                                            
                                        }
                                        #im{
                                            display: block;
                                            margin-left: auto;
                                            margin-right: auto;
                                            position:absolute;
                                            right:25%;
                                            top:170px;
                                            font-size:30px;
                                            color :black;
                                        }
                                        
                                        #sub{
                                            visibility: hidden;
                                            position:absolute;
                                            top:180px;
                                            right:10%;
                                            background-color:#B73448;
                                            border: none;
                                            color: #fff;
                                        }
                                    </style>
                                    
                                    <form method="Post" action="" enctype="multipart/form-data" ><label id="im" onclick="Update();" ><i class="fa fa-camera">
                                        <input  type="file" name="img"  style="display:block;visibility: hidden;width: 0;height: 0;">
                                        </i></label>
                                        <input id="sub" type="submit" name="file" value="mettre à jour" >
                                    </form>
                                    <script>
                                        function Update(){
                                            var inpSub =document.getElementById('sub');
                                            inpSub.style.visibility='visible';
                                        }
                                    </script>
                                    <?php
                                    if (isset($_POST['file'])) {
                                        if (isset($_FILES['img'])) {
                                            $fich=$data['IMG_PROFILE'];
                                            $pname=rand(1,100000000).'-et.png'; // Nouvelle image
                                            $tname=$_FILES["img"]["tmp_name"];
                                            $uploads_dir="../img/profile/";
                                            move_uploaded_file($tname,$uploads_dir.$pname);
                                            $reqq="UPDATE compte c
                                            set  IMG_PROFILE='$pname'
                                                WHERE login='{$data['LOGIN']}'";
                                            $result=$conex->query($reqq);
                                            if($result){
                                                $fichier = '../img/profile/'.$fich;
                                                if(file_exists($fichier)){
                                                    unlink($fichier); // Image  à supprimer
                                                echo  '<script>window.location.replace("index.php?mettreAjour=1")</script>';
                                            
                                        }
                                    }
                                }
                            }
                            ?>
                    </div>
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b >Nom </b><br /><?= $data['NOM']?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Prénom</b><br /><?= $data['PRENOM']?> .</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p style="word-wrap : break-word"><b>E-mail </b><br /> <?= $data['EMAIL']?></p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Téléphone</b><br /> <?= $data['TEL']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="address-hr">
                                    <p><b>Adresse</b><br /> <?= $data['ADRESSE']?> .</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        &nbsp;
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="border-radius:6px">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn" style="border-radius:6px">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li  ><span style="font-weight:bolder;color:#B73448;font-size:19px">Mettre à jour le profil d'étudiant</span></li>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description"><br>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <form method="POST" action="index.php?mettreAjourProf=<?= $data['ID_EMPLOYEE'] ?>">
                                                    
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nom : </label> 
                                                            <input  name="nom" type="text" class="form-control" value="<?= $data['NOM']?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Prénom : </label> 
                                                            <input  name="prenom" type="text" class="form-control" value="<?= $data['PRENOM']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Adresse : </label> 
                                                            <input name="adresse" type="text" class="form-control" value="<?= $data['ADRESSE']?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Téléphone : </label> 
                                                            <input name="tel" type="text" class="form-control" value="<?= $data['TEL']?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>E-mail : </label> 
                                                            <input name="email" type="text" class="form-control" value="<?= $data['EMAIL']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Age : </label> 
                                                            <input name="age" type="date" class="form-control" value="<?= intval($data['DATE_NAISSANCE'])?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                    <div class="payment-adress mg-t-15">
                                                        <input type="submit" name="update_prof" id="basicInfoPosition" class="btn mg-b-15" value="Mettre à jour" style="color:white;background-color:#B73448">
                                                </form> 
                                                <?php
                                                if (isset($_POST['update_prof'])) {
                                                    
                                                    $adresse=$_POST['adresse'];
                                                    $tel=$_POST['tel'];
                                                    $email=$_POST['email'];
                                                    $age=$_POST['age'];
                                                    $prenom=$_POST['prenom'];
                                                    $nom=$_POST['nom'];

                                                    $r1="UPDATE employee 
                                                        set EMAIL='$email' , TEL='$tel' , ADRESSE='$adresse' , DATE_NAISSANCE='$age' , NOM='$nom' , prenom='$prenom'
                                                        WHERE  ID_EMPLOYEE='".$data['ID_EMPLOYEE']."';";

                                                    $res1=$conex->query($r1);
                                                    if($res1){
                                                        echo  '<script>
                                                        const queryString = window.location.search;
                                                            window.location.replace("index.php"+queryString);
                                                            </script>';
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