<?php require_once '../app/views/Inc/header.php'; ?>
<?php require_once APPROOT.'views/inc/navigation.php'; ?>


      <main class="main-container">
        <div class="main-title">
          <h2>Pending Requests</h2>
        </div>
          <table class="mainRequest">
               <th >
                  <tr class="th">
                    <td>Id </td>
                    <td>Employees</td>
                    <td>Type</td>
                    <td>Description</td>
                    <td >Operation</td>
                  </tr>
               </th>
                <tbody class="tbody">
                   <?php 
                    $id = 1;
                    foreach ($data['emp'] as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $id++ ?></td>
                            <td><?=  $value->emp ?></td>
                            <td><?= $value->type ?></td>                         
                            <td><?= $value->description ?></td>                         
                            <td>
                              <form action="/Sarb-HRMS/public/Requests/Request" method="post">
                                <input type="hidden" name="Id" value="<?= $value->id ?>" >
                                <input type="hidden" name="emp" value="<?= $value->emp ?>" >
                                <input type="hidden" name="type" value="<?= $value->type ?>" >
                                <input type="hidden" name="description" value="<?= $value->description ?>" >
                                <button type="submit" name="Rejected">
                                      <span class="material-symbols-outlined del">cancel</span>
                                </button>
                                <button type="submit" name="Approved">
                                      <span class="material-symbols-outlined edit">check_circle</span>
                                </button>
                              </form>
                            </td>                         
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
          <h2>Requests History </h2>
        </div>
          <table class="mainRequest">
               <th >
                  <tr class="th">
                    <td>Id </td>
                    <td>Employees</td>
                    <td>Type</td>
                    <td>Description</td>
                    <td >Status</td>
                  </tr>
               </th>
                <tbody class="tbody">
                  <?php 
                    $id = 1;
                    foreach ($data['EmpAll'] as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $id++ ?></td>
                            <td><?= $value->emp ?></td>
                            <td><?= $value->type ?></td>                         
                            <td><?= $value->description ?></td> 
                            <?php  
            
                            if ($value->status == 'Approved') {
                                echo "<td class='Approved'>". "Approved" . "</td>";
                            } else {
                                echo "<td class='Rejected'>". "Rejected" . "</td>";
                            }
                            ?>
                    <?php
                    } 
                    ?>  
                </tbody>
          </table>
          </div>
        </div>    
        
      </main>
     <link rel="stylesheet" href="<?php echo URLROOT . 'css/admin/request.css'?>">
      <?php require_once APPROOT.'views/inc/footer.php'; ?>
