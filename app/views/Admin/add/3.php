<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navigation.php';?>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />


<main class="main-container">
<?PHP flash_msg(); ?>


<div class=" form_div"   <?php echo isset($_SESSION['edit']) ? 'style="margin-top:50px;"' : '' ?>>
  



        <div class="col-12 col-lg-9 ml-auto mr-auto mb-4  <?php echo isset($_SESSION['edit']) ? 'hiden' : '' ?> ">
            <div class="multisteps-form__progress">
              <butaton
                class="multisteps-form__progress-btn js-active"
                type="button"
                title="Personal Info"
              >
                Personal Info
              </butaton>
              <button
                class="multisteps-form__progress-btn js-active"
                type="button"
                title="Professional Info"
              >
                Professional Info
              </button>
              <button
                class="multisteps-form__progress-btn js-active"
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
        <form class="col-12 col-lg-9 m-auto " action="<?PHP echo URLROOT.'admins/add/3'; ?>" method="POST" enctype="multipart/form-data"> 

        <!-- <form class="multisteps-form__form"> -->
          <div
            class="multisteps-form__panel shadow p-4 rounded bg-white"
            data-animation="scaleIn"
          >
            <h3 class="multisteps-form__title" style="margin-bottom: 32px;">Key Info</h3>
  
            <div class="multisteps-form__content">
              
        
            <div class="form-group row">
            <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label for="email4" class="col-form-label">First Name</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['first_name'],$data['errors']['first_name_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-user" ></i>
                        </span>
                        <input type="text" name="first_name" id="email4" class="form-control" placeholder="First Name"  value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['first_name']) :  handel_error('value',$data['values']['first_name'],$data['errors']['first_name_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['first_name'],$data['errors']['first_name_err'])?></p>
                        </div>


                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label  class="col-form-label">Last Name</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['last_name'],$data['errors']['last_name_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                        </span>
                        <input type="text" name="last_name"  class="form-control" placeholder="Last Name" value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['last_name']) :  handel_error('value',$data['values']['last_name'],$data['errors']['last_name_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['last_name'],$data['errors']['last_name_err'])?></p>
                        </div>

                        
          </div>

          
            <div class="form-group row">
            <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label for="email4" class="col-form-label">Email</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['email'],$data['errors']['email_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-envelope" ></i>
                        </span>
                        <input type="email" name="email" id="email4" class="form-control" placeholder="Email"  value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['email']) :  handel_error('value',$data['values']['email'],$data['errors']['email_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['email'],$data['errors']['email_err'])?></p>
                        </div>


                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label  class="col-form-label">Password</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['password'],$data['errors']['password_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-lock"></i>
                        </span>
                        <input type="password" name="password"  class="form-control" placeholder="Password" value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['password']) :  handel_error('value',$data['values']['password'],$data['errors']['password_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['password'],$data['errors']['password_err'])?></p>
                        </div>

                        
          </div>


            <div class="form-group row">
            <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label for="email4" class="col-form-label">Position</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['role'],$data['errors']['role_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-briefcase" ></i>
                        </span>
                        <input type="text" name="role" id="email4" class="form-control" placeholder="Position"  value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['role']) :  handel_error('value',$data['values']['role'],$data['errors']['role_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['role'],$data['errors']['role_err'])?></p>
                        </div>


                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label  class="col-form-label">Confirme </label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['confirm_pass'],$data['errors']['confirm_pass_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-lock"></i>
                        </span>
                        <input type="password" name="confirm_pass"  class="form-control" placeholder="Confirme Password " value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['confirm_pass']) :  handel_error('value',$data['values']['confirm_pass'],$data['errors']['confirm_pass_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['confirm_pass'],$data['errors']['confirm_pass_err'])?></p>
                        </div>

                        
          </div>
            <div class="form-group row">
            <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label for="email4" class="col-form-label">Image</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
            
                        <input class="form-control" type="file"   name="image"
                        
                        />                       
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['image'],$data['errors']['image_err'])?></p>
                        </div>

                        
          </div>

        

              <div class="button-row d-flex mt-4">
              <a class="btn btn-primary  js-btn-next" style="margin-left: 40px;" href="http://localhost/hamzaHrms/public/admins/<?php echo change_btn('back',2)?>">Previeus</a>
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