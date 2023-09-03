<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>
<div class="body_ctr">
  <h1>hello m <?PHP echo $data['admin']->last_name.' your job is '.$data['admin']->role; ?></h1>
  <a href="<?php echo URLROOT.'admins/logout'; ?>">logout</a>
</div>
<?php require_once APPROOT.'views/inc/footer.php';?>