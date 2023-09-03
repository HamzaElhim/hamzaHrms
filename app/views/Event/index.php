<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>
<div class="body_ctr">
  <?PHP echo flash_msg(); ?>

  <h1 class="type_title"><?PHP echo $data['title']?> Events</h1>
  <?php //echo flash_msg(); ?>
  <div class="flex <?PHP echo $_SESSION['role']=="RH" ? '' : 'hiden' ?>">
      <a href="<?PHP echo URLROOT.'events/add'; ?>" class="add_event btn">Add New Event</a>
      <a class="upcoming_btn btn <?php if($data['title']=='Upcoming')echo 'hiden';?>" href="<?PHP echo URLROOT.'events/upcoming'; ?>" >Upcoming Events</a>
  </div>
  <div class="scrole_div">
<?php foreach($data['events'] as $event){ ?>
  
  
<div class="event_container">

  <h1 class="event_title"><?php echo $event->title ?></h1>
  <div class="flex">
    <p class="event_info">To <?php echo '<strong>'.$event->branch.'</strong> in '.$event->location; ?> </p>
    <p class="event_info"><?PHP echo $event->date.' '.$event->time ?></p>
  </div>
  <a href="<?PHP echo URLROOT.'events/info/'.$event->event_id;?>" class="more_info" >more info</a>
</div>
<?php } ?>
</div>

</div>
<link rel="stylesheet" href="<?php echo URLROOT.'css/event/index.css';?>">
<?php require_once APPROOT.'views/inc/footer.php'; ?>