<?php






function check_emtpy($data=[],$data_err){

  // check if there are some empty feilds
  if(!empty($data)){
    foreach ($data as $key => $value) {
      if(empty($value)){
        $data_err[$key.'_err']="this feild can't be empty";
      }
  }
  return $data_err;
  }

  // return true if data_err is empty
  if(empty($data)){
    foreach($data_err as $key => $value){
      if(!empty($value)){
        return false;
      }
    }
    return true;
  }
  
}


function handel_error($type,$value,$error,$radio_value=''){

      if($type=='class'){return empty($error) ? '' : 'err';} 
    if($type=='value'){return empty($error) ? $value : '';} 
    if($type=='error'){return empty($error) ? '' : '🚫 '.$error;}
    if($type=='radio'){
      if($value==$radio_value){
        return empty($error) ? 'checked' : '';
      }
    }
  

  }


  // covert stdclass to assosiative array
  function to_assosiative_arr($std_class){
    $new_arr=[];
    foreach ($std_class as $key => $value) {
      // $value="'$value'";
      $new_arr[$key]=$value;
    }

    return $new_arr;
  }


  
  
