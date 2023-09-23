<?php 
  
  class Event {
    private $db;

    public function __construct()
    {
      $this->db=new Database();
    }

    // retreive the historic event or the upcaming events as the type said for admin or user
    public function all_events($type,$branch=''){
      $sql='';

      if(empty($branch)){
            if($type=='historic'){
            $sql='SELECT * FROM events where date <= CURRENT_DATE AND (date < CURRENT_DATE OR time<CURRENT_TIME) ORDER by date DESC';
          }elseif($type=='upcoming') {
            $sql='SELECT * FROM events where date >= CURRENT_DATE AND (date > CURRENT_DATE OR time>= CURRENT_TIME)  ORDER by date asc;';
          }
      }else {
        if($type=='historic'){
          $sql='SELECT * FROM events where date <= CURRENT_DATE AND (date < CURRENT_DATE OR time<CURRENT_TIME) AND (branch LIKE "ALL" OR branch LIKE :branch) ORDER by date DESC';
        }elseif($type=='upcoming') {
          $sql='SELECT * FROM events where date >= CURRENT_DATE AND (date > CURRENT_DATE OR time>= CURRENT_TIME) AND (branch LIKE "ALL" OR branch LIKE :branch) ORDER by date asc;';
        }
      }
      


      $this->db->query($sql);

      if(!empty($branch)){
        $this->db->bind(':branch',$branch);
      }
      
      return $this->db->multipleResult();
    }

    public function add_event($data){
      $sql='INSERT INTO events(title,description,date,time,branch,location) VALUES(:title,:description,:date,:time,:branch,:location)';
      $this->db->query($sql);
        foreach($data as $key=>$value){
          $name=':'.$key;
          // check if the name exist in the sql comand
          if(strpos($sql,$name) != false){
            $this->db->bind($name,$value);
          }    
        }
        $this->db->execute();
    }

    public function get_event($id){
      $sql='SELECT * FROM events where event_id=:id';
      $this->db->query($sql);
      $this->db->bind(':id',$id);
      return $this->db->singeResult();


    }

 


  }