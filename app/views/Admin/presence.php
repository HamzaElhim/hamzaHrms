<?php require_once APPROOT.'views/inc/header.php'; ?>
<?php require_once APPROOT.'views/inc/navigation.php'; ?>


      
      <main class="main-container">
        <div class="main-title">
          <h2>Presence Of Today</h2>
        </div>
          <table class="mainData">
               <th >
                  <tr class="th">
                    <td class="cntr">ID </td>
                    <td>Employees</td>
                    <td class="cntr">Status</td>
                  </tr>
               </th>
                <tbody class="tbody">
                   <?php 
                    $id = 1;
                    foreach ($data['employeesPr'] as $key => $value) {
                    ?>
                        <tr>
                            <td class="cntr"><?= $id++ ?></td>
                            <td><?= $value['empName'] ?></td>
                            <?php  
            
                            if ($value['presentDay'] == 1) {
                                echo "<td class='cntr Present'>". "Present" . "</td>";
                            } else {
                                echo "<td class='cntr Absent'>". "Absent" . "</td>";
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
                    <td class="cntr">ID </td>
                    <td>Employees</td>
                    <td class="cntr text-green">Presences</td>
                    <td class="cntr text-red">Absences</td>
                  </tr>
               </th>
                <tbody class="tbody">
                  <?php 
                    $id = 1;
                    foreach ($data['employeesPr'] as $key => $value) {
                    ?>
                        <tr>
                            <td class="cntr"><?= $id++ ?></td>
                            <td><?= $value['empName'] ?></td>
                            <td class="cntr"><?= $value['Presences'] ?></td>
                            <td class="cntr" ><?= $value['Absences'] ?></td>
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
