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
                                            <!-- <div class="row"> -->
                                                
                                                <form class=" form d-flex flex-columns bg-white col-12 border p-2 mt-3 form_submit" method="post">
                                                        <div class="form-group col-5 col-md-5 mr-1">
                                                            <label for="pwd" class="mr-sm-2">Chercher un livre:</label>
                                                            <div class="form-group">
                                                                <input name="pass"
                                                                       type="text" 
                                                                       class="form-control livre_nom" 
                                                                       required 
                                                                       placeholder="ex: SQL/HTML/CSS..."
                                                                >
                                                            </div>
                                                        </div>
                                                    <div class="col-3 col-md-2 button-valid">
                                                        <button type="submit" name="search-absent" class="btn btn-block btn-primary">chercher</button>
                                                    </div>
                                                    <div class="col-12 col-md-12">

                                                    </div>
                                                </form> 

                                                <div class="container-fluid mt-5">
                                                    <div class="row livres">
                                                        
                                                    </div>
                                                </div>

                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </ul>
               
                </div>
        </div>

         <!-- google books api -->
         <script src="./google_books_api.js" defer></script>