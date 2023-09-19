<?php 
  class Dahboard
  {
    public $Database;
    
    public function __construct() 
    {
        $this->Database = new Database();
    }
    public function getDprt()
    {
        $this->Database->query('SELECT * From department');
        $dpt = $this->Database->multipleResult();
        return $dpt;
    }
    public function getSum($dpr)
    {
        $this->Database->query('SELECT COUNT(employe_id) as sumEmp From professional_info Where  department = :dpt');
        $this->Database->bind(':dpt', $dpr);
         $result = $this->Database->multipleResult();
        // echo '<pre>';
        // print_r($result);
        // echo '<pre>';
        if ($result) {
            return $result[0]->sumEmp;
        } else {
            return 0; 
        }
    }
    public function Update($Id, $dpt, $head)
    {
        $this->Database->query('UPDATE department SET dpName = :dpr, headDpt = :head WHERE id = :Id');
        $this->Database->bind(':dpr', $dpt);
        $this->Database->bind(':head', $head);
        $this->Database->bind(':Id', $Id);
        $this->Database->execute();
    }
     
    public function del($Id)
    {
        $this->Database->query('DELETE FROM department WHERE id = :Id');
        $this->Database->bind(':Id', $Id);
        $this->Database->execute();
    }

    public function Insert($dpt, $head)
    {
        $this->Database->query('INSERT INTO department(dpName, headDpt) VALUES( :dpr,  :head )');
        $this->Database->bind(':dpr', $dpt);
        $this->Database->bind(':head', $head);
        $this->Database->execute();
    }
    public function checkDpr($dpt)
    {
        $this->Database->query('SELECT COUNT(*) FROM department WHERE dpName = :dpr ');
        $this->Database->bind(':dpr', $dpt);
        $rowCount = $this->Database->fetchColumn(); 

        return ($rowCount > 0);
    }
    public function checkHeadDprt($head)
    {
        $this->Database->query("SELECT COUNT(*) FROM employes WHERE CONCAT(first_name, ' ', last_name) = :head");
        $this->Database->bind(':head', $head);
        $rowCount = $this->Database->fetchColumn(); 

        return ($rowCount > 0);
    }

  }