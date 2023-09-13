<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/user_nav.php';?>
<script defer src="<?PHP echo URLROOT.'js/profile.js' ?>"></script>
<link
  href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
  rel="stylesheet"
  id="bootstrap-css"
/>
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/dashboard.css'; ?>">


<main class="main-container" >
  



          <div class="container emp-profile" style="padding:60px !important;margin-top:20px !important";>

    <div class="row">
      <div class="col-md-4">
        <div class="profile-img">
        <img  src="/hamzaHrms/app/controleres/images/<?PHP echo $data['more_info']['image']; ?>"  alt="<?PHP $data['more_info']['last_name']. ' image';?>">
        </div>
      </div>
      <div class="col-md-8">
        <div class="profile-head">
          <h5><?PHP echo  ucfirst($data['more_info']['first_name']).' '.ucfirst($data['more_info']['last_name']) ?></h5>
          <h6><?PHP echo  ucwords($data['professional_info']['job_title'])?></h6>
          <p class="proile-rating">DEPARTMENT : <span><?PHP echo  ucfirst($data['professional_info']['department'])?></span></p>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="key-tab"
                data-toggle="tab"
                href="#home"
                role="tab"
                aria-controls="home"
                aria-selected="true"
                >Key Info</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link "
                id="pro-tab"
                data-toggle="tab"
                href="#profile"
                role="tab"
                aria-controls="profile"
                aria-selected="false"
                >Professional Info</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link "
                id="per-tab"
                data-toggle="tab"
                href="#profile"
                role="tab"
                aria-controls="profile"
                aria-selected="false"
                >Personal Info</a
              >
            </li>
          </ul>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="profile-work">
          <p>EMERGENCY</p>
          <a href="#">Phone :  <?PHP echo  $data['personal_info']['emergency_number'] ?> </a><br />
          <a href="#">Relationship : <?PHP echo  $data['personal_info']['emergency_relationship'] ?></a><br />
          <div class="<?PHP echo $$data['professional_info']['contract_type']=='cdi' ? 'hiden' : ''?>">
            <p>CONTRACT</p>
            <a href="#">Start At : <?PHP echo  $data['professional_info']['contract_start']?></a></br>
            <a href="#">Duration : <?PHP echo  $data['professional_info']['contract_duration']?></a></br>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="tab-content profile-tab" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="key-tab-div"
            role="tabpanel"
            aria-labelledby="home-tab"
          >
            <div class="row">
              <div class="col-md-6">
                <label>First Name</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  ucfirst($data['more_info']['first_name'])?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Last Name</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  ucfirst($data['more_info']['last_name']) ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Email</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  $data['more_info']['email'] ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Phone</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  $data['personal_info']['phone_number'] ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Position</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  $data['more_info']['role'] ?></p>
              </div>
            </div>
          </div>


          <div
            class="tab-pane fade show"
            id="pro-tab-div"
            role="tabpanel"
            aria-labelledby="home-tab"
          >
            <div class="row">
              <div class="col-md-6">
                <label>Employment Status</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  ucfirst($data['professional_info']['employment_status'])?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Certifications</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  ucwords($data['professional_info']['certifications'])?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Salary</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  $data['professional_info']['salary']?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Contract Type</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  strtoupper($data['professional_info']['contract_type'])?></p>
              </div>
            </div>
            <div class="row" style="height: 40px;">&nbsp;</div>
          </div>


          <div
            class="tab-pane fade show "
            id="per-tab-div"
            role="tabpanel"
            aria-labelledby="home-tab"
          >
            <div class="row">
              <div class="col-md-6">
                <label>Birth Date</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  $data['personal_info']['birth_date'] ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Gender</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  $data['personal_info']['gender'] ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Marital Status</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  $data['personal_info']['marital'] ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Adress</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  $data['personal_info']['adress'] ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Nationality</label>
              </div>
              <div class="col-md-6">
                <p><?PHP echo  $data['personal_info']['nationality'] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>









 </main>
</div>

<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/profile.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?> 




