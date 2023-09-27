<link rel="stylesheet" href="<?PHP echo URLROOT.'css/dashboard.css'; ?>">
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/navigation.css'; ?>">
<div class="grid-container">
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <a class="header-right" href="<?PHP echo URLROOT.'admins/logout';?>">
          <span class="material-icons-outlined">logout</span>
        </a>
      </header>
      <!-- End Header -->

            <!-- Sidebar -->
            <aside id="sidebar">
              <div class="sidebar-title">
                <div class="sidebar-brand">
                  <span class="material-icons-outlined ">inventory</span> S.A.R.B
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
              </div>
      
              <ul class="sidebar-list">
                <li class="sidebar-list-item">
                  <a class="fixe" href="<?PHP echo URLROOT.'admins'?>" >
                    <span class="material-icons-outlined">dashboard</span> Dashboard
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a class="fixe" href="<?PHP echo URLROOT.'Depart/dashboard';?>" >
                    <span class="material-icons-outlined">
                      assured_workload </span> Departments
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a  class="fixe" href="<?PHP echo URLROOT.'admins/employes'?>" >
                    <span class="material-icons-outlined"> face</span> Employees
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a class="fixe" href="<?PHP echo URLROOT.'Presences/presence';?>" >
                    <span class="material-icons-outlined">view_list  </span> Presence
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a  class="fixe"href="<?PHP echo URLROOT.'admins/salary'?>" >
                    <span class="material-icons-outlined">credit_score</span> salaries
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a class="fixe" href="<?PHP echo URLROOT.'Requests/Request';?>" >
                    <span class="material-icons-outlined"> note_alt</span> Requests 
                  </a>
                </li>
                <li class="sidebar-list-item">
                <a class="fixe" class="btn-group dropup">
                <span class="material-icons-outlined"> event </span> 
                  <a class="fixe" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Events
                  </a>
                  <div class="dropdown-menu" style="background-color:#21232d">
                    <a class=" fixe dropdown-item" style="color:#FFF !important" href="<?PHP echo URLROOT.'events/add'; ?>">Add </a>
                    <a class="dropdown-item" style="color:#FFF !important" href="<?PHP echo URLROOT.'events/upcoming'; ?>">Upcoming </a>
                    <a class="dropdown-item" style="color:#FFF !important" href="<?PHP echo URLROOT.'events'; ?>">Historical </a>
                  </div>
                </a>
                  
                </li>
              </ul>
            </aside>

           <style>
            .header-right {
              position: absolute;
              right: 20px;
            }
            .dropdown-item:hover{
              background-color: #ff8080 !important;
            }
           </style>