<?php
  class Requests extends Controler
  {
    public function Request()
    {
      $suerModel = $this->models('requestsData');

        if ($_SERVER['REQUEST_METHOD'] === 'POST' )
         {
          $Id = $_POST['Id'];
          $emp = $_POST['emp'];
          $type = $_POST['type'];
          $description = $_POST['description'];

          if (isset($_POST['Rejected']))
          {
            $data['typeR'] = 'Rejected';
          }elseif (isset($_POST['Approved']))
          {
            $data['typeR'] = 'Approved';
          }
          $suerModel->Update($Id ,$emp, $type, $description, $data['typeR']);
         }

      $data['emp'] = $suerModel->getUsers();
      $data['EmpAll'] = $suerModel->getEmpAll();

       $this->views('Admin/requests', $data);
    }

    public function  RequestUser()
    {
       $suerModel = $this->models('requestsData');

       if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addRequest']) && !empty($_POST['descName'])) {

        $type = $_POST['reqName'];
        $desc = $_POST['descName'];
        
          
        if (!$suerModel->checkRequest($_SESSION['userName'], $type)) {
           
            $suerModel->insertData($_SESSION['userName'], $type, $desc);            
        }
       }
       $userName=$_SESSION['first_name'].' '.$_SESSION['last_name'];

      $data['emp'] = $suerModel->getData($userName);

       $this->views('User/requestsEmp', $data);
    }
  }