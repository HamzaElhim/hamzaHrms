
<?php 

  class Events extends Controler {

    public $getModel;

    public function __construct()
    {
      $this->getModel=$this->models('event');
    }

    public function index(){
      $for_user=$_SESSION['role']!='RH' ? $_SESSION['dept'] : '';
      $events=$this->getModel->all_events('historic',$for_user);
      $data=[
        'events'=>$events,
      ];

      $this->views('event/index',$data);
    }

    public function upcoming(){
      $for_user=$_SESSION['role']!='RH' ? $_SESSION['dept'] : '';
      $events=$this->getModel->all_events('upcoming',$for_user);
      $data=[
        'events'=>$events,
        'title'=>'Upcoming'
      ];

      $this->views('event/index',$data);
    }


    public function add(){
      if($_SERVER['REQUEST_METHOD']=='POST'){
        $data=[
          'title'=>  $_POST['title'],
          'description'=>$_POST['description'],
          'date'=> $_POST['date'],
          'time'=> $_POST['time'],
          'branch'=>$_POST['branch'],
          'location'=>$_POST['location'],
        ];

        $data_err=[
          'title_err'=>'',
          'description_err'=>'',
          'date_err'=>'',
          'time_err'=>'',
          'branch_err'=>'',
          'location_err'=>'',
        ];


        $data_err=check_emtpy($data,$data_err);


        if(check_emtpy('',$data_err)){
          $this->getModel->add_event($data);
          $msg='A new event has been added';
          flash_msg($msg,'success');
          redirect('events');
        }else{
          $msg='Some informations are Invalid ! please try again';
          flash_msg($msg,'danger');
          $data=[
            'v'=>$data,
            'e'=>$data_err
          ];
          $this->views('event/add',$data);


        }




      }else {

        $data=[];
        $this->views('event/add',$data);

      }
    }


    public function info($id){
      $event=$this->getModel->get_event($id);
      $data=[
        'event'=>$event
      ];
      $this->views('event/info',$data);
    }

  }