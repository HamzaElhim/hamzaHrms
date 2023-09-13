<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navigation.php';?>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />


<main class="main-container">
  <?PHP flash_msg(); ?>


<div class=" form_div"  style="margin-top:50px;">

        <!-- <div class="row"> -->


          <!-- this is for the from width -->
        <form class="col-12 col-lg-9 m-auto " action="<?php echo URLROOT.'events/add'; ?>" method="POST"> 

        <!-- <form class="multisteps-form__form"> -->
          <div
            class="multisteps-form__panel shadow p-4 rounded bg-white"
            data-animation="scaleIn"
            style="padding:40px !important;"
          >
  
            <div class="multisteps-form__content">
              
        

            <div class="form-group row" style="margin-bottom: 20px;">
                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label for="username4" class="col-form-label">Title</label>
                        </div>
                        <div class="col-lg-8 col-xl-10">
                        <div class="input-group class="inputs <?php echo empty($data) ? '' : handel_error('class',$data['v']['title'],$data['e']['title_err'])?> ">
                        <span class="input-group-addon">
                        <i class="fa fa-text-width"></i>
                        </span>
                        <input type="text" name="title"  class="form-control" placeholder="Title" value="<?php echo empty($data) ? '' : handel_error('value',$data['v']['title'],$data['e']['title_err'])?>">
                        </div>
                         
                      <p class="form_err"><?php echo empty($data) ? '' : handel_error('error',$data['v']['title'],$data['e']['title_err'])?></p>
                        </div>
                      
            </div>

            <div class="form-group row" style="margin-bottom: 20px;">
                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label for="username4" class="col-form-label">Description</label>
                        </div>
                        <div class="col-lg-8 col-xl-10">
                        <div class="input-group">
      
                         <textarea name="description" class="form-control <?php echo empty($data) ? '' : handel_error('class',$data['v']['description'],$data['e']['description_err'])?>" cols="80" rows="5" spellcheck="false" style="height: 126px"><?php  if(!empty($data)) echo handel_error('value',$data['v']['description'],$data['e']['description_err'])?></textarea>
                        </div>
                            <p class="form_err">    <?php echo empty($data) ? '' : handel_error('error',$data['v']['description'],$data['e']['description_err'])?></p> 
                        </div>
                      
            </div>


 


            <div class="form-group row" style="margin-bottom: 20px;">
                       <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                            <label for="email4" class="col-form-label">Date</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' : handel_error('class',$data['v']['date'],$data['e']['date_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </span>
                        <input type="date" id="email4" class="form-control "
                        name="date" placeholder="Date"       value="<?php echo empty($data) ? '' : handel_error('value',$data['v']['date'],$data['e']['date_err'])?>">
                        </div>
                        <p class="form_err">         <?php echo empty($data) ? '' : handel_error('error',$data['v']['date'],$data['e']['date_err'])?></p>
                        </div>


                        <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                            <label for="email4" class="col-form-label">Time</label>
                        </div>
                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                        <div class="input-group <?php echo empty($data) ? '' : handel_error('class',$data['v']['time'],$data['e']['time_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                        </span>
                        <input type="time" id="email4" class="form-control "
                        name="time" placeholder="Time"        value="<?php echo empty($data) ? '' : handel_error('value',$data['v']['time'],$data['e']['time_err'])?>">
                        </div>
                        <p class="form_err">             <?php echo empty($data) ? '' : handel_error('error',$data['v']['time'],$data['e']['time_err'])?></p>
                        </div>
        
                         
                        </div>

                        
          </div>

          <div class="form-group row" style="margin-bottom: 20px;">
      
                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label for="username4" class="col-form-label">Branch</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' :  handel_error('class',$data['v']['branch'],$data['e']['branch_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-users"></i>
                        </span>
                        <select class="form-control" name="branch">
                        <option value="ALL" <?php echo empty($data) ? ''  :  handel_error('radio',$data['v']['branch'],$data['e']['branch_err'],'ALL' )?>>All Departments</option>
                        <option value="GI" <?php echo empty($data) ? ''  :  handel_error('radio',$data['v']['branch'],$data['e']['branch_err'],'GI' )?>>Ginie Informatique</option>
                        <option value="GE" <?php echo empty($data) ? ''  :  handel_error('radio',$data['v']['branch'],$data['e']['branch_err'],'GE' )?>>Ginie Electrique</option>                       
                        <option value="GM" <?php echo empty($data) ? '' :  handel_error('radio',$data['v']['branch'],$data['e']['branch_err'],'GM' )?>>Ginie Mecanique</option>                       
                        </select>
                        <p class="form_err"> <?php echo empty($data) ? '' : handel_error('error',$data['v']['branch'],$data['e']['branch_err'])?></p>
                        </div>
                        </div>



                        <div class="col-lg-3 col-xl-2 text-lg-right">
                        <label  class="col-form-label">Location</label>
                        </div>
                        <div class="col-lg-8 col-xl-4">
                        <div class="input-group <?php echo empty($data) ? '' : handel_error('class',$data['v']['location'],$data['e']['location_err'])?>">
                        <span class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                        </span>
                        <input type="text" name="location"  class="form-control" placeholder="Emergency Relationship" value="<?php  if(!empty($data)) echo handel_error('value',$data['v']['location'],$data['e']['location_err'])?>" >
                        </div>
                         
      <p class="form_err"><?php echo empty($data) ? '' : handel_error('error',$data['v']['location'],$data['e']['location_err'])?></p>
                        </div>

                        
          </div>


        

              <div class="button-row d-flex mt-4">
                <button
                  class="btn btn-primary ml-auto js-btn-next"
                  type="submit"
                  title="Next"
                >
                  Add
                </button>
              </div>
            </div>
          </div>
        </form>









 </main>
</div>





<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/add.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?>