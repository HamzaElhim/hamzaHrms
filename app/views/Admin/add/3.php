<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>
<div class="body_ctr">
<?PHP echo flash_msg() ?>
  <h1 class="title">More Information</h1>
  <form class="add_container" action="<?php echo URLROOT.'admins/add/3'; ?>" method="POST">
    <div>
      <label class="labels">First Name</label>
      <input type="text" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['first_name'],$data['errors']['first_name_err'])?>" 
      placeholder="First Name" name="first_name" value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['first_name']) :  handel_error('value',$data['values']['first_name'],$data['errors']['first_name_err'])?>">
       <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['first_name'],$data['errors']['first_name_err'])?></p>
    </div>
    <div>
      <label class="labels">Last Name <span>*</span></label>
      <input type="text" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['last_name'],$data['errors']['last_name_err'])?>"
       placeholder="Last Name" name="last_name" value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['last_name']) :  handel_error('value',$data['values']['last_name'],$data['errors']['last_name_err'])?>">
        <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['last_name'],$data['errors']['last_name_err'])?></p>
    </div>
    <div>
      <label class="labels">Email <span>*</span></label>
      <input type="email" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['email'],$data['errors']['email_err'])?>" 
      placeholder="Email" name="email" value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['email']) :  handel_error('value',$data['values']['email'],$data['errors']['email_err'])?>">
       <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['email'],$data['errors']['email_err'])?></p>
    </div>
    <div>
      <label class="labels">Password <span>*</span></label>
      <input type="password" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['password'],$data['errors']['password_err'])?>"
       placeholder="Password" name="password" value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['password']) :  handel_error('value',$data['values']['password'],$data['errors']['password_err'])?>">
        <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['password'],$data['errors']['password_err'])?></p>
    </div>
    <div>
      <label class="labels">Position <span>*</span></label>
      <input type="text" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['role'],$data['errors']['role_err'])?>"
       placeholder="Position" name="role" value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['role']) :  handel_error('value',$data['values']['role'],$data['errors']['role_err'])?>">
        <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['role'],$data['errors']['role_err'])?></p>
    </div>
    <div>
      <label class="labels">Confirme Password <span>*</span></label>
      <input type="password" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['confirm_pass'],$data['errors']['confirm_pass_err'])?>" 
      placeholder="Confirme Password" name="confirm_pass" value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['confirm_pass']) :  handel_error('value',$data['values']['confirm_pass'],$data['errors']['confirm_pass_err'])?>">
       <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['confirm_pass'],$data['errors']['confirm_pass_err'])?></p>
    </div>

    <div class="img_div">
      <label class="labels img">Image <span>*</span></label>
      <input type="file" class="inputs img_input <?php echo empty($data) ? '' :  handel_error('class',$data['values']['image'],$data['errors']['image_err'])?>"  
      name="image" value="<?php echo empty($data) ? session_display('more_info',!isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['image']) :  handel_error('value',$data['values']['image'],$data['errors']['image_err'])?>">
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['image'],$data['errors']['image_err'])?></p>
    </div>
    <span>&nbsp;</span>

    <a class="btn back_btn back_btn_2" href="http://localhost/hamzaHrms/public/admins/<?php echo change_btn('back',2)?>">&larr; Back</a>
    <input class="btn next_btn next_btn_2" type="submit" name="Next" value="<?php echo change_btn('next')?>"> 
  </form>

</div>
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/add.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?>