




<?php require_once APPROOT.'views/inc/header.php';?>
<?php require_once APPROOT.'views/inc/navbar.php';?>
<div class="body_ctr">


  <form class="add_container" action="<?php echo URLROOT.'events/add'; ?>" method="POST">

  
  <div class="title">
    <label class="labels">Title</label>
    <input type="text" class="inputs <?php echo empty($data) ? '' : handel_error('class',$data['v']['title'],$data['e']['title_err'])?>" name="title"
     placeholder="Title" value="<?php echo empty($data) ? '' : handel_error('value',$data['v']['title'],$data['e']['title_err'])?>">
    <p class="form_err"><?php echo empty($data) ? '' : handel_error('error',$data['v']['title'],$data['e']['title_err'])?></p>
  </div>
  <div class="description">
    <label class="labels">Description</label>
    <textarea class="txt_area  <?php echo empty($data) ? '' : handel_error('class',$data['v']['description'],$data['e']['description_err'])?>" name="description"  cols="30" rows="3"><?php  if(!empty($data)) echo handel_error('value',$data['v']['description'],$data['e']['description_err'])?></textarea>
       <p class="form_err">    <?php echo empty($data) ? '' : handel_error('error',$data['v']['description'],$data['e']['description_err'])?></p> 
      </div>
  <div>
    <label class="labels">Date</label>
    <input type="date" name="date" class="inputs <?php echo empty($data) ? '' : handel_error('class',$data['v']['date'],$data['e']['date_err'])?>" 
     placeholder="Date"       value="<?php echo empty($data) ? '' : handel_error('value',$data['v']['date'],$data['e']['date_err'])?>" >
    <p class="form_err">             <?php echo empty($data) ? '' : handel_error('error',$data['v']['date'],$data['e']['date_err'])?></p>
  </div>
  <div>
    <label class="labels">Time</label>
    <input type="time" class="inputs <?php echo empty($data) ? '' : handel_error('class',$data['v']['time'],$data['e']['time_err'])?>" name="time" 
    placeholder="Time"        value="<?php echo empty($data) ? '' : handel_error('value',$data['v']['time'],$data['e']['time_err'])?>">
    <p class="form_err">             <?php echo empty($data) ? '' : handel_error('error',$data['v']['time'],$data['e']['time_err'])?></p>
  </div>
  <div>
    <label class="labels">Branch</label>
    <select class="inputs" name="branch" >    
        <option value="">&nbsp;</option>
        <option value="ALL">All Departments</option>
        <option value="GI">Ginie Informatique</option>
        <option value="GE">Ginie Electrique</option>
        <option value="GM">Ginie Mecanique</option>
    </select>
    <p class="form_err"> <?php echo empty($data) ? '' : handel_error('error',$data['v']['branch'],$data['e']['branch_err'])?></p>
  </div>
  <div>
    <label  class="labels" >Location</label>
    <input type="text" class="inputs <?php echo empty($data) ? '' : handel_error('class',$data['v']['location'],$data['e']['location_err'])?>"  name="location" value="<?php  if(!empty($data)) echo handel_error('value',$data['v']['location'],$data['e']['location_err'])?>" >
    <p class="form_err"><?php echo empty($data) ? '' : handel_error('error',$data['v']['location'],$data['e']['location_err'])?></p>
  </div>

  <input  class="btn add_btn_form" type="submit" name="Next" value="Add">
  </form>














 </div>
<link rel="stylesheet" href="<?php echo URLROOT.'css/event/add.css';?>">
<?php require_once APPROOT.'views/inc/footer.php'; ?>
