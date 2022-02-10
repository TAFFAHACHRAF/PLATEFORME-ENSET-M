<br>


        <?php
            if(isset($_POST['ajouterNote'])) {
                // echo "<pre>";
                //     print_r($_POST);
                // echo "</pre>";  
                $cc_exam = $_POST['cc_exam'];
                $semester = $_POST['semester'];
                $element_module = $_POST['element_module'];
                $notes = $_POST['notes'];
                $id_etuds = $_POST['id_etud'];

                for ( $i=0 ; $i < count($id_etuds) ; $i++ ) {
                    $sqlReq = "INSERT INTO note VALUES('' , '{$id_etuds[$i]}' , '$element_module' , '{$notes[$i]}' , '$semester')";
                    $sep = $conex->query($sqlReq);
                }

        }
        ?>

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
        <div class="single-pro-review-area mt-t-30 mg-b-15 bg-test" style="border-radius:6px">
            <div class="container-fluid" style="border-radius:6px;">
            <h5 style="margin: 15px;">Ajouter Les notes : </h5>
            <hr />
            <form class="form bg-white border p-2 mt-3" method="post" action="">
               <?php
                   $sql = "SELECT DISTINCT f.ID_FILIERE,f.filiere_libelle FROM employee e INNER JOIN element_module em
                    ON e.ID_EMPLOYEE=em.ID_EMPLOYEE INNER JOIN module m ON em.ID_MODULE=m.ID_MODULE INNER JOIN contenir_1 c 
                    ON m.ID_MODULE=c.ID_MODULE INNER JOIN filiere f ON c.ID_FILIERE=f.ID_FILIERE WHERE e.ID_EMPLOYEE={$_SESSION['idemp']}";

                   $req=$conex->query($sql);
               ?>
               <div class="form-group col-5 col-md-3 mr-1">
                    <label for="pwd" class="mr-sm-2">Class:</label>
                    <select name="filiere" class="form-control" id="sel1">
                        <?php
                            while($dt = $req->fetch_assoc()) { ?>
                                <option value="<?= $dt['ID_FILIERE'] ?>"><?= $dt['filiere_libelle'] ?></option>
                        <?php   }
                        ?>
                    </select>
                 </div>
            
                <div class="form-group col-5 col-md-2 mr-1">
                    <label for="pwd" class="mr-sm-2">Semester:</label>
                    <select name="semester" class="form-control" id="sel1">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                    </select>
                 </div>
                 <div class="form-group col-5 col-md-3 mr-1">
                    <label for="pwd" class="mr-sm-2">Type:</label>
                    <select name="cc_exam" class="form-control" id="sel1">
                            <option value="cc">CC</option>
                            <option value="exam_final">Exam Final</option>
                    </select>
                 </div>
               <div class="col-3 col-md-2 button-valid">
                 <button type="submit" name="get_note" class="btn btn-block btn-primary">Submit</button>
               </div>
            </form>
            </div>
            <?php
               if( isset($_POST['get_note'])) {
                   $filiere = $_POST['filiere'];
                   $semester = $_POST['filiere'];
                   $cc_exam = $_POST['cc_exam'];

                   $req = "SELECT * FROM etudiant e INNER JOIN filiere f ON e.ID_FILIERE=f.ID_FILIERE
                           WHERE f.ID_FILIERE='$filiere'";
                    $rep = $conex->query($req); ?>
                    <div class="container" style="padding-left: 31px !important; width: 100%">
                        <form class="form" method="POST" action="index.php?gestionNotes=true">
                            <table class="table table-bordered ">
                                <thead>
                                <tr>
                                    <th>étudiant</th>
                                    <th>Matiére</th>
                                    <th>Note</th>
                                    <th>filiere</th>
                                </tr>
                                </thead>
                                
                                <tbody>
                <?php    while($dt = $rep->fetch_assoc()) {  ?>
                    <tr>
                            <td><?= $dt['NOM'] . " " . $dt['PRENOM']; ?></td>
                            <?php
                                  $sql2 = "SELECT ID_ELEMENT_MODULE , ELEMENT_LIBELLE FROM Employee e INNER JOIN
                                           element_module em ON e.ID_EMPLOYEE=em.ID_EMPLOYEE
                                           WHERE e.ID_EMPLOYEE='{$_SESSION['idemp']}'";

                                   $rep2 = $conex->query($sql2);
                                   $data2 = $rep2->fetch_assoc();
                            ?>
                            <input type="hidden" name="id_etud[]"   value="<?= $dt['ID_ETUDIANT'] ?>" />
                            <input type="hidden" name="cc_exam"   value="<?= $cc_exam ?>" />
                            <input type="hidden" name="semester"   value="<?= $semester ?>" />
                            <input type="hidden" name="element_module" value="<?= $data2['ID_ELEMENT_MODULE'] ?>" />
                            <td><?= $data2['ELEMENT_LIBELLE'] ?></td>
                            <td>
                            <div class="form-group" style="margin-bottom: 0px;">
                                <input type="text" name="notes[]" class="form-control" id="exampleInputEmail1" placeholder="Note..." aria-describedby="emailHelp">
                            </div>
                            </td>
                            <td><?= $dt['FILIERE_LIBELLE']; ?></td>
                        </tr>
                   <?php } ?>
                   </tbody>
                       </table>
                       <button type="submit" name="ajouterNote" class="btn btn-block btn-success">Ajouter</button>
                  </form>
                   </div>
              </div>
              
             
             <?php   }
            ?>
          
                   
                 

 

