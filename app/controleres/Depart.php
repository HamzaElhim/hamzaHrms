<?php 
  class Depart extends Controler 
  {
             
    public function dashboard()
    {       
           $userModel = $this->models('Dahboard');
            $data['dprt'] = $userModel->getDprt();

            $departmentData = [];

            foreach ($data['dprt'] as $key => $value) {
                $departmentId = $value->id;
                $departmentName = $value->dpName;
                $departmentHead = $value->headDpt; 
                $employeeCount = $userModel->getSum($departmentName);

                    $departmentData[] = [
                    'id' => $departmentId,
                    'name' => $departmentName,
                    'headDpt' => $departmentHead,
                    'employee_count' => $employeeCount,
                ];
            }

            $data['departmentData'] = $departmentData;
            $this->views('Dept/department', $data);
  

    }
    
    public function editdpt()
    {   
           $userModel = $this->models('Dahboard');

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editdpt']))
        {
            $data['id'] = $_POST['dprId'];
            $this->views('Admin/edit_department', $data);
            exit();

        }elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])) {
            $data['Id'] = $_POST['Id'];
            $data['department_name'] = $_POST['department_name'];
            $data['head_department'] = $_POST['head_department'];

            $userModel->Update($data['Id'], $data['department_name'], $data['head_department'] );


        }elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['del'])) {
            $data['Id'] = $_POST['dprId'];
            $data['dpt'] = $userModel->del($data['Id']);


        }elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addNewDpr'])) {
            
            $data['headName'] = $_POST['headName'];
            $data['dptName'] = $_POST['dptName'];

            $permissionDpr = $userModel->checkDpr($data['dptName']);
            $permissionHead = $userModel->checkHeadDprt($data['headName']);
            if (!$permissionDpr &&  $permissionHead ) {
                 unset($_SESSION['error']);
                $userModel->Insert($data['dptName'], $data['headName']);   
            }else{
                $_SESSION['error'] = 'data already in the database';
            }
        }
       $this->dashboard();
    }

  }