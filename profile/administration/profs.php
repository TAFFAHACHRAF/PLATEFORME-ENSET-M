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
                        <li  ><span style="font-weight:bolder;color:#B73448;font-size:19px">Liste des Profs</span></li>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description"><br>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">

                                                 <form class=" form d-flex flex-columns bg-white border p-2 mt-3" action="index.php?profs=true" method="post">
                                                        <div class="form-group col-5 col-md-5 mr-1">
                                                            <label for="pwd" class="mr-sm-2">Département:</label>
                                                            <select name="departement" class="form-control" id="sel1">
                                                                <?php  
                                                                       $sql = "SELECT ID_DEPARTEMENT , DEPARTEMENT_LIBELLEL FROM departement";
                                                                       $rep = $conex->query($sql);
                                                                    while($data = $rep->fetch_assoc()) {
                                                                ?>
                                                                    <option value="<?= $data['ID_DEPARTEMENT'] ?>"><?= $data['DEPARTEMENT_LIBELLEL'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    <div class="col-3 col-md-2 button-valid">
                                                        <button type="submit" name="get_departement" class="btn btn-block btn-primary">chercher</button>
                                                    </div>
                                                </form>

                                               
                                                <?php
                                                       if( isset($_POST['get_departement']) ) {
                                                          $departement = $_POST['departement'];
                                                         $sql = "SELECT em.ID_EMPLOYEE,nom,PRENOM,email,ELEMENT_LIBELLE FROM employee em INNER JOIN element_module el ON em.ID_EMPLOYEE=el.ID_EMPLOYEE
                                                                 INNER JOIN module m ON el.ID_MODULE=m.ID_MODULE INNER JOIN contenir_1 c ON m.ID_MODULE=c.ID_MODULE
                                                                 INNER JOIN filiere f ON c.ID_FILIERE=f.ID_FILIERE INNER JOIN departement d ON f.ID_DEPARTEMENT=d.ID_DEPARTEMENT
                                                                 WHERE d.ID_DEPARTEMENT='$departement'";
                                                         $res=$conex->query($sql);
                                                         
                                                         if ( $res->num_rows > 0 ) { ?>
                                                                    <table class="table table-striped">
                                                                        <thead>
                                                                          <th>#</th>
                                                                          <th>nom</th>
                                                                          <th>prenom</th>
                                                                          <th>email</th>
                                                                          <th>matiere</th>
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
                                                                            <td><?=  $data['ELEMENT_LIBELLE'] ?></td>
                                                                            <td style="display: flex;">
                                                                                <form method="GET" action="index.php" style="margin-right: 5px;">
                                                                                    <input type="hidden" value="<?= $data['ID_EMPLOYEE'] ?>" name="mettreAjourProf" />
                                                                                     <button type="submit" class="btn btn-success" ><i class="fas fa-edit"></i></button>
                                                                                </form>
                                                                                <form method="GET" action="index.php">
                                                                                    <input type="hidden" value="<?= $data['ID_EMPLOYEE'] ?>" name="deleteProf" />
                                                                                     <button type="submit" class="btn btn-danger" ><i class="fas fa-trash"></i></button>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                    <?php    }
                                                                    ?> 
                                                                    
                                                                </tbody>
                                                                </table>
                                              <?php  }  
                                              
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