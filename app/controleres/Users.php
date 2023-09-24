<?php
  
   class Users extends Controler {
    public $getModel;
    public $userModel;
    public function __construct()
    {
      $this->userModel=$this->models('user');
      $this->getModel=$this->models('employe');
      if(!isset($_SESSION['id']))redirect('homes');
    }

    public function index(){
      $user=$this->getModel->employe_info('employes',$_SESSION['id']);
      $attendance=$this->userModel->getAttendance($_SESSION['id']);
      $data=[
        'user'=>$user,
        'attendance'=>$attendance ,
        'NbrRequest'=>$this->userModel->getRequest($_SESSION['id']) ,
        'total_evn'=>$this->getModel->count_evn($_SESSION['dept']),
      ];

      $this->views('user/index',$data);
    }

    public function profile(){
      $id=$_SESSION['id'];
      $short_cute=$this->getModel->employe_info('employes',$id);
      $personal=$this->getModel->employe_info('personal_info',$id);
      $professional=$this->getModel->employe_info('professional_info',$id);

      
 


      $data=[
        'personal_info'=> to_assosiative_arr($personal),
        'professional_info'=> to_assosiative_arr($professional),
        'more_info'=> to_assosiative_arr($short_cute),
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