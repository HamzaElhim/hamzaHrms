<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>
<div class="body_ctr">

<div class="event_container">

  <h1 class="event_title"><?php echo $data['event']->title ?></h1>
  <p class="event_body"><?php echo $data['event']->description;?></p>
  <div class="flex">
    <p class="event_info">To <?php echo '<strong>'.$data['event']->branch.'</strong> in '.$data['event']->location; ?> </p>
    <p class="event_info"><?PHP echo $data['event']->date.' '.$data['event']->time ?></p>
  </div>
</div>





</div>
<link rel="stylesheet" href="<?php echo URLROOT.'css/event/index.css';?>">
<?php require_once APPROOT.'views/inc/footer.php'; ?>
