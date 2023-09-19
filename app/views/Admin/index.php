<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navigation.php';?>
 <!-- Main -->
 <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
          
        </div>

        <div class="main-cards">
          <a href="department" class="card">
            <div class="card-inner">
              <p class="text-primary">Departments</p>
              <span class="material-icons-outlined text-blue"></span>
            </div>
            <span class="text-primary font-weight-bold"><?PHP echo $data['departments'] ?></span>
          </a>
          <a href ="../Employees/staf.html" class="card">
            <div class="card-inner">
              <p class="text-primary">Employees</p>
              <span class="material-symbols-outlined text-orange">offline_pin</span>
            </div>
            <span class="text-primary font-weight-bold"> <?PHP echo $data['employees'] ?></span>
          </a>
          <a href ="../Presence/Presence.html"  class="card">
            <div class="card-inner">
              <p class="text-primary">Presents</p>
              <span class="material-symbols-outlined text-green">how_to_reg</span>
            </div>
            <span class="text-primary font-weight-bold"><?PHP echo $data['presents'] ?> </span>
          </a>

          <a href ="../Presence/Presence.html" class="card">
            <div class="card-inner">
              <p class="text-primary">Absents</p>
              <span class="material-symbols-outlined text-red">unpublished</span>
            </div>
            <span class="text-primary font-weight-bold"><?PHP echo $data['absents'] ?></span>
          </a>
          <a href ="../Requests/Requests.html" class="card">
            <div class="card-inner">
              <p class="text-primary">Requests</p>
              <span class="material-symbols-outlined text-blue1">notification_add</span>
            </div>
            <span class="text-primary font-weight-bold"><?PHP echo $data['requests'] ?></span>
          </a>
          <a href ="../salaries/salaries.html" class="card">
            <div class="card-inner">
              <p class="text-primary">Salaries</p>
              <span class="material-symbols-outlined text-green1">payments</span>
            </div>
            <span class="text-primary font-weight-bold">22</span>
          </a>
          <a href ="../Events/Events.html" class="card">
            <div class="card-inner">
              <p class="text-primary">Events</p>
              <span class="material-symbols-outlined text-red1">today</span>
            </div>
            <span class="text-primary font-weight-bold">/79</span>
          </a>
        </div>
     </main>
    </div>

<link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/dashboard.css'; ?>">
<?php require_once APPROOT.'views/inc/footer.php';?>
