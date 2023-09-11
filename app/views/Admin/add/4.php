<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navigation.php';?>
<link
  href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
  rel="stylesheet"
  id="bootstrap-css"
/>


<main class="main-container">


<div class=" form_div">
  



        <div class="col-12 col-lg-9 ml-auto mr-auto mb-4 sld_top">
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
                class="multisteps-form__progress-btn js-active"
                type="button"
                title="Validation Info"
              >
                Validation Info
              </button>
            </div>
          </div>


          <div class="container emp-profile">

    <div class="row">
      <div class="col-md-4">
        <div class="profile-img">
          <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
            alt=""
          />
          <div class="file btn btn-lg btn-primary">
            Change Photo
            <input type="file" name="file" />
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="profile-head">
          <h5>Kshiti Ghelani</h5>
          <h6>Web Developer and Designer</h6>
          <p class="proile-rating">RANKINGS : <span>8/10</span></p>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="home-tab"
                data-toggle="tab"
                href="#home"
                role="tab"
                aria-controls="home"
                aria-selected="true"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="profile-tab"
                data-toggle="tab"
                href="#profile"
                role="tab"
                aria-controls="profile"
                aria-selected="false"
                >Timeline</a
              >
            </li>
          </ul>
        </div>
      </div>
      <!-- <div class="col-md-2">
        <input
          type="submit"
          class="profile-edit-btn"
          name="btnAddMore"
          value="Edit Profile"
        />
      </div> -->
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="profile-work">
          <p>WORK LINK</p>
          <a href="">Website Link</a><br />
          <a href="">Bootsnipp Profile</a><br />
          <a href="">Bootply Profile</a>
        </div>
      </div>
      <div class="col-md-8">
        <div class="tab-content profile-tab" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="home"
            role="tabpanel"
            aria-labelledby="home-tab"
          >
            <div class="row">
              <div class="col-md-6">
                <label>User Id</label>
              </div>
              <div class="col-md-6">
                <p>Kshiti123</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Name</label>
              </div>
              <div class="col-md-6">
                <p>Kshiti Ghelani</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Email</label>
              </div>
              <div class="col-md-6">
                <p>kshitighelani@gmail.com</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Phone</label>
              </div>
              <div class="col-md-6">
                <p>123 456 7890</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Profession</label>
              </div>
              <div class="col-md-6">
                <p>Web Developer and Designer</p>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="profile"
            role="tabpanel"
            aria-labelledby="profile-tab"
          >
            <div class="row">
              <div class="col-md-6">
                <label>Experience</label>
              </div>
              <div class="col-md-6">
                <p>Expert</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Hourly Rate</label>
              </div>
              <div class="col-md-6">
                <p>10$/hr</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Total Projects</label>
              </div>
              <div class="col-md-6">
                <p>230</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>English Level</label>
              </div>
              <div class="col-md-6">
                <p>Expert</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Availability</label>
              </div>
              <div class="col-md-6">
                <p>6 months</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label>Your Bio</label><br />
                <p>Your detail description</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row validat-div">
      <a class="btn btn-primary" href="http://localhost/hamzaHrms/public/admins/add/3">Previeus</a>
      <form  action="http://localhost/hamzaHrms/public/admins/add/4" method="POST">
      <input class="btn btn-primary" type="submit" name="Next" value="Validate"> 
      </form>
    </div>
</div>



















 </main>
</div>

<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/profile.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?>