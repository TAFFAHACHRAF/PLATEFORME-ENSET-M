<br>
        <!-- Single pro tab review Start-->
          <style>
          .bg-test {
              background-color: #FFF !important
          }

          .form {
              padding-top : 14px !important;
          }
          .button-valid {
                        height: 65px !important;
                        display: grid;
                        place-content: center;
                        padding-top: 25px;
        }

        .note-section {
            padding : 10px !important;
        }
        </style>


        <div class="single-pro-review-area mt-t-30 mg-b-15 bg-test" style="border-radius:6px; passing-top: 13px;">
            <div class="container-fluid" style="border-radius:6px">
            <p><span style="font-weight:bolder;color:#B73448;font-size:19px; margin: 10px;">gestion des notes : </span></p>
            <form class=" form d-flex flex-columns bg-white border p-2 mt-3" method="post" action="<?= "index.php?notes=" . $_GET['notes'] ?>">
                <div class="form-group col-5 col-md-3 mr-1">
                    <label for="email" class="mr-sm-2">Année Scolaire:</label>
                    <select name="annee" class="form-control" id="sel1">
                            <option value="2021/2022">2021/2022</option>
                    </select>
                 </div>
                
                <div class="form-group col-5 col-md-3 mr-1">
                    <label for="pwd" class="mr-sm-2">Semester:</label>
                    <select name="semester" class="form-control" id="sel1">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                    </select>
                 </div>
               <div class="col-3 col-md-2 button-valid">
                 <button type="submit" name="get_note" class="btn btn-block btn-primary">Submit</button>
               </div>
            </form>
            </div>
        </div>

        <?php
              if ( isset($_POST['get_note']) ) {
                      $annee = $_POST['annee'];
                      $semester = $_POST['semester'];

                //       $sql = "SELECT MODULE_LIBELLE , ELEMENT_LIBELLE , SEMESTRE , IF(NOTE IS NULL , 0 , note) as note 
                //           FROM module m INNER JOIN element_module e ON m.ID_MODULE=e.ID_MODULE LEFT JOIN note n 
                //           ON e.ID_ELEMENT_MODULE=n.ID_ELEMENT_MODULE WHERE m.SEMESTRE = '$semester' AND ID_ETUDIANT='{$_SESSION['idEt']}'";
                      $sql = "SELECT MODULE_LIBELLE , ELEMENT_LIBELLE , SEMESTRE , IF(NOTE IS NULL , 0 , note) as note
                       FROM etudiant e INNER JOIN filiere f ON e.ID_FILIERE=f.ID_FILIERE INNER JOIN contenir_1 c 
                       ON f.ID_FILIERE=c.ID_FILIERE LEFT JOIN module m ON c.ID_MODULE=m.ID_MODULE LEFT JOIN element_module el
                        ON m.ID_MODULE=el.ID_MODULE LEFT JOIN note n ON el.ID_ELEMENT_MODULE=n.ID_ELEMENT_MODULE 
                        WHERE m.SEMESTRE = '$semester' AND e.ID_ETUDIANT='{$_SESSION['idEt']}';";

                          

                        /* SELECT MODULE_LIBELLE , ELEMENT_LIBELLE , SEMESTRE , IF(NOTE IS NULL , 0 , note) as note
                         FROM module m INNER JOIN element_module e ON m.ID_MODULE=e.ID_MODULE LEFT JOIN note n
                          ON e.ID_ELEMENT_MODULE=n.ID_ELEMENT_MODULE WHERE m.SEMESTRE = 1 AND n.ID_ETUDIANT = 1; */


                     $res = $conex->query($sql);
                     if( $res->num_rows > 0 ) {  ?>
                <div class="single-pro-review-area mt-t-30 mg-b-15 note-section bg-test mt-4">
                        <table class="table table-bordered m-auto bg-light">
                                <thead>
                                        <tr>
                                                <th class="text-center">Unité</th>
                                                <th>Matiere</th>
                                                <th>CC</th>
                                                <th>Exam</th>
                                                <th>Moy</th>
                                                <th>Coef</th>
                                                <th>Moy x coef</th>
                                        </tr>
                                </thead>
                        <tbody>
                      
                       <?php
                           $module = "";
                           $note1 = 0;
                           $i = 0;
                           $note2 = 0;
                           while($data = $res->fetch_object()) {
                              
                           if ( strcmp(strtolower(trim($data->MODULE_LIBELLE)), strtolower(trim($module))) !== 0 )  {
                                   $module = $data->MODULE_LIBELLE;
                                   $note1 = $data->note;
                                   ?>
                                          <tr>
                                                <td rowspan="2" class="text-center" style="vertical-align : middle">
                                                   <?= $data->MODULE_LIBELLE ?>
                                                </td>
                                                <td><?= $data->ELEMENT_LIBELLE ?></td>
                                                <td>-</td>
                                                <td><?= $data->note == 0 ? "-" :  $data->note ?></td>
                                                <td><?= $data->note == 0 ? "-" :  $data->note  ?></td>
                                                <td>1</td>
                                                <td><?= $data->note == 0 ? "-" :  $data->note  ?></td>
                                          </tr>
                          <?php } else { 
                                  $module = $data->MODULE_LIBELLE;
                                  $note2 = $data->note; 
                                  ?>
                                         <tr>
                                               <td><?= $data->ELEMENT_LIBELLE ?></td>
                                                <td>-</td>
                                                <td><?= $data->note == 0 ? "-" :  $data->note  ?></td>
                                                <td><?= $data->note == 0 ? "-" :  $data->note  ?></td>
                                                <td>1</td>
                                                <td><?= $data->note == 0 ? "-" :  $data->note  ?></td>
                                          </tr>
                                          <tr>
                                                <td colspan="6" class="text-center">Moyen unité</td>
                                                <td><?= ($note1+$note2)/2 == 0 ? "-" : ($note1+$note2)/2 ; ?></td>
                                          </tr>
                        <?php  
                    $note1 = 0;
                    $note2 = 0;        
                }
                  

                        }
                           
                        }

                        

                        }
                       ?>

<!--                         
                      
                        <tr>
                                <td>SQL </td>
                                <td>14,00</td>
                                <td>16,00</td>
                                <td>15,30</td>
                                <td>50</td>
                                <td>150</td>
                        </tr>
                        <tr>
                                <td colspan="5" class="text-center">Moyen unité</td>
                                <td>14.33</td>
                        </tr> -->
                        </tbody>
                        </table>
                </div>
                  

 

