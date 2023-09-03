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
        'personal_info'=> $per,
        'professional_info'=> $pro,
        'more_info'=> $mor
      ];
      $this->views('user/profile',$data);
    }

    public function logout(){

      session_unset();
      session_destroy();
      unset($var);
      redirect('homes');
    }
   }