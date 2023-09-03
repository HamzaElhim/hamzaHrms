<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>
<div class="body_ctr">
  <?PHP echo flash_msg()?>
    <div class="btns_div">
      <h1>total employes <span><?PHP echo $data['total_employes']?></span></h1>

    <form class="flex" action="<?php echo URLROOT.'admins/employes';?>" method="POST">
      <input type="text" name="search" placeholder="serch by name" value="<?PHP echo isset($data['value']) ? $data['value'] : ''?>">
      <input class="search_btn" type="submit"  value="🔎"> 
    </form>
    </div>
    <div class="scrole_div">

    
    <div class="titles">
        <h1>#ID</h1>
        <h1>fullName</h1>
        <h1>Email</h1>
        <h1>Role</h1>
        <h1>JoinedDate</h1>
    </div>


  
  <?php foreach($data['employes'] as $employe){ ?>


    <div class="employe_container">
          <ul class="employe_infos">
            <li class="employe_info"><?php echo $employe->employe_id?></li>
            <li class="employe_info"><?php echo $employe->first_name.' '.$employe->last_name?></li>
            <li class="employe_info"><?php echo $employe->email?></li>
            <li class="employe_info"><?php echo $employe->role?></li>
            <li class="employe_info"><?php echo $employe->joined_date?></li>
          </ul>
        <div class="links_div">
          <a class="employe_link view_link " href="<?php echo URLROOT.'admins/view/'.$employe->employe_id;?>">View</a>
          <!-- <a class="employe_link edit_link  " href="#">Edit</a> -->
          <a class="employe_link delete_link " href="<?php echo URLROOT.'admins/delete/'.$employe->employe_id;?>">Delete</a>
        </div>
      </div>
      <?PHP };?>
      </div>
      <div class="btns_div">
      <a class="btn add_btn" href="<?php echo URLROOT.'admins/add/1';?>" >Add +</a>
      <a class="btn empl_btn <?Php echo empty($data['value']) ? 'hiden' :'' ?>" href="<?php echo URLROOT.'admins/employes';?>" >All Employes</a>
      <!-- <button class="btn sort_btn">Sort by joined date</button> -->
      <form class="form_4 <?Php echo empty($data['value']) ? '' :'hiden' ?>" action="http://localhost/hamzaHrms/public/admins/employes" method="POST">
    
    <input class="btn sort_btn" type="submit" name="Next" value="Sort By <?PHP echo sort_name();?>"> 
    </form>
    </div>
</div>
<link rel="stylesheet" href="<?php echo URLROOT.'css/admin/employes.css';?>">
<?php require_once APPROOT.'views/inc/footer.php';?>