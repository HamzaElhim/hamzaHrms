<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navigation.php';?>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />


<main class="main-container">


<div class=" form_div">
  



        <div class="col-12 col-lg-9 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button
                class="multisteps-form__progress-btn js-active"
                type="button"
                title="Personal Info"
              >
                Personal Info
              </button>
              <button
                class="multisteps-form__progress-btn "
                type="button"
                title="Professional Info"
              >
                Professional Info
              </button>
              <button
                class="multisteps-form__progress-btn "
                type="button"
                title="Additional Info"
              >
                Additional Info
              </button>
              <button
                class="multisteps-form__progress-btn "
                type="button"
                title="Validation Info"
              >
                Validation Info
              </button>
            </div>
          </div>

        <!-- <div class="row"> -->


          <!-- this is for the from width -->
        <form class="col-12 col-lg-9 m-auto "> 

        <!-- <form class="multisteps-form__form"> -->
          <div
            class="multisteps-form__panel shadow p-4 rounded bg-white"
            data-animation="scaleIn"
          >
            <h3 class="multisteps-form__title" style="margin-bottom: 32px;">Personal Info</h3>
  
            <div class="multisteps-form__content">
              
        
            <div class="form-group row">
                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label for="username4" class="col-form-label">Birth DAte</label>
                        </div>
                        
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </span>
                        <input type="date" id="email4" class="form-control" placeholder="E-mail">
                        </div>
                        
                        </div>


                        <div class="col-lg-3 col-xl-2 text-lg-right " ">
                        <label  class="col-form-label">Gender</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-users"></i>
                        </span>
                        <select class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        </select>
                        </div>
                        </div>
            </div>


            <div class="form-group row">
            <div class="col-lg-3 col-xl-2 text-lg-right " >
                        <label  class="col-form-label">Marital Status</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-users"></i>
                        </span>
                        <select  class="form-control">
                        <option value="mariad">Mariad</option>
                        <option value="single">Single</option>
                        </select>
                        </div>
                        </div>

                        <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label  class="col-form-label">Address</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                        </span>
                        <input type="text"  class="form-control" placeholder="Address">
                        </div>
                        </div>
               </div>


            <div class="form-group row">
            <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label for="email4" class="col-form-label">Number</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-phone" ></i>
                        </span>
                        <input type="number" id="email4" class="form-control" placeholder="Phone Number">
                        </div>
                        </div>


                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label  class="col-form-label">Nationality</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                        </span>
                        <input type="text"  class="form-control" placeholder="Nationality">
                        </div>
                        </div>

                        
          </div>

          <div class="form-group row">
            <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label for="email4" class="col-form-label">Emergency</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-phone"></i>
                        </span>
                        <input type="number" id="email4" class="form-control" placeholder="Emergency Number">
                        </div>
                        </div>


                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label  class="col-form-label">Relationship</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                        </span>
                        <input type="text"  class="form-control" placeholder="Emergency Relationship">
                        </div>
                        </div>

                        
          </div>


        

              <div class="button-row d-flex mt-4">
                <button
                  class="btn btn-primary ml-auto js-btn-next"
                  type="submit"
                  title="Next"
                >
                  Next
                </button>
              </div>
            </div>
          </div>
        </form>









 </main>
</div>





<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/add.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?>