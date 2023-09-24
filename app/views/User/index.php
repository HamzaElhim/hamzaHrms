<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/user_nav.php';?>
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/dashboard.css'; ?>">
 <!-- Main -->
 <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
          
        </div>

        <div class="main-cards">
          <PRE>
            <?php print_r($data['attendance']->present) ?>
          </PRE>
    
    
          <a href ="#"  class="card">
            <div class="card-inner">
              <p class="text-primary">Presents</p>
              <span class="material-symbols-outlined text-green">how_to_reg</span>
            </div>
            <span class="text-primary font-weight-bold"><?PHP echo $data['attendance']->present;; ?> </span>
          </a>

          <a href ="#" class="card">
            <div class="card-inner">
              <p class="text-primary">Absents</p>
              <span class="material-symbols-outlined text-red">unpublished</span>
            </div>
            <span class="text-primary font-weight-bold"><?PHP echo $data['attendance']->absnt ?></span>
          </a>
          <a href ="<?PHP echo URLROOT.'Requests/RequestUser';?>" class="card">
            <div class="card-inner">
              <p class="text-primary">Requests</p>
              <span class="material-symbols-outlined text-blue1">notification_add</span>
            </div>
            <span class="text-primary font-weight-bold"><?PHP echo $data['NbrRequest']?></span>
          </a>
          <a href ="../salaries/salaries.html" class="card">
            <div class="card-inner">
              <p class="text-primary">Salaries</p>
              <span class="material-symbols-outlined text-green1">payments</span>
            </div>
            <span class="text-primary font-weight-bold">/79</span>
          </a>
          <a href ="<?PHP echo URLROOT.'events/upcoming'; ?>" class="card">
            <div class="card-inner">
              <p class="text-primary">Events</p>
              <span class="material-symbols-outlined text-red1">today</span>
            </div>
            <span class="text-primary font-weight-bold"><?PHP echo $data['total_evn']?></span>
          </a>
        </div>
     </main>
    </div>

<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/dashboard.css'; ?>">
<?php require_once APPROOT.'views/inc/footer.php';?>