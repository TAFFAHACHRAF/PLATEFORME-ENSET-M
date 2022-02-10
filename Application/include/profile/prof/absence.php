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


                                                <form class=" form d-flex flex-columns bg-white border p-2 mt-3" action="index.php?absent=true" method="post">
                                                     
                                                        <div class="form-group col-5 col-md-5 mr-1">
                                                            <label for="pwd" class="mr-sm-2">Class:</label>
                                                            <select name="class" class="form-control" id="sel1">
                                                                <?php
                                                                      $sql = "SELECT DISTINCT f.ID_FILIERE,f.filiere_libelle FROM employee e INNER JOIN element_module em
                                                                      ON e.ID_EMPLOYEE=em.ID_EMPLOYEE INNER JOIN module m ON em.ID_MODULE=m.ID_MODULE INNER JOIN contenir_1 c 
                                                                      ON m.ID_MODULE=c.ID_MODULE INNER JOIN filiere f ON c.ID_FILIERE=f.ID_FILIERE WHERE e.ID_EMPLOYEE={$_SESSION['idemp']}";

                                                                    $res=$conex->query($sql);
                                                                    if($res->num_rows > 0) {
                                                                    while( $data = $res->fetch_assoc() ) {

                                                                ?>
                                                                      <option value="<?= $data['ID_FILIERE'] ?>"><?= $data['filiere_libelle'] ?></option>
                                                                   
                                                                <?php } 
                                                                 }
                                                                 ?>
                                                            </select>
                                                        </div>
                                                    <div class="col-3 col-md-2 button-valid">
                                                        <button type="submit" name="search-liste" class="btn btn-block btn-primary">chercher</button>
                                                    </div>
                                                </form>

                                                     <?php
                                                         if( isset($_POST['search-liste']) || isset($_GET['idFiliere'])) {
                                                             $class = $_POST['class'] || $_GET['idFiliere'];

                                                             $sql = "SELECT ID_ETUDIANT,nom, prenom, FILIERE_LIBELLE FROM etudiant e 
                                                                     INNER JOIN filiere f ON e.ID_FILIERE=f.ID_FILIERE
                                                                     WHERE f.ID_FILIERE='$class'";

                                                            $res=$conex->query($sql);  ?>
                                                              <table class="table table-striped mrts-x">
                                                                <thead>
                                                                    <th>#</th>
                                                                    <th>Nom</th>
                                                                    <th>prenom</th>
                                                                    <th>Class</th>
                                                                    <th>Ajouter</th>
                                                                </thead>
                                                                <tbody>
                                                        <?php 
                                                          $i = 0;
                                                        while($dt = $res->fetch_object()) {
                                                            $i++;    
                                                        ?>
                                                            <tr>
                                                               <td><?= $i ?></td>
                                                               <td><?= $dt->nom ?></td>
                                                               <td><?= $dt->prenom ?></td>
                                                               <td><?= $dt->FILIERE_LIBELLE ?></td>
                                                               <td>
                                                                   <form method="GET" action="index.php">
                                                                    <input type="hidden" name="absId" value="<?= $dt->ID_ETUDIANT ?>">
                                                                    <input type="hidden" name="idFiliere" value="<?= $class ?>">
                                                                    <button type="submit" class="btn-success btn">
                                                                       <i class="fas fa-plus"></i>
                                                                    </button>
                                                                   </form>    
                                                               </td>
                                                           </tr>
                                                         <?php   }  ?>
                                                         </tbody>
                                                    </table>
                                                    <?php     }
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