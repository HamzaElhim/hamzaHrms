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
      <a href="<?PHP echo URLROOT.'admins'; ?>" >
        <span class="material-icons-outlined">dashboard</span> Dashboard
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?PHP echo URLROOT.'Depart/dashboard';?>" class="card">
        <span class="material-icons-outlined">
          assured_workload </span> Departments
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?PHP echo URLROOT.'admins/employes'; ?>" >
        <span class="material-icons-outlined"> face</span> Employees
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?PHP echo URLROOT.'Presences/presence';?>" >
        <span class="material-icons-outlined">view_list  </span> Presence
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?PHP echo URLROOT.'admins/salary'; ?>" >
        <span class="material-icons-outlined">credit_score</span> salaries
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?PHP echo URLROOT.'Requests/Request';?>">
        <span class="material-icons-outlined"> note_alt</span> Requests 
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?PHP echo URLROOT.'events'; ?>" >
        <span class="material-icons-outlined"> event </span> Events
      </a>
    </li>
  </ul>
</aside>
<style>

a:hover{
  text-decoration: none !important;
  color: #9799ab !important;
}
</style>

 



    
