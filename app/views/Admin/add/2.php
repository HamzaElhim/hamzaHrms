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
        <form class="col-12 col-lg-9 m-auto " action="<?PHP echo URLROOT.'admins/add/2'; ?>" method="POST"> 

        <!-- <form class="multisteps-form__form"> -->
          <div
            class="multisteps-form__panel shadow p-4 rounded bg-white"
            data-animation="scaleIn"
          >
            <h3 class="multisteps-form__title" style="margin-bottom: 32px;">Professional Info</h3>
  
            <div class="multisteps-form__content">
              
        
            <div class="form-group row">
                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label for="username4" class="col-form-label">Job Title</label>
                        </div>
                        
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['job_title'],$data['errors']['job_title_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-briefcase"></i>
                        </span>
                        <input type="text" name="job_title"  class="form-control" placeholder="Job Title" value="<?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['job_title']) :  handel_error('value',$data['values']['job_title'],$data['errors']['job_title_err'])?>" >
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['job_title'],$data['errors']['job_title_err'])?></p>
                        </div>
                        


                        <div class="col-lg-3 col-xl-2 text-lg-right " >
                        <label  class="col-form-label">Department</label>
                        </div>


                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['department'],$data['errors']['department_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-users"></i>
                        </span>
                        <select class="form-control" name="department">
                        <option value="GI" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['department'],'GI') :  handel_error('radio',$data['values']['department'],$data['errors']['department_err'],'GI' )?>>GI</option>
                        <option value="GE" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['department'],'GE') :  handel_error('radio',$data['values']['department'],$data['errors']['department_err'],'GE' )?>>GE</option>
                        <option value="GM" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['department'],'GM') :  handel_error('radio',$data['values']['department'],$data['errors']['department_err'],'GM' )?>>GM</option>
                        </select>
                        </div>
                        </div>
            </div>


            <div class="form-group row">
            <div class="col-lg-3 col-xl-2 text-lg-right " >
                        <label  class="col-form-label"> Status</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['employment_status'],$data['errors']['employment_status_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-users"></i>
                        </span>
                        <select  class="form-control" name="employment_status">
                        <option value="active" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['employment_status'],'active') :  handel_error('radio',$data['values']['employment_status'],$data['errors']['employment_status_err'],'maraid')?>>Active</option>
                        <option value="inactive" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['employment_status'],'inactive') :  handel_error('radio',$data['values']['employment_status'],$data['errors']['employment_status_err'],'single')?>>Inactive</option>
                        </select>
                        </div>
                        </div>

                        <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label  class="col-form-label">Certifications</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['certifications'],$data['errors']['certifications_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-certificate"></i>
                        </span>
                        <input type="text" name="certifications"  class="form-control" placeholder="certifications" value="<?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['certifications']) :  handel_error('value',$data['values']['certifications'],$data['errors']['certifications_err'])?>" >
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['certifications'],$data['errors']['certifications_err'])?></p>
                        </div>
               </div>


            <div class="form-group row">
            <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label for="email4" class="col-form-label">Salary</label>
                        </div>

                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['salary'],$data['errors']['salary_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-money" ></i>
                        </span>
                        <input type="number" name="salary"  class="form-control" placeholder="salary"  value="<?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['salary']) :  handel_error('value',$data['values']['salary'],$data['errors']['salary_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['salary'],$data['errors']['salary_err'])?></p>
                        </div>


                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label  class="col-form-label">Contract Type</label>
                        </div>
                        
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['contract_type'],$data['errors']['contract_type_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-id-card-o"></i>
                        </span>
                        <select class="form-control" id="contract_type" name="contract_type">
                        <option  value="cdd" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['contract_type'],'cdd') :  handel_error('radio',$data['values']['contract_type'],$data['errors']['contract_type_err'],'cdd' )?>>CDD</option>
                        <option  value="cdi" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['contract_type'],'cdi') :  handel_error('radio',$data['values']['contract_type'],$data['errors']['contract_type_err'],'cdi' )?>>CDI</option>
                        </select>
                        </div>
                        </div>

                        
          </div>

          <div class="form-group row cnt-group <?PHP if(isset($data['values']) && $data['values']['contract_type']=='cdi' )echo 'hiden';elseif(isset($_SESSION['professional_info']) && $_SESSION['professional_info']['contract_type']=='cdi')echo 'hiden' ?>">
            <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                        <label for="email4" class="col-form-label"> Start At</label>
                        </div>

                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['contract_start'],$data['errors']['contract_start_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </span>
                        <input type="date" id="email4" class="form-control "
                        name="contract_start" value="<?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['contract_start']) :  handel_error('value',$data['values']['contract_start'],$data['errors']['contract_start_err'])?>" >
                        </div>
                        <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['contract_start'],$data['errors']['contract_start_err'])?></p>
                        </div>


                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label  class="col-form-label"> Duration</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['values']['contract_duration'],$data['errors']['contract_duration_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                        </span>
                        <input type="number" name="contract_duration"  class="form-control" placeholder="Contract Duration (months)" value="<?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['contract_duration']) :  handel_error('value',$data['values']['contract_duration'],$data['errors']['contract_duration_err'])?>">
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['contract_duration'],$data['errors']['contract_duration_err'])?></p>
                        </div>

                        
          </div>


        

              <div class="button-row d-flex mt-4">
              <a class="btn btn-primary  js-btn-next" style="margin-left: 40px;" href="http://localhost/hamzaHrms/public/admins/<?php echo change_btn('back',1)?>">Previeus</a>
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