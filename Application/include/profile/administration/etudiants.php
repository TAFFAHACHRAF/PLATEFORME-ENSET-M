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
                        <li  ><span style="font-weight:bolder;color:#B73448;font-size:19px">Liste des étudiants</span></li>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description"><br>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">

                                                 <form class=" form d-flex flex-columns bg-white border p-2 mt-3" action="index.php?etudiants=true" method="post">
                                                        <div class="form-group col-5 col-md-5 mr-1">
                                                            <label for="pwd" class="mr-sm-2">Filiéres:</label>
                                                            <select name="filiere" class="form-control" id="sel1">
                                                                <?php  
                                                                       $sql = "SELECT ID_FILIERE , FILIERE_LIBELLE FROM filiere";
                                                                       $rep = $conex->query($sql);
                                                                    while($data = $rep->fetch_assoc()) {
                                                                ?>
                                                                    <option value="<?= $data['ID_FILIERE'] ?>"><?= $data['FILIERE_LIBELLE'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    <div class="col-3 col-md-2 button-valid">
                                                        <button type="submit" name="get_etudiants" class="btn btn-block btn-primary">chercher</button>
                                                    </div>
                                                </form>

                                               
                                                <?php
                                                       if( isset($_POST['get_etudiants']) ) {
                                                          $filiere = $_POST['filiere'];
                                                         $sql = "SELECT e.ID_ETUDIANT,nom,PRENOM,email,FILIERE_LIBELLE FROM etudiant e INNER JOIN filiere f ON e.ID_FILIERE=f.ID_FILIERE
                                                                 WHERE f.ID_FILIERE='$filiere'";
                                                         $res=$conex->query($sql);
                                                         
                                                         if ( $res->num_rows > 0 ) { ?>
                                                                    <table class="table table-striped">
                                                                        <thead>
                                                                          <th>#</th>
                                                                          <th>nom</th>
                                                                          <th>prenom</th>
                                                                          <th>email</th>
                                                                          <th>filiere</th>
                                                                          <th>Edit</th>
                                                                        </thead>
                                                                    <?php  
                                                                        $i=0;
                                                                        while($data = $res->fetch_assoc()) { 
                                                                        $i++;    
                                                                        ?>
                                                                        <tr>
                                                                            <td><?= $i ?></td>
                                                                            <td><?=  $data['nom'] ?></td>
                                                                            <td><?=  $data['PRENOM'] ?></td>
                                                                            <td><?=  $data['email']?></td>
                                                                            <td><?=  $data['FILIERE_LIBELLE'] ?></td>
                                                                            <td style="display: flex;">
                                                                                <form method="GET" action="index.php" style="margin-right: 5px;">
                                                                                    <input type="hidden" value="<?=  $data['ID_ETUDIANT'] ?>" name="mettreAjour" />
                                                                                     <button type="submit" class="btn btn-success" ><i class="fas fa-edit"></i></button>
                                                                                </form>
                                                                                <form method="GET" action="index.php">
                                                                                    <input type="hidden" value="<?= $data['ID_ETUDIANT'] ?>" name="deleteEtu" />
                                                                                     <button type="submit" class="btn btn-danger" ><i class="fas fa-trash"></i></button>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                    <?php    }
                                                                    ?> 
                                                                    
                                                                </tbody>
                                                                </table>
                                              <?php  }  else { ?>
                                                <br/><br/><br /><br /><br />
                                               <div style="margin-left: 20px">
                                                   <p>Il n ya pas des étudiants dans cetter filiéres</p>
                                               </div>
                                            <?php 
                                            }
                                            }?>
                                                 

                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
               
                </div>
            </div>