<?php require_once APPROOT.'views/inc/header.php';?>
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/home/login.css';?>">
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/general.css';?>">



<?PHP echo flash_msg()?>
<div class="preloader" style="position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; z-index: 100000; backface-visibility: hidden; background: rgb(255, 255, 255); display: none;">
<div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
  z-index: 999999">
<img src="img/loader.gif" style="width: 40px; display: none;" alt="loading...">
</div>
</div>
<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeInDown;">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
<div class="row">
<div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
  <div class="login_logo login_border_radius1">
    <h3 class="text-center" style="margin: 0; padding: 20px;">
      <span class="text-white "> 
        S.A.R.B
      </span>
    </h3>
  </div>
<div class="bg-white login_content login_border_radius">

<form action="<?php echo URLROOT.'homes/index' ?>" id="login_validator" method="post" class="login_validator bv-form" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
<div class="form-group">
<label for="email" class="col-form-label"> E-mail</label>
<div class="input-group">
<span class="input-group-addon input_email"><i class="fa fa-envelope text-primary"></i></span>
<input type="text" class="form-control  form-control-md <?php echo empty($data['email_err']) ? '' : 'err'?>" value="<?php echo empty($data['email_err']) ? $data['email'] : '';?>" type="email" placeholder="..@example.com" name="email"" id="email" name="username" placeholder="E-mail" data-bv-field="username">
</div>
<p class="form_err"><?php echo empty($data['email_err']) ? '' : '<i class="fa fa-exclamation-circle" style="color:red;font-size:17px;"></i>  '.$data['email_err']?></p>


<div class="form-group">
<label for="password" class="col-form-label">Password</label>
<div class="input-group">
<span class="input-group-addon addon_password"><i class="fa fa-lock text-primary"></i></span>
<input type="password" class="form-control form-control-md <?php echo empty($data['password_err']) ? '' : 'err'?>" id="password" name="password" placeholder="%.6.d.H" data-bv-field="password">
</div>
<p class="form_err"><?php echo empty($data['password_err']) ? '' : '<i class="fa fa-exclamation-circle" style="color:red;font-size:17px;"></i>  '.$data['password_err']?></p>
<div class="form-group">
<div class="row">
<div class="col-lg-12" style="margin-top: 32px;">
<input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php require_once APPROOT.'views/inc/footer.php';?>

<style>
  .form_err {
  margin-bottom: 0px !important;
  font-size: 14px !important;
  margin-top: 5px !important;
  color: red !important;
}
</style>