        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
<section id="Evenements">
	<div class="container pt-1 pb-10">
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
          <div class="owl-carousel-1col owl-nav-top" data-dots="true">
          
          <?php
          require("connexion.php");
          $r="select * from annonce where AUDITION='PUBLIQUE' order by ID_ANNONCE desc limit 3";
          $res=$conex->query($r);
              if($res->num_rows >0 ){
                  while($d=$res->fetch_assoc()){
                  ?>
                    <div class="item ">
                    <a href="detailAn.php?id=<?=$d['ID_ANNONCE']?>">
                        <div class="project mb-30 border-2px">
                          <?php if($d['IMAGE_ANNONCE']){?>
                          <div class="thumb">
                            <img class="img-fullwidth" style="object-fit: cover" height="400px" src="images/annonce/<?=$d['IMAGE_ANNONCE']?>">
                          </div>
                        <?php }else {?>
                          <div class="thumb">
                            <img class="img-fullwidth" style="object-fit: cover"  src="images/annonce/default.png">
                          </div>
                        <?php }?>
                        <div class="blog-date" style="background-color:#004C83;width:85px;height:85px">
                           <?php
                              $dat=explode("/",$d['DATE_PUB']);
                              // $m=DateTime ::createFromFormat('!m',$dat[1]);
                              // $month= $m->format('F');
                            ?>
                          <p style="margin-top:20px;color:white;" ><span class="blog-day" ></span> Neauvau </p>
                        </div>
                          <div class="project-details p-15 pt-5 pb-10">
                            
                            <ul class="list-inline  text-center m-0 p-10">
                              <li class="current-fund"><strong style="color:#004C83"><?=$d['TITRE']?> </strong> <br><b style="color :black ;font-size: 14px; ">Publié le <?=$d['DATE_PUB']?></b></li>
                            </ul>
                          </div>
                        </div>
                        </a>
                      </div>
                     
                    
                  <?php
                }
             }
             ?>      
          </div>
          </div>
        </div>
      </div>
    </section>
    <style>
          .blog-date {
              background: #B73448;
              border: 4px solid #fff;
              border-radius: 50%;
              bottom: 80px;
              color: #fff;
              height: 70px;
              left: 0;
              line-height: 15px;
              position: absolute;
              text-align: center;
              width: 70px;
          }
          .blog-date p {
              font-weight: 400;
              margin: 0;
              padding: 7px 10px;
              font-size: 16px;
              display: block;
              line-height: 20px;
          }
          .blog-date .blog-day {
              font-size: 14px;
          }
          </style>
    <!-- Section: Sevices -->

    <!-- Section: About -->
    <div class="header container-fluid p-0">
        <div class="progress-container">
          <div class="progress-bar" id="myBar"></div>
        </div>
      </div>
    <main>
        <div class="p-5 text-center font-weight-bold">
           <h1 class="display-4">ENSET-M</h1>
        </div>
        <div class="departements">
           <div class="container-fluid">
               <div class="text-center">
                   <p class="text-service position-relative">Ecole Normale Supérieure de l'Enseignement Technique</p>
               </div>
               <div class="row">
                   <div class="col-md-3 first departement-part p-0">
                      <div class="content d-flex flex-column h-100 align-items-center justify-content-center">
                          <h4 class="text-white">Environement</h4>
                          <p class="text-light text-center  w-75 text-center">Face à l’évolution technologique actuelle accompagnée d’une transformation digitale à l’échelle mondiale, le Maroc a défini ses grandes stratégies sectorielles dans différents domaines comme les industries automobile, énergétique, aéronautique, agroalimentaire, halieutique, logistique, technologies de l’Information etc.</p>
                      </div>
                   </div>
                   <div class="col-md-3 second departement-part p-0">
                       <div class="content d-flex flex-column h-100 align-items-center justify-content-center">
                         <h4 class="text-white">Professeurs</h4>
                         <p class="text-light text-center  w-75 text-center">Face à l’évolution technologique actuelle accompagnée d’une transformation digitale à l’échelle mondiale, le Maroc a défini ses grandes stratégies sectorielles dans différents domaines comme les industries automobile, énergétique, aéronautique, agroalimentaire, halieutique, logistique, technologies de l’Information etc.</p>
                       </div>
                   </div> 
                   <div class="col-md-3 third departement-part p-0">
                       <div class="content h-100 d-flex flex-column align-items-center justify-content-center">
                         <h4 class="text-white">Collaborations</h4>
                         <p class="text-light text-center w-75 text-center">Face à l’évolution technologique actuelle accompagnée d’une transformation digitale à l’échelle mondiale, le Maroc a défini ses grandes stratégies sectorielles dans différents domaines comme les industries automobile, énergétique, aéronautique, agroalimentaire, halieutique, logistique, technologies de l’Information etc.</p>
                       </div>
                   </div>
                   <div class="col-md-3 forth departement-part p-0">
                       <div class="content d-flex h-100 flex-column align-items-center justify-content-center">
                          <h4 class="text-white">Diplômes</h4>
                          <p class="text-light text-center  w-75 text-center">Face à l’évolution technologique actuelle accompagnée d’une transformation digitale à l’échelle mondiale, le Maroc a défini ses grandes stratégies sectorielles dans différents domaines comme les industries automobile, énergétique, aéronautique, agroalimentaire, halieutique, logistique, technologies de l’Information etc.</p>
                       </div>
                   </div>
               </div>
           </div>
        </div>

        <!-- TimeLine -->
        <div class="timeline-container">
            <h1 class="project-name">Diplôme : Ingénieur d'état</h1> 
            <div id="timeline">
          
                <div class="timeline-item">
                  <div class="timeline-icon">
                    <i class="fas fa fa-laptop" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content">
                    <h2>GLSID - Génie du Logiciel et des Systèmes Informatiques Distribués</h2>
                    <p>
                    Type : Formation Initiale <br>
                    Diplôme : Ingénieur d'état <br>
                    Département : Mathématiques et Informatique <br>
                    </p>
                    <span class="time-stamp">Lien d'inscription</span>
                  </div>
                </div>
          
                <div class="timeline-item">
                  <div class="timeline-icon">
                    <i class="fa fas fa-cloud" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content right">
                    <h2>II-BDCC - Ingénierie Informatique : Big Data et Cloud Computing</h2>
                    <p>
                    Type : Formation Initiale <br>
                    Diplôme : Ingénieur d'état <br>
                    Département : Mathématiques et Informatique <br>
                    </p>
                    <span class="time-stamp">Lien d'inscription</span>
                  </div>
                </div>
          
                <div class="timeline-item">
                  <div class="timeline-icon">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content">
                    <h2>SEER - Systèmes Electriques et Energies Renouvelables</h2>
                    <p>
                    Type : Formation Initiale <br>
                    Diplôme : Ingénieur d'état <br>
                    Département : Génie Electrique <br>
                    </p>
                    <span class="time-stamp">Lien d'inscription</span>
                  </div>
                </div>
          
                 <div class="timeline-item">
                  <div class="timeline-icon">
                    <i class="fas fa fa-bolt" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content right">
                    <h2>GECSI - Génie Electrique et Contrôle des Systèmes Industriels</h2>
                    <p>
                    Type : Formation Initiale <br>
                    Diplôme : Ingénieur d'état <br>
                    Département : Génie Electrique <br>
                  </p>
                  <span class="time-stamp">Lien d'inscription</span>
                  </div>
                </div>
          
              <div class="timeline-item">
                  <div class="timeline-icon">
                    <i class="fa fas fa-cog" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content">
                    <h2>GMSI - Génie Mécanique des Systèmes Industriels</h2>
                    <p>
                    Type : Formation Initiale <br>
                    Diplôme : Ingénieur d'état <br>
                    Département : Génie Mécanique <br>
                  </p>
                  <span class="time-stamp">Lien d'inscription</span>
                  </div>
            </div>
          
                 <div class="timeline-item right">
                  <div class="timeline-icon">
                    <i class="fa fas fa-industry" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content right">
                    <h2>GIL - Génie Industriel et Logistique</h2>
                    <p>
                    Type : Formation Initiale <br>
                    Diplôme : Ingénieur d'état <br>
                    Département : Génie Mécanique <br>
                    </p>
                    <span class="time-stamp">Lien d'inscription</span>
                  </div>
                </div>  
            </div>
        </div>  
        <!-- Contact Form -->
        <div class="contact">
        <div class="contact-form">
            <div class="first-container">
                <div class="info-container">
                    <div><img class="icon" />
                        <h3>Address</h3>
                        <p>Bd Hassan II, Mohammédia 28830</p>
                    </div>
                    <div> <img class="icon" />
                        <h3>Phone</h3>
                        <p>05233-22220</p>
                    </div>
                    <div><img class="icon" />
                        <h3>General Support</h3>
                        <p>contact-enset@example.com</p>
                    </div>
                </div>
            </div>
            <div class="second-container">
                <h2>Contact Us</h2>
                <form>
                    <div class="form-group">
                        <label for="name-input">nom comple*</label>
                        <input id="name-input" type="text" placeholder="First name" required="required" /><input type="text" placeholder="Last name" required="required" /></div>
                    <div class="form-group">
                        <label for="email-input">Votre email*</label>
                        <input id="email-input" type="text" placeholder="Eg. example@email.com" required="required" /></div>
                    <div class="form-group">
                        <label for="phone-input">Votre Telephone*</label>
                        <input id="phone-input" type="text" placeholder="Eg. +212 678543298" required="required" /></div>
                    <div class="form-group">
                        <label for="message-textarea">Votre Message</label>
                        <textarea id="message-textarea" placeholder="write a message"></textarea></div><button class="btn btn-primary">Send message</button>
                </form>
            </div>
        </div>    
        </div>  
        </main>