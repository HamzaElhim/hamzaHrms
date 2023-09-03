<div class="container">
  <div class="navbar">
    <ion-icon class="arrow arr_left" name="chevron-back-circle-outline"></ion-icon>
    <ion-icon class="arrow arr_right hiden" name="chevron-forward-circle-outline"></ion-icon>
    <div class="profil">
      <h1>img</h1>
      <h2><?php echo ucfirst($_SESSION['last_name'][0]).'.'.$_SESSION['first_name'] ?></h2>
    </div>
    <div class="nav_links">
      <?PHP if($_SESSION['role']=='RH'){ ?>

        <a class="nav_link" href="<?php echo URLROOT.'admins/employes';?>">Employes</a>
        <a class="nav_link" href="#">Departmens</a>
        <a class="nav_link" href="#">Salary</a>
        <a class="nav_link" href="<?php echo URLROOT.'events';?>">Events</a>       
        <a class="nav_link" href="#">Absens</a>
        <a class="nav_link" href="<?php echo URLROOT.'admins/logout';?>">Logout</a>
      <?PHP }else { ?>
        <a class="nav_link" href="<?php echo URLROOT.'users/profile'; ?>">profile</a>
        <a class="nav_link" href="<?php echo URLROOT.'events';?>">Historic Events</a>
        <a class="nav_link" href="<?php echo URLROOT.'events/upcoming';?>">Upcoming Events</a>
        <a class="nav_link" href="#">Absens</a>
        <a class="nav_link" href="<?php echo URLROOT.'users/logout';?>">Logout</a>
        <?php } ?>
    </div>
    </div>