<?php 
class Home {
  public $db;
  public function __construct()
  {
    $this->db=new Database();
  }


  // find the specefyed email and return the row he belogs to
  public function find_email($email){
    $sql='SELECT * FROM employes where email=:email';
    $this->db->query($sql);
    $this->db->bind(':email',$email);
    $row=$this->db->singeResult();
    if($row)return $row;
    else return false; 
  }

  public function get_user_department($id){
    $sql='SELECT * from professional_info where employe_id=:id';
    $this->db->query($sql);
    $this->db->bind(':id',$id);
    $row=$this->db->singeResult();
    return $row->department;
  }


}