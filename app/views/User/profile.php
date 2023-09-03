<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>
<div class="body_ctr ctr_4">
  <!-- <div class="ctr_4"> -->

    <h1 class="title_4">More Information</h1>
    
    <!-- <a class="employe_link edit_link " href="<?php //echo URLROOT.'admins/add/3';?>">Edit</a> -->
    <span>&nbsp;</span>
    <div class="info_ctr">
      <label class="info_label">First Name     :<?PHP echo  $data['more_info']->first_name ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Last Name      :<?PHP echo  $data['more_info']->last_name ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Email          :<?PHP echo  $data['more_info']->email ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Position       :<?PHP echo  $data['more_info']->role ?></label>
    </div>
    <h1 class="title_4">Personal Information</h1>
    <!-- <a class="employe_link edit_link " href="<?php //echo URLROOT.'admins/add/1';?>">Edit</a> -->
    <span>&nbsp;</span>
    <div class="info_ctr">
      <label class="info_label">Birth Date     :<?PHP echo  $data['personal_info']->birth_date  ?></label>
    </div>                              
    <div class="info_ctr">
      <label class="info_label">Gender         :<?PHP echo  $data['personal_info']->gender  ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Marital Status :<?PHP echo  $data['personal_info']->marital  ?></label>
    </div>
    <div class="info_ctr">                                               
      <label class="info_label">Adress :<?PHP echo  $data['personal_info']->adress  ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Nationality :<?PHP echo  $data['personal_info']->nationality  ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Phone Number :<?PHP echo  $data['personal_info']->phone_number ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Emergency Number :<?PHP echo  $data['personal_info']->emergency_number  ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Emergency Relationship :<?PHP echo $data['personal_info']->emergency_relationship  ?></label>
    </div>

    
    <h1 class="title_4">Professional Information</h1>
    <!-- <a class="employe_link edit_link " href="<?php //echo URLROOT.'admins/add/2';?>">Edit</a> -->
    <span>&nbsp;</span>
    <div class="info_ctr">
      <label class="info_label">Job Title :<?PHP echo  $data['professional_info']->job_title ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Departmen :<?PHP echo  $data['professional_info']->department ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Employment Status :<?PHP echo  $data['professional_info']->employment_status ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Certifications :<?PHP echo  $data['professional_info']->certifications?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Salary :<?PHP echo  $data['professional_info']->salary?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Contract Type :<?PHP echo  $data['professional_info']->contract_type ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Contract start at :<?PHP echo  $data['professional_info']->contract_start ?></label>
    </div>
    <div class="info_ctr">
      <label class="info_label">Contract Duration :<?PHP echo  $data['professional_info']->contract_duration  ?></label>
    </div>

  <!-- </div> -->
    
</div>
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/add.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?>