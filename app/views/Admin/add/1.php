<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navigation.php';?>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />


<main class="main-container">
  <?PHP flash_msg(); ?>


<div class=" form_div" <?php echo isset($_SESSION['edit']) ? 'style="margin-top:50px;"' : '' ?>>
  



        <div class="col-12 col-lg-9 ml-auto mr-auto mb-4 <?php echo isset($_SESSION['edit']) ? 'hiden' : '' ?>">
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
                Key Info
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
        <form class="col-12 col-lg-9 m-auto " action="<?PHP echo URLROOT.'admins/add/1'; ?>" method="POST"> 

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
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['birth_date'],$data['errors']['birth_date_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </span>
                        <input type="date" id="email4" class="form-control "
                        name="birth_date" value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['birth_date']) :  handel_error('value',$data['values']['birth_date'],$data['errors']['birth_date_err'])?>" >
                        </div>
                        <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['birth_date'],$data['errors']['birth_date_err'])?></p>
                        </div>


                        <div class="col-lg-3 col-xl-2 text-lg-right " >
                        <label  class="col-form-label">Gender</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['gender'],$data['errors']['gender_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-users"></i>
                        </span>
                        <select class="form-control" name="gender">
                        <option value="Male" <?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['gender'],'Male') :  handel_error('radio',$data['values']['gender'],$data['errors']['gender_err'],'Male' )?>>Male</option>
                        <option value="Female" <?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['gender'],'Female') :  handel_error('radio',$data['values']['gender'],$data['errors']['gender_err'],'Female' )?>>Female</option>
                        </select>
                        </div>
                        </div>
            </div>


            <div class="form-group row">
            <div class="col-lg-3 col-xl-2 text-lg-right " >
                        <label  class="col-form-label">Marital Status</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['marital'],$data['errors']['marital_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-users"></i>
                        </span>
                        <select  class="form-control" name="marital">
                        <option value="married" <?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['marital'],'married') :  handel_error('radio',$data['values']['marital'],$data['errors']['marital_err'],'married')?>>married</option>
                        <option value="single" <?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['marital'],'single') :  handel_error('radio',$data['values']['marital'],$data['errors']['marital_err'],'single')?>>Single</option>
                        </select>
                        </div>
                        </div>

                        <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label  class="col-form-label">Address</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['adress'],$data['errors']['adress_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                        </span>
                        <input type="text" name="adress"  class="form-control" placeholder="Address" value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['adress']) :  handel_error('value',$data['values']['adress'],$data['errors']['adress_err'])?>" >
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['adress'],$data['errors']['adress_err'])?></p>
                        </div>
               </div>


            <div class="form-group row">
            <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label for="email4" class="col-form-label">Number</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['phone_number'],$data['errors']['phone_number_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-phone" ></i>
                        </span>
                        <input type="tel" name="phone_number" id="email4" class="form-control" placeholder="Phone Number"  value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['phone_number']) :  handel_error('value',$data['values']['phone_number'],$data['errors']['phone_number_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['phone_number'],$data['errors']['phone_number_err'])?></p>
                        </div>


                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label  class="col-form-label">Nationality</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['nationality'],$data['errors']['nationality_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                        </span>
                        <input type="text" name="nationality"  class="form-control" placeholder="Nationality" value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['nationality']) :  handel_error('value',$data['values']['nationality'],$data['errors']['nationality_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['nationality'],$data['errors']['nationality_err'])?></p>
                        </div>

                        
          </div>

          <div class="form-group row">
            <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label for="email4" class="col-form-label">Emergency</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['emergency_number'],$data['errors']['emergency_number_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-phone"></i>
                        </span>
                        <input type="tel" name="emergency_number"  class="form-control" placeholder="Emergency Number" value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['emergency_number']) :  handel_error('value',$data['values']['emergency_number'],$data['errors']['emergency_number_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['emergency_number'],$data['errors']['emergency_number_err'])?></p>
                        </div>


                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label  class="col-form-label">Relationship</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['emergency_relationship'],$data['errors']['emergency_relationship_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                        </span>
                        <input type="text" name="emergency_relationship"  class="form-control" placeholder="Emergency Relationship" value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['emergency_relationship']) :  handel_error('value',$data['values']['emergency_relationship'],$data['errors']['emergency_relationship_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['emergency_relationship'],$data['errors']['emergency_relationship_err'])?></p>
                        </div>

                        
          </div>


        

              <div class="button-row d-flex mt-4">
              <a class="btn btn-primary  js-btn-next <?PHP echo isset($_SESSION['edit']) ? '' : 'hiden' ?>" style="margin-left: 40px;" href="http://localhost/hamzaHrms/public/admins/<?php echo change_btn('back',1)?>">Previeus</a>
                <button
                  class="btn btn-primary ml-auto js-btn-next"
                  type="submit"
                  title="Next"
                >
                  <?PHP echo change_btn('next') ?>
                </button>
              </div>
            </div>
          </div>
        </form>









 </main>
</div>





<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/add.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?>