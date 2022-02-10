<style>
          .button-valid {
                        height: 65px !important;
                        display: grid;
                        place-content: center;
                        padding-top: 25px;
        }

        .mrts-x {
            width: 97%;
            margin: auto
        }
    </style>
   
   <?php
         if( isset($_POST['Ajouter_Absence'])) {
             $nbrH = $_POST['nbrH'];
             $date = $_POST['date'];
             $semester = $_POST['semester'];
             $annee_scolaire = $_POST['annee_scolaire'];
             $id_etud = $_POST['id_etud'];
             $idFiliere = $_POST['idFiliere'];


             $sql = "INSERT INTO absence VALUES('' , '$id_etud' , '{$_SESSION['idemp']}', '$date' , '0' , '$annee_scolaire' , '$semester' , '$nbrH')";
             
             if( $conex->query($sql)) {
                 echo "
                    <script>
                        location.href = './index.php?absent=true';
                    </script>
                 ";
             }
         }
    ?>

   <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" style="border-radius:6px">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn" style="border-radius:6px">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li  ><span style="font-weight:bolder;color:#B73448;font-size:19px">Ajouter Absence à Jhon Doe</span></li>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description"><br>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">


                                                <form class=" form d-flex flex-columns bg-white border p-2 mt-3" action="index.php?absId=<?= $_GET['absId'] ?>&idFiliere=<?= $_GET['idFiliere'] ?>" method="post">
                                                        <input type="hidden" value="<?= $_GET['absId'] ?>" name="id_etud" />
                                                        <input type="hidden" value="<?= $_GET['idFiliere'] ?>" name="idFiliere" />
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Nombre des heurs : </label> 
                                                                <input name="nbrH" type="number" class="form-control" placeholder="number des heurs" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12"></div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Date : </label> 
                                                                <input name="date" type="date" class="form-control" placeholder="number des heurs" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12"></div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Semester : </label> 
                                                                <select class="form-control" name="semester">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12"></div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Anne Scolaire (eg : 2012/2013): </label> 
                                                                <input name="annee_scolaire" type="text" class="form-control" value="2021/2022" />
                                                            </div>
                                                        </div>

                                                    <div class="col-12 col-md-12 button-valid" style="display:flex; justify-content: flex-start;">
                                                        <button type="submit" name="Ajouter_Absence" class="btn btn-block btn-primary" style="width: 50%;">Marquer</button>
                                                    </div>
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