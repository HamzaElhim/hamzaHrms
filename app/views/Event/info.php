<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/'.($_SESSION['role']=='RH' ? 'navigation' : 'user_nav').'.php';?>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />


<main class="main-container" style="background-color: #f7f7f7;">




<div class="col-12 col-lg-12 m-auto" style="margin-top: 20px;">




                            <div class="event-list-content fix" style="background-color: #fff;width:90%;margin:0 auto;margin-bottom: 10px;">
                            <h3>TO : <?PHP echo $data['event']->branch ?></h3>
                              <h2 style="margin-bottom: 16px;"><?php echo $data['event']->title ?></h2>
                              <p><?PHP echo $data['event']->description;?>...</p>
                              <ul class="loca" data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" >
                                  <li  style="margin-bottom: 12px;"><?PHP echo $data['event']->location; ?></li>
                                  <li style="margin-bottom: 12px;"><?PHP echo $data['event']->date.' -- '.$data['event']->time.' AM'; ?></li>
                              </ul>
  
                                <div class="crical"><i class="fal fa-video"></i> </div>
                            </div>




  </div>






</main>
</div>

<link rel="stylesheet" href="<?PHP echo URLROOT.'css/event/index.css'; ?>">
<?php require_once APPROOT.'views/inc/footer.php';?>

<style>
  h2 {
    margin: 20px !important;
    margin-bottom: 32px !important;
    text-align: center !important;
  }
  p {
    font-size: 20px !important;
    width: 90% !important;
    text-align: center  !important;
    margin: 0 auto  !important;
    margin-bottom: 64px  !important;
  }

   .loca{
    display: flex;
    justify-content: space-around;
    gap: 150px;
  }

  h3 {
    font-size: 20px !important;
    color: #888 !important;
  }
</style>

