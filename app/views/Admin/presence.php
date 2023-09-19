<?php require_once APPROOT.'views/inc/header.php'; ?>
<?php require_once APPROOT.'views/inc/navigation.php'; ?>


      
      <main class="main-container">
        <div class="main-title">
          <h2>Presence Of Today</h2>
        </div>
          <table class="mainData">
               <th >
                  <tr class="th">
                    <td>Id </td>
                    <td>Employees</td>
                    <td >Status</td>
                  </tr>
               </th>
                <tbody class="tbody">
                   <?php 
                    $id = 1;
                    foreach ($data['employeesPr'] as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $id++ ?></td>
                            <td><?= $value['empName'] ?></td>
                            <?php  
            
                            if ($value['presentDay'] == 1) {
                                echo "<td class='Present'>". "Present" . "</td>";
                            } else {
                                echo "<td class='Absent'>". "Absent" . "</td>";
                            }
                            ?>
                        </tr>                  
                    <?php
                    } 
                    ?>      
                </tbody>
          </table>
          <br>
          <hr>
          <br>
          <div class="main-title">
          <h2>Attendance History </h2>
        </div>
          <table class="mainData">
               <th>
                  <tr class="th">
                    <td>Id </td>
                    <td>Employees</td>
                    <td class="text-green">Presences</td>
                    <td class="text-red">Absences</td>
                  </tr>
               </th>
                <tbody class="tbody">
                  <?php 
                    $id = 1;
                    foreach ($data['employeesPr'] as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $id++ ?></td>
                            <td><?= $value['empName'] ?></td>
                            <td><?= $value['Presences'] ?></td>
                            <td><?= $value['Absences'] ?></td>
                        </tr>                  
                    <?php
                    } 
                    ?>  
                </tbody>
          </table>
          </div>
        </div>    
        
      </main>
     
      <link rel="stylesheet" href="<?PHP echo URLROOT.'css/admin/presence.css';?>">
<?php require_once APPROOT.'views/inc/footer.php';; ?>
