<link rel="stylesheet" href="<?PHP echo URLROOT.'css/dashboard.css'; ?>">
<div class="grid-container">
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
              some msg 
        <h1></h1>
        <a class="header-right" href="<?PHP echo URLROOT.'users/logout';?>">
          <span class="material-icons-outlined">logout</span>

        </a>
      </header>
      <!-- End Header -->

            <!-- Sidebar -->
            <aside id="sidebar">
              <div class="sidebar-title">
                <div class="sidebar-brand">
                  <span class="material-icons-outlined ">inventory</span> <?PHP echo ucfirst($_SESSION['last_name'][0]).'.'.$_SESSION['first_name'] ?>
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
              </div>
      
              <ul class="sidebar-list">
                <li class="sidebar-list-item">
                  <a href="<?PHP echo URLROOT.'users'?>" >
                    <span class="material-icons-outlined">dashboard</span> Dashboard
                  </a>
                </li>
          
                <li class="sidebar-list-item">
                  <a href="<?PHP echo URLROOT.'users/profile'?>" >
                    <span class="material-icons-outlined"> face</span> Profile
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="<?PHP echo URLROOT.'Requests/RequestUser';?>" >
                    <span class="material-icons-outlined"> note_alt</span> Requests 
                  </a>
                </li>
                <li class="sidebar-list-item">
                <a class="btn-group dropup">
                <span class="material-icons-outlined"> event </span> 
                  <a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Events
                  </a>
                  <div class="dropdown-menu" style="background-color:#21232d">
                    <a class="dropdown-item" style="color:#FFF !important" href="<?PHP echo URLROOT.'events/upcoming'; ?>">Upcoming </a>
                    <a class="dropdown-item" style="color:#FFF !important" href="<?PHP echo URLROOT.'events'; ?>">Historical </a>
                  </div>
                </a>
                  
                </li>
              </ul>
            </aside>

           <style>
            .dropdown-item:hover{
              background-color: #ff8080 !important;
            }
           </style>