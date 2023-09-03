<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>
<div class="body_ctr">


    <div class="scrole_div">

    
    <?php foreach($data['depts'] as $key=>$dept){ ?>

         <table>
          <thead>
            <tr class="dpt">
              <th>Department :<?PHP echo $dept->department ?></th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>Salary :<?PHP echo $dept->total ?></th>
            </tr>
            <tr>
              <th>First Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Salary</th>
            </tr>
            
          </thead>
          <tbody>
        <?PHP  foreach($data['empls'][$key] as $empl){ ?>
          <tr>
          <td>    <?PHP echo $empl->first_name ?>   </td>
          <td>    <?PHP echo $empl->last_name ?>   </td>
          <td>    <?PHP echo $empl->role ?>   </td>
          <td>    <?PHP echo $empl->salary ?>   </td>
          </tr>
          <?PHP }?>
          </tbody>
        </table>
    <?php }?>


  
  



      


</div>
<link rel="stylesheet" href="<?php echo URLROOT.'css/admin/employes.css';?>">
<?php require_once APPROOT.'views/inc/footer.php';?>