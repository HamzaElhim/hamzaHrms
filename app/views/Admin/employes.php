<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navigation.php';?>
<!-- Main -->
<main class="main-container">


  <div class="employe_div ">

  <div class="head-div">
    <a class="btn btn-default" href="#">
    add employe  
      <i class="fa fa-plus"></i>
    </a>
    <label class="search-label">Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="editable_table"></label>
  </div>


    
  <table class="container" id="table">
		<thead>
			<tr>
				<th style="text-transform: capitalize;">Profile Photo</th>
				<th style="text-transform: capitalize;">Username</th>
				<th style="text-transform: capitalize; text-align: center;">E-Mail</th>
				<th style="text-transform: capitalize; text-align: center;">Position</th>
				<th style="text-transform: capitalize; text-align: center;">Join Date</th>
				<th style="text-transform: capitalize; text-align: center;">Action</th>
			</tr>
		</thead>
		<tbody class="overflow-auto">
            <?PHP foreach($data['employes'] as $employe){ ?>
			<tr>
				<td data-th="Profile Photo"><span class="bt-content"><img id="myImg" alt="Mark&nbsp;D&nbsp;Cooper" src="image/33615user.png" style="width: 50px;height: 50px;object-fit: cover;border-radius: 100%;border: 1px solid"></span></td>
				

				<td data-th="Name"><span class="bt-content"><?PHP echo $employe->first_name.' '.$employe->last_name ?></span></td>
				<td data-th="Name"><span class="bt-content"><?PHP echo $employe->email ?></span></td>

				<td style="width: 120px;" data-th="Employee Id"><span class="bt-content"><?PHP echo $employe->role ?></span></td>
				<td style="width: 120px;"  data-th="Employee Id"><span class="bt-content"><?PHP echo $employe->joined_date ?></span></td>
				<td style="width:200px;" data-th="Full Detail"><span class="bt-content">
                   <a style="padding:4px;margin-right:4px;font-size:14px;color:#fff"  class="btn btn-labeled btn-success" href="#">
                                <span class="btn-label">
                                <i class="fa fa-eye" ></i>
                                </span>
                                View
                    </a>
                    <a style="padding:4px;font-size:14px;color:#fff""  class="btn btn-labeled btn-danger" href="#">
                                <span class="btn-label">
                                <i class="fa fa-trash"></i>
                                </span>
                                Trash
                        </a>
                    </span>
                    </td>
			</tr>

            <?php }?>

       

    
				</tbody>
		</table>




  </div>

    </main>




</div>



<link rel="stylesheet" href="<?php echo URLROOT.'css/admin/employes.css';?>">
<?php require_once APPROOT.'views/inc/footer.php';?>