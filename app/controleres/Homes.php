<?php 

 class Homes extends Controler {

  public $getModel;
  
  public function __construct()
  {
    $this->getModel=$this->models('Home');
  }

  public function index(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $data=[
        'email'=>$_POST['email'],
        'password'=>$_POST['password'],
        'email_err'=>'',
        'password_err'=>''
      ];

      // form validation 

      
      if(empty($data['email'])){
        $data['email_err']='please enter your email';
      }


      if(empty($data['password'])){
        $data['password_err']='please enter your password';
      }

      // check for login
      if(empty($data['email_err']) && empty($data['password_err'])){
        $row=$this->getModel->find_email($data['email']);
      if(!$row){
        $data['email_err']='this email it is not exist';
      }else {
        if($row->password != $data['password']){
          $data['password_err']='the password is invalid';
        }
      }
      }


      if(empty($data['email_err']) && empty($data['password_err'])){
        $this->createUserSession($row);
        if($row->role=='RH'){
          redirect('Admins');
        }else {
          redirect('Users');
        }
      }else {
        $this->views('home/index',$data);
      }


    }else {
      $data=[
        'email'=>'',
        'password'=>'',
        'email_err'=>'',
        'password_err'=>''
      ];

      $this->views('home/index',$data);
    }
  }


  public function createUserSession($row){
    $_SESSION['id']=$row->employe_id;
    $_SESSION['first_name']=$row->first_name;
    $_SESSION['last_name']=$row->last_name;
    $_SESSION['email']=$row->email;
    $_SESSION['role']=$row->role;
    $_SESSION['dept']=$this->getModel->get_user_department($row->employe_id);
  }
 }