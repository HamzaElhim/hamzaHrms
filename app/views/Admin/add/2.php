<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>

<div class="body_ctr">
<?PHP echo flash_msg() ?>
  <h1 class="title">Professional Information</h1>
  <form class="add_container" action="<?php echo URLROOT.'admins/add/2'; ?>" method="POST">
    <div>
      <label class="labels">Job Title <span>*</span></label>
      <input type="text" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['job_title'],$data['errors']['job_title_err'])?>"
       placeholder="Job Title" name="job_title" value="<?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['job_title']) :  handel_error('value',$data['values']['job_title'],$data['errors']['job_title_err'])?>"
      >
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['job_title'],$data['errors']['job_title_err'])?></p>
    </div>


    <div>
       <fieldset class="<?php echo empty($data) ? '' :  handel_error('class',$data['values']['department'],$data['errors']['department_err'])?>">
  <legend class="labels_radio">Departmen <span>*</span> </legend>
  <div class="radio_div">
    <div>                                                                                               
          <input type="radio" name="department" value="GI" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['department'],'GI') :  handel_error('radio',$data['values']['department'],$data['errors']['department_err'],'GI')?>>
          <label class="labels_radio">GI</label>
        </div>

        <div>
          <input type="radio" name="department" value="GE" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['department'],'GE') :  handel_error('radio',$data['values']['department'],$data['errors']['department_err'],'GE')?>>
          <label class="labels_radio">GE</label>
        </div>

        <div>
          <input type="radio" name="department" value="GM" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['department'],'GM') :  handel_error('radio',$data['values']['department'],$data['errors']['department_err'],'GM')?>>
          <label class="labels_radio">GM</label>
        </div>
  </div>  
 </fieldset>
 <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['department'],$data['errors']['department_err'])?></p>
    </div>


 <div>
   <fieldset class="<?php echo empty($data) ? '' :  handel_error('class',$data['values']['employment_status'],$data['errors']['employment_status_err'])?>"> 
  <legend class="labels_radio">Employment Status  <span>*</span> </legend>
  <div class="radio_div">
    <div>
          <input type="radio" name="employment_status" value="active" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['employment_status'],'active') :  handel_error('radio',$data['values']['employment_status'],$data['errors']['employment_status_err'],'active')?>>
          <label class="labels_radio">Active</label>
        </div>

        <div>
          <input type="radio" name="employment_status" value="inactive" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['employment_status'],'inactive') :  handel_error('radio',$data['values']['employment_status'],$data['errors']['employment_status_err'],'inactive')?>> 
          <label class="labels_radio">InActive</label>
        </div>
  </div>  
 </fieldset>
 <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['employment_status'],$data['errors']['employment_status_err'])?></p>
 </div>



    <div>
      <label class="labels">Certifications <span>*</span></label>
      <input type="text" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['certifications'],$data['errors']['certifications_err'])?>"
       placeholder="Certifications" name="certifications" value="<?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['certifications']) :  handel_error('value',$data['values']['certifications'],$data['errors']['certifications_err'])?>"
      >
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['certifications'],$data['errors']['certifications_err'])?></p>
    </div>



    <div>
      <label class="labels">Salary <span>*</span></label>
      <input type="number" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['salary'],$data['errors']['salary_err'])?>" 
      placeholder="Salary" name="salary" min="0" value="<?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['salary']) :  handel_error('value',$data['values']['salary'],$data['errors']['salary_err'])?>">
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['salary'],$data['errors']['salary_err'])?></p>
    </div>

    <div>
            <fieldset class="<?php echo empty($data) ? '' :  handel_error('class',$data['values']['contract_type'],$data['errors']['contract_type_err'])?>">
    <legend class="labels_radio">Contract Type  <span>*</span> </legend>
    <div class="radio_div">
      <div>
            <input class="cdd" type="radio" name="contract_type" value="cdd" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['contract_type'],'cdd') :  handel_error('radio',$data['values']['contract_type'],$data['errors']['contract_type_err'],'cdd')?>>
            <label class="labels_radio">CDD</label>
          </div>

          <div>
            <input class="cdi" type="radio" name="contract_type" value="cdi" <?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['contract_type'],'cdi') :  handel_error('radio',$data['values']['contract_type'],$data['errors']['contract_type_err'],'cdi')?>>
            <label class="labels_radio">CDI</label>
          </div>
    </div>  
  </fieldset>
  <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['contract_type'],$data['errors']['contract_type_err'])?></p>
    </div>


    <div class="contract hidden">
      <label class="labels">Contract Start at <span>*</span></label>
      <input type="date" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['contract_start'],$data['errors']['contract_start_err'])?>" 
       name="contract_start"  value="<?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['contract_start']) :  handel_error('value',$data['values']['contract_start'],$data['errors']['contract_start_err'])?>">
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['contract_start'],$data['errors']['contract_start_err'])?></p>
    </div>
    <div class="contract hidden">
      <label class="labels">Contract duration (months)<span>*</span></label>
      <input type="number" class="inputs <?php echo empty($data) ? '' :  handel_error('class',$data['values']['contract_duration'],$data['errors']['contract_duration_err'])?>" 
       name="contract_duration" min="0" max="40"  value="<?php echo empty($data) ? session_display('professional_info',!isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['contract_duration']) :  handel_error('value',$data['values']['contract_duration'],$data['errors']['contract_duration_err'])?>">
      <p class="form_err"><?php echo empty($data) ? '' :  handel_error('error',$data['values']['contract_duration'],$data['errors']['contract_duration_err'])?></p>
    </div>
  

    <a class="btn back_btn back_btn_2" href="http://localhost/hamzaHrms/public/admins/<?php echo change_btn('back',1)?>">&larr; Back</a>
    <input class="btn next_btn next_btn_2" type="submit" name="Next" value="<?php echo change_btn('next')?>"> 
 
  </form>

</div>
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/add.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?>