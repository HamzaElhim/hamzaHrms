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
                  <td>
                  <form action="editdpt" method="post">
                      <input type="hidden" name="dprId" value=" <?= $value['id'] ?>">
                      <button type="submit" name="editdpt">
                      <span class="material-symbols-outlined edit">edit</span>
                      </button>
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
           <form class="add-department-section" action="<?PHP echo URLROOT.'Dept/editdpt';?>" method="post">
          <h2>Add a New Department</h2>
          <div class="add-department-form">
            <input type="text" name="dptName" id="newDepartmentName" placeholder="Enter department name" require>
            <input type="text" name="headName" id="newHeadName" placeholder="Enter the Head of department " require>
            <button type="submit" name="addNewDpr" id="addDepartmentButton">Add Department</button>
          </div>
        </form>
        </div>
        </div>
       
      
      </main>
      <!-- End Main -->

        <script src="<?PHP echo URLROOT.'js/dept.js';?>"></script>
        <link rel="stylesheet" href="<?PHP echo URLROOT.'css/dept/dashboard.css'; ?>">
        <?php require_once APPROOT.'views/inc/footer.php'; ?>
