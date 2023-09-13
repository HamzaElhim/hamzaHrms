<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navigation.php';?>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />


<main class="main-container">
  <?PHP flash_msg(); ?>


    <div class="scrole_div">

    
    <?php foreach($data['depts'] as $key=>$dept){ ?>

         <table>
          <thead>
            <tr class="dpt">
              <th>Department :<?PHP echo $dept->department ?></th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>TOTAL :<?PHP echo $dept->total.' MAD' ?></th>
            </tr>
            <tr class="tlt">
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
          <td>    <?PHP echo $empl->salary.' MAD'; ?>   </td>
          </tr>
          <?PHP }?>
          </tbody>
        </table>
    <?php }?>


  
  



      


</div>
<link rel="stylesheet" href="<?php echo URLROOT.'css/admin/employes.css';?>">
<?php require_once APPROOT.'views/inc/footer.php';?>