<?php require_once APPROOT.'views/inc/header.php';?>
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/home/login.css';?>">
<form class="form" action="<?php echo URLROOT.'homes/index' ?>" method="POST">
    <label class="labels">email*</label>
    <input class="inputs <?php echo empty($data['email_err']) ? '' : 'err'?>" value="<?php echo empty($data['email_err']) ? $data['email'] : '';?>" type="email" placeholder="email" name="email" >
    <p class="form_err"><?php echo empty($data['email_err']) ? '' : '⛔ '.$data['email_err']?></p>
  </div>
  <div>
    <label class="labels">password*</label>
    <input class="inputs <?php echo empty($data['password_err']) ? '' : 'err'?>" type="password" placeholder="password" name="password" >
    <p class="form_err"><?php echo empty($data['password_err']) ? '' : '⛔ '.$data['password_err']?></p>
  </div>

    <input class="sbm_btn" type="submit" value="Login">

</form>
<?php require_once APPROOT.'views/inc/footer.php';?>
