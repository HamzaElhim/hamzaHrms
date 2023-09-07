<div class="grid-container">
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
              some msg 
        <h1></h1>
        <div class="header-right">
          <span class="material-icons-outlined">account_circle</span>
        </div>
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
                  <a href="<?PHP echo URLROOT.'admins'?>" >
                    <span class="material-icons-outlined">dashboard</span> Dashboard
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="department" >
                    <span class="material-icons-outlined">
                      assured_workload </span> Departments
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="<?PHP echo URLROOT.'admins/employes'?>" >
                    <span class="material-icons-outlined"> face</span> Employees
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="../Presence/Presence.html" >
                    <span class="material-icons-outlined">view_list  </span> Presence
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="<?PHP echo URLROOT.'admins/salary'?>" >
                    <span class="material-icons-outlined">credit_score</span> salaries
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="../Requests/Requests.html" >
                    <span class="material-icons-outlined"> note_alt</span> Requests 
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="<?PHP echo URLROOT.'events'?>" >
                    <span class="material-icons-outlined"> event </span> Events
                  </a>
                </li>
              </ul>
            </aside>