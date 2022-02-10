<br>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="border-radius:6px">
        
           <?php
                    if( isset($_POST['ajoutProf'])) {

                        function randomPassword() {
                            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                            $pass = array(); //remember to declare $pass as an array
                            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                            for ($i = 0; $i < 8; $i++) {
                                $n = rand(0, $alphaLength);
                                $pass[] = $alphabet[$n];
                            }
                            return implode($pass); //turn the array into a string
                        }
                        $Userid = substr(uniqid(substr($_POST['nom'] , 0, 2)), 0 , 4);
                        $password = randomPassword();

                         $sql = "INSERT INTO compte VALUES('' , '$Userid' , '$password' , NULL)";
                         if( $conex->query($sql)) {
                            $sql = "INSERT INTO etudiant VALUES('' , '{$_POST['idFiliere']}' , '$Userid' , '{$_POST['nom']}' , '{$_POST['prenom']}' , '{$_POST['tel']}' , '{$_POST['email']}' , 
                                        '{$_POST['sex']}' , '{$_POST['adresse']}' , '{$_POST['age']}')";

                            if( $conex->query($sql)) {
                                $last_id =  $conex->insert_id;
                                echo "
                                <div class='alert alert-success border-success' style='width: 50%; margin-left: 20px;'>
                                    Added successfully
                                </div>
                                ";  
                            }
                         }

                         echo $conex->error;
                    }
            ?>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="border-radius:6px">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn" style="border-radius:6px">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li  ><span style="font-weight:bolder;color:#B73448;font-size:19px">Ajouter un étudiant</span></li>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description"><br>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <form method="POST" action="index.php?ajoutEtud=true">
                                                    
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nom : </label> 
                                                            <input  name="nom" type="text" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Prénom : </label> 
                                                            <input  name="prenom" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Adresse : </label> 
                                                            <input name="adresse" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Téléphone : </label> 
                                                            <input name="tel" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>E-mail : </label> 
                                                            <input name="email" type="text" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>date de naissance : </label> 
                                                            <input name="age" type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Sex : </label> 
                                                           <select name="sex" class="form-control">
                                                               <option value="2">Masculin</option>
                                                               <option value="1">Feminin</option>
                                                           </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Filiéres : </label> 
                                                           <select name="idFiliere" class="form-control">
                                                               <?php
                                                                    $req = "SELECT * FROM filiere";
                                                                    $rep = $conex->query($req);

                                                                    while($data = $rep->fetch_assoc()) { ?>
                                                                            <option value="<?= $data['ID_FILIERE'] ?>"><?=  $data['FILIERE_LIBELLE']?></option>
                                                                  <?php }?>
                                                           </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                    <div class="payment-adress mg-t-15">
                                                        <input type="submit" name="ajoutProf" id="basicInfoPosition" class="btn mg-b-15 btn-block" value="Ajouter" style="color:white;background-color:#B73448">
                                                </form> 
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