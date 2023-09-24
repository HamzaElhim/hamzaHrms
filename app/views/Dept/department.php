<?php require_once '../app/views/Inc/header.php';
if (!empty($_SESSION['error'])) {
  echo "<p class='errorDprt'>".  "</p>";
}
?>
<?php require_once APPROOT.'views/inc/navigation.php';?>

  



      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>Departments </h2>
        </div>
          <table class="contentDpr">
          <thead>
            <tr>
              <td>Id</td>
              <td>Department</td>
              <td>Department Head</td>
              <td>Employees Number</td>
              <td>Operations</td>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($data['departmentData'] as $key => $value) { ?>
              <tr>
                  <td><?php echo $key + 1; ?></td>
                  <td><?php echo $value['name']; ?></td>
                  <td><?php echo $value['headDpt']; ?></td>
                  <td><?php echo $value['employee_count']; ?></td>
                  <td class="btn-div">

                    <button  class="edit_btn" type="submit" name="editdpt">
                    <span id="<?PHP echo $value['id']?>" class="material-symbols-outlined edit">edit</span>
                    </button>
                  <form action="<?PHP URLROOT.'Depart/editdpt';?>" method="post">
                      <input type="hidden" name="dprId" value=" <?= $value['id'] ?>">
                      <button type="submit" name="del">
                          <span class="material-symbols-outlined del">delete</span>
                      </button>
                  </form>
                  </td>
                <?php 
              echo "</tr>";
              }
              ?>   
          </tbody>
         </table>
          <hr>
           <form class="add-department-section" action="<?PHP echo URLROOT.'Depart/editdpt';?>" method="post">
          <h2>Add a New Department</h2>
          <div class="add-department-form">
            <input type="text" name="dptName" id="newDepartmentName" placeholder="Enter department name" require>
            <input type="text" name="headName" id="newHeadName" placeholder="Enter the Head of department " require>
            <button type="submit" name="addNewDpr" id="addDepartmentButton">Add Department</button>
          </div>
        </form>
        </div>
        </div>

        <div class="container-e hiden  edit_dept">
        <form class="add-department-section-e" action="<?PHP echo URLROOT.'Depart/editdpt'; ?>" method="post" >
            <div class="icon-div">
              <ion-icon class="icon" size="large" name="close-circle-outline"></ion-icon>

            </div>
            <h1>Edit Department</h1>
            <input class="hide" type="hidden" name="Id" value="">
            <div class="add-department-form-e">
                <div class="form-group-e">
                    <label for="department_name">Department Name:</label>
                    <input type="text" id="department_name" name="department_name" placeholder="Enter Department Name" required>
                </div>
                <div class="form-group-e">
                    <label for="head_department">Head Department:</label>
                    <input type="text" id="head_department" name="head_department" placeholder="Enter Head Department" required>
                </div>
                <button style="margin-top: 16px;" type="submit" name="edit">Submit</button>
            </div>
        </form>
      </div>
      
      <?PHP require_once APPROOT.'views/inc/footer.php';
      unset($_SESSION['error']);
      ?>
      
      
      
    </main>
    <!-- End Main -->
    <link rel="stylesheet" href="<?PHP echo URLROOT.'css/dept/edit.css';?>">
      <link rel="stylesheet" href="<?PHP echo URLROOT.'css/dept/dashboard.css'; ?>">
      <script src="<?PHP echo URLROOT.'js/dept.js';?>"></script>
        <?php require_once APPROOT.'views/inc/footer.php'; ?>
