<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>
<div class="body_ctr">
  <h1>hello m <?PHP echo $data['user']->last_name.' your job is '.$data['user']->role; ?></h1>
  <a href="<?php echo URLROOT.'users/logout'; ?>">logout</a>
</div>
<?php require_once APPROOT.'views/inc/footer.php';?>