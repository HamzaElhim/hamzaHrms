<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>
<div class="body_ctr">
  <?PHP echo flash_msg() ?>
  <h1 class="title">Personal Information</h1>
  <form class="add_container" action="<?php echo URLROOT.'admins/add/1'; ?>" method="POST">
    <div>
      <label class="labels">Birth Date <span>*</span></label>
      <input type="date" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['birth_date'],$data['errors']['birth_date_err'])?>"
       placeholder="Birth Date" name="birth_date" value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['birth_date']) :  handel_error('value',$data['values']['birth_date'],$data['errors']['birth_date_err'])?>">
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['birth_date'],$data['errors']['birth_date_err'])?></p>
    </div>
<div>
 <fieldset class="<?php echo empty($data) ? '' :  handel_error('class',$data['values']['gender'],$data['errors']['gender_err'])?>">
  <legend class="labels_radio ">Gender </legend>
  <div class="radio_div">
    <div>                                            
          <input type="radio" name="gender" value="Male" <?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['gender'],'Male') :  handel_error('radio',$data['values']['gender'],$data['errors']['gender_err'],'Male' )?>>
          <label class="labels_radio">Male</label>
        </div>

        <div>
          <input type="radio" name="gender" value="Female" <?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['gender'],'Female') :  handel_error('radio',$data['values']['gender'],$data['errors']['gender_err'],'Female' )?>>
          <label class="labels_radio">Female</label>
        </div>                                                                     
                                                                                                                                                                  
  </div>  
 </fieldset>
 <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['gender'],$data['errors']['gender_err'])?></p>
 </div>



 <div>
 <fieldset class="<?php echo empty($data) ? '' :  handel_error('class',$data['values']['marital'],$data['errors']['marital_err'])?>">                                                                       
  <legend class="labels_radio">Marital Status  <span>*</span> </legend>
  <div class="radio_div">
    <div>
          <input type="radio" name="marital" value="maraid" <?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['marital'],'maraid') :  handel_error('radio',$data['values']['marital'],$data['errors']['marital_err'],'maraid')?>>
          <label class="labels_radio">Mariad</label>
        </div>
        <div>
          <input type="radio" name="marital" value="single" <?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['marital'],'single') :  handel_error('radio',$data['values']['marital'],$data['errors']['marital_err'],'single')?>>
          <label class="labels_radio">Single</label>
        </div>
  </div>  
 </fieldset>
 <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['marital'],$data['errors']['marital_err'])?></p>
 </div>

    <div>
      <label class="labels">Address <span>*</span></label>
      <input type="text" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['adress'],$data['errors']['adress_err'])?>" 
      placeholder="Address" name="adress" value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['adress']) :  handel_error('value',$data['values']['adress'],$data['errors']['adress_err'])?>">
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['adress'],$data['errors']['adress_err'])?></p>
    </div>

    <div>
      <label class="labels">Nationality <span>*</span></label>
      <input type="text" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['nationality'],$data['errors']['nationality_err'])?>" 
      placeholder="Nationality" name="nationality" value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['nationality']) :  handel_error('value',$data['values']['nationality'],$data['errors']['nationality_err'])?>">
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['nationality'],$data['errors']['nationality_err'])?></p>
    </div>


    <div>
      <label class="labels">Phone Number <span>*</span></label>
      <input type="text" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['phone_number'],$data['errors']['phone_number_err'])?>"
       placeholder="Phone Number" name="phone_number" value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['phone_number']) :  handel_error('value',$data['values']['phone_number'],$data['errors']['phone_number_err'])?>">
       <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['phone_number'],$data['errors']['phone_number_err'])?></p>
    </div>
    <div>
      <label class="labels">Emergency Number <span>*</span></label>
      <input type="text" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['emergency_number'],$data['errors']['emergency_number_err'])?>"
       placeholder="Emergency Number" name="emergency_number" value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['emergency_number']) :  handel_error('value',$data['values']['emergency_number'],$data['errors']['emergency_number_err'])?>">
       <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['emergency_number'],$data['errors']['emergency_number_err'])?></p>
    </div>
    <div>
      <label class="labels">Emergency Relationship <span>*</span></label>
      <input type="text" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['emergency_relationship'],$data['errors']['emergency_relationship_err'])?>"
       placeholder="Phone Relationship" name="emergency_relationship" value="<?php echo empty($data) ? session_display('personal_info',!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['emergency_relationship']) :  handel_error('value',$data['values']['emergency_relationship'],$data['errors']['emergency_relationship_err'])?>">
       <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['emergency_relationship'],$data['errors']['emergency_relationship_err'])?></p>
    </div>
    <input class="btn next_btn next_btn_first" type="submit" name="Next" value="<?php echo change_btn('next')?>">
    <!-- <a class="btn back_btn back_btn_2" href="http://localhost/hamzaHrms/public/admins/<?php echo change_btn('back',2)?>">&larr; Back</a> -->
  </form>


</div>
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/add.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?>