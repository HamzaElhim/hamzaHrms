<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/'.($_SESSION['role']=='RH' ? 'navigation' : 'user_nav').'.php';?>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />


<main class="main-container">
  <?PHP flash_msg(); ?>



  <div class="col-lg-12" style="margin-top: 20px;">

                    <?php foreach($data['events'] as $event){ ?>
                            <div class="event-list-content fix" style="background-color: #fff;width:90%;margin:0 auto;margin-bottom: 10px;">
                                <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
                                    <li style="margin-bottom: 12px;"><?PHP echo $event->location ?></li>
                                    <li style="margin-bottom: 12px;"><?PHP echo $event->date.' - '.$event->time.' AM'; ?></li>
                                </ul>
                                <h2 style="margin-bottom: 16px;"><?php echo $event->title ?></h2>
                                <p><?PHP echo $event->description?>...</p>
                                <!-- <a href="#" class="btn btn-default mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> -->
                                <a href="<?PHP echo URLROOT.'events/info/'.$event->id;?>" class="btn btn-default mt-20">Read More</a>
                                <div class="crical"><i class="fal fa-video"></i> </div>
                            </div>

                   <?php } ?>


  </div>


  






  </main>
</div>

<link rel="stylesheet" href="<?PHP echo URLROOT.'css/event/index.css'?>">
<?php require_once APPROOT.'views/inc/footer.php';?>