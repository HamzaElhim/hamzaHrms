<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>
<div class="body_ctr ctr_4">
  <!-- <div class="ctr_4"> -->

    <h1 class="title_4"><?PHP echo !isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['image'] ?></h1>
    <span>&nbsp;</span>
    <div class="info_ctr">
      <label class="info_label">First Name     :<?PHP echo !isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['first_name'] ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Last Name      :<?PHP echo !isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['last_name'] ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Email          :<?PHP echo !isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['email'] ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Position       :<?PHP echo !isset($_SESSION['more_info']) ? '' : $_SESSION['more_info']['role'] ?></label>
    </div>
    <h1 class="title_4">Personal Information</h1>
    <span>&nbsp;</span>
    <div class="info_ctr">
      <label class="info_label">Birth Date     :<?PHP echo !isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['birth_date'] ?></label>
    </div>                              
    <div class="info_ctr">
      <label class="info_label">Gender         :<?PHP echo !isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['gender'] ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Marital Status :<?PHP echo !isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['marital'] ?></label>
    </div>
    <div class="info_ctr">                                               
      <label class="info_label">Adress :<?PHP echo !isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['adress'] ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Nationality :<?PHP echo !isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['nationality'] ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Phone Number :<?PHP echo !isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['phone_number'] ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Emergency Number :<?PHP echo !isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['emergency_number'] ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Emergency Relationship :<?PHP echo!isset($_SESSION['personal_info']) ? '' : $_SESSION['personal_info']['emergency_relationship'] ?></label>
    </div>

    
    <h1 class="title_4">Professional Information</h1>
    <span>&nbsp;</span>
    <div class="info_ctr">
      <label class="info_label">Job Title :<?PHP echo !isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['job_title']?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Departmen :<?PHP echo !isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['department']?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Employment Status :<?PHP echo !isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['employment_status']?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Certifications :<?PHP echo !isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['certifications']?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Salary :<?PHP echo !isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['salary']?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Contract Type :<?PHP echo !isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['contract_type']?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Contract start at :<?PHP echo !isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['contract_start']?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Contract Duration :<?PHP echo !isset($_SESSION['professional_info']) ? '' : $_SESSION['professional_info']['contract_duration']?></label>
    </div>
    <a class="btn back_btn back_4" href="http://localhost/hamzaHrms/public/admins/add/3">&larr; Back</a>
    <form class="form_4" action="http://localhost/hamzaHrms/public/admins/add/4" method="POST">
    <input class="btn next_btn validat" type="submit" name="Next" value="Validate"> 
    </form>
  <!-- </div> -->
    
</div>
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/add.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?>