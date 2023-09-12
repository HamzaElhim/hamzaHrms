<?php 
 session_start();


 function session_display($session_key,$sessoin_data='',$radio_value=''){
  if(empty($sessoin_data)) return '';
  if(!empty($radio_value) && $sessoin_data==$radio_value){
      return 'selected';
  }
  return $sessoin_data;
}

function sort_name(){

  if(isset($_SESSION['sort']) ){
    if( $_SESSION['sort']=='first_name'){
    return 'Joined Date';
  }

  if( $_SESSION['sort']=='employe_id'){
    return 'Name';
  }
  
  }else {
    $_SESSION['sort']='employe_id';
    return  'Joined Date';
  }

}


// change the next btn text and displayment of back btn in the edit forms
function change_btn($type,$page_num=''){
  if($type=='next'){
    return isset($_SESSION['edit']) ? 'Update' : 'Next';
  }else if ($type=='back'){
    return isset($_SESSION['edit']) ? 'view/'.$_SESSION['employe_id'] : 'add/'.$page_num;
  }
}

// for displaing success msg or error msg type = error or secc
function flash_msg($msg='',$type=''){
  if(!empty($msg) && !empty($type)){
    $_SESSION['msg']=$msg;
    $_SESSION['type']=$type;
  }elseif(!empty($_SESSION['msg'])) {
    $div='
        <div class="flash_div" style="transition:all 1s" >
          <div class="alert  alert-'.$_SESSION['type'].' " >
              <div style=" display: flex;align-items: center; gap: 10px;">
                 <span class="fa fa-'.($_SESSION['type']=='danger' ? 'warning' : 'check').'"></span>
                 <h4 style="font-size:20px;margin: buttom 0;">'.($_SESSION['type']=='danger' ? 'warning' : 'success').'</h4>
              </div>
              <div style="font-size:16px">'.$_SESSION['msg'].'</div>
          </div>
        </div>
    ';
    echo $div;
    unset($_SESSION['type']);
    unset($_SESSION['msg']);
  }
}


