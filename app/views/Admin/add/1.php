<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navigation.php';?>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />


<main class="main-container">


<div class=" form_div">
  



        <div class="col-12 col-lg-10 ml-auto mr-auto mb-4">
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
                Additional Info
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
        <div class="col-12 col-lg-10 m-auto"> 

        <!-- <form class="multisteps-form__form"> -->
          <div
            class="multisteps-form__panel shadow p-4 rounded bg-white"
            data-animation="scaleIn"
          >
            <h3 class="multisteps-form__title">Your User Info</h3>
            <div class="multisteps-form__content">
              <div class="form-row mt-4">
                <div class="col-12 col-sm-6">
                  <input
                    class="multisteps-form__input form-control"
                    type="text"
                    placeholder="First Name"
                  />
                </div>
                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                  <input
                    class="multisteps-form__input form-control"
                    type="text"
                    placeholder="Last Name"
                  />
                </div>
              </div>
              <div class="form-row mt-4">
                <div class="col-12 col-sm-6">
                  <input
                    class="multisteps-form__input form-control"
                    type="text"
                    placeholder="Login"
                  />
                </div>
                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                  <input
                    class="multisteps-form__input form-control"
                    type="email"
                    placeholder="Email"
                  />
                </div>
              </div>
              <div class="form-row mt-4">
                <div class="col-12 col-sm-6">
                  <input
                    class="multisteps-form__input form-control"
                    type="password"
                    placeholder="Password"
                  />
                </div>
                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                  <input
                    class="multisteps-form__input form-control"
                    type="password"
                    placeholder="Repeat Password"
                  />
                </div>
              </div>
              <div class="button-row d-flex mt-4">
                <button
                  class="btn btn-primary ml-auto js-btn-next"
                  type="button"
                  title="Next"
                >
                  Next
                </button>
              </div>
            </div>
          </div>
        </div> -->









 </main>
</div>





<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/add.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?>