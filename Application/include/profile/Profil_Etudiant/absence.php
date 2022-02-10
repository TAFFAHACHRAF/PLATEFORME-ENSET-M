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
   
   <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" style="border-radius:6px">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn" style="border-radius:6px">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li  ><span style="font-weight:bolder;color:#B73448;font-size:19px">Details De Votre Absence</span></li>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description"><br>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <!-- <form method="POST" action="">
                                                    
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nom : </label> 
                                                            <p><?=  $data['NOM'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Prénom : </label> 
                                                            <p><?= $data['PRENOM'] ?></p>
                                                        </div>
                                                    </div>      
                                                </form>  -->

                                                <form class=" form d-flex flex-columns bg-white border p-2 mt-3" action="<?= "index.php?absence=" . $_GET['absence'] ?>" method="post">
                                                        <!-- <div class="form-group col-5 col-md-3 mr-1">
                                                            <label for="email" class="mr-sm-2">Année Scolaire:</label>
                                                            <select name="annee" class="form-control" id="sel1">
                                                                    <option value="2021/2022">2021/2022</option>
                                                            </select>
                                                        </div>
                                                         -->
                                                        <div class="form-group col-5 col-md-5 mr-1">
                                                            <label for="pwd" class="mr-sm-2">Année Scoalire:</label>
                                                            <select name="annee" class="form-control" id="sel1">
                                                                    <option value="2021/2022">2021/2022</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-5 col-md-5 mr-1">
                                                            <label for="pwd" class="mr-sm-2">Semester:</label>
                                                            <select name="semester" class="form-control" id="sel1">
                                                                    <option value="1">Semestre 1</option>
                                                                    <option value="2">Semestre 2</option>
                                                                    <option value="3">Semestre 3</option>
                                                                    <option value="4">Semestre 4</option>
                                                                    <option value="5">Semestre 5</option>
                                                            </select>
                                                        </div>
                                                    <div class="col-3 col-md-2 button-valid">
                                                        <button type="submit" name="search-absent" class="btn btn-block btn-primary">chercher</button>
                                                    </div>
                                                </form>

                                                <?php
                                                     if ( isset($_POST['search-absent'])) {
                                                         $anne =  $_POST['annee'];
                                                         $semester =  $_POST['semester'];

                                                         $sql = "SELECT * FROM absence WHERE annee_scolaire='$anne' AND semester='$semester' AND ID_ETUDIANT='{$_GET['absence']}'";
                                                         $res=$conex->query($sql);
                                                         
                                                         if ( $res->num_rows > 0 ) { ?>
                                                                <table class="table table-striped mrts-x">
                                                                    <thead>
                                                                        <th>Date d'absence</th>
                                                                        <th>Nombre Heures</th>
                                                                        <th>justifie</th>
                                                                        <th>Annéescolaire</th>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php  
                                                                        while($data = $res->fetch_assoc()) { ?>
                                                                        <tr>
                                                                            <td><?=  $data['DATE'] ?></td>
                                                                            <td><?=  $data['nbr_hours'] ?></td>
                                                                            <td><?=  $data['justifie'] == 1 ? "non" : "oui" ?></td>
                                                                            <td><?=  $data['annee_scolaire'] ?></td>
                                                                        </tr>
                                                                    <?php    }
                                                                    ?> 
                                                                    </tbody>
                                                                </table>
                                              <?php     } else   {  ?>
                                                 <div>
                                                      <p class="mt-5">Aucune Absence </p>
                                                 </div>
                                            <?php  }
        
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