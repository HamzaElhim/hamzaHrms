<?php
  
   class Users extends Controler {
    public $getModel;
    public function __construct()
    {
      $this->getModel=$this->models('employe');
      if(!isset($_SESSION['id']))redirect('homes');
    }

    public function index(){
      $user=$this->getModel->employe_info('employes',$_SESSION['id']);
      $data=[
        'user'=>$user
      ];
      $this->views('user/index',$data);
    }

    public function profile(){
      $id=$_SESSION['id'];
      $per=$this->getModel->employe_info('personal_info',$id);
      $pro=$this->getModel->employe_info('professional_info',$id);
      $mor=$this->getModel->employe_info('employes',$id);

      $data=[
        'personal_info'=> to_assosiative_arr($per),
        'professional_info'=> to_assosiative_arr($pro),
        'more_info'=> to_assosiative_arr($mor),
      ];
      $this->views('User/profile',$data);
    }

    public function logout(){

      session_unset();
      session_destroy();
      unset($var);
      redirect('homes');
    }
   }