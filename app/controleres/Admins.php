<?php
  
   class Admins extends Controler {
    public $getModel;


    public function __construct()
    {
      $this->getModel=$this->models('employe');
      if(!isset($_SESSION['id']))redirect('homes');
    }

    public function index(){
      $admin=$this->getModel->employe_info('employes',$_SESSION['id']);
      $data=[
        'admin'=>$admin,
      ];
      $this->views('admin/index',$data);
    }

    // for the employe functionality

    // show all employes
    public function employes(){
      /////////////////////////////////
       ///// for session created in the edit page ///////
      unset($_SESSION['edit']);
      unset($_SESSION['employe_id']);
      unset($_SESSION['professional_info']);
      unset($_SESSION['personal_info']);
      unset($_SESSION['more_info']);
      /////////////////////////////////
        
      $total_employes=$this->getModel->total_employes();
      
      if($_SERVER['REQUEST_METHOD']=='POST'){
        $value=isset($_POST['search']) ? $_POST['search'] : '';
        $employes=$this->getModel->all_employes((isset($_SESSION['sort']) ? $_SESSION['sort'] : ''),$value);
        $data=[
          'employes'=>$employes,
          'total_employes'=>$total_employes,
          'value'=>$value,
        ];
        $this->views('admin/employes',$data);
        $_SESSION['sort']=$_SESSION['sort']=='first_name' ? 'employe_id' : 'first_name';
      }else {


        $employes=$this->getModel->all_employes();
        unset($_SESSION['sort']);
      $data=[
        'employes'=>$employes,
        'total_employes'=>$total_employes,
        'value'=>''
      ];
      $this->views('admin/employes',$data);
      }
      
    } 

    // se the detail information of a employe
    public function view($id){
      $short_cute=$this->getModel->employe_info('employes',$id);
      $personal=$this->getModel->employe_info('personal_info',$id);
      $professional=$this->getModel->employe_info('professional_info',$id);
      // create sessions
        $_SESSION['employe_id']=$id;
        $_SESSION['edit']='edit';
        $_SESSION['professional_info']=to_assosiative_arr($professional);
        $_SESSION['personal_info']=to_assosiative_arr($personal);
        $_SESSION['more_info']=to_assosiative_arr($short_cute);
        $_SESSION['more_info']['confirm_pass']=$_SESSION['more_info']['password'];

      //
        $data=[
          'more_info'=>$short_cute,
          'personal_info'=>$personal,
          'professional_info'=>$professional,
        ];
        $this->views('admin/view',$data);
    }

    // delete a employe
    public function delete($id){
      $this->getModel->delete_employe($id,'personal_info');
      $this->getModel->delete_employe($id,'professional_info');
      $this->getModel->delete_employe($id,'employes');
      redirect('admins/employes');
    }

    // add new employe
    public function add($id){
      if($_SERVER['REQUEST_METHOD']=='POST'){
        // after we get the data from page one we store it in a session called persenal_data and if the user update any thing the session get updated also
          if($id==1){
            $data=[
              'adress'=>$_POST['adress'],
              'nationality'=>$_POST['nationality'],
              'phone_number'=>$_POST['phone_number'],
              'emergency_number'=>$_POST['emergency_number'],
              'emergency_relationship'=>$_POST['emergency_relationship'],
              'marital'=>empty($_POST['marital']) ? '' :$_POST['marital'],
              'gender'=>empty($_POST['gender']) ? '' :$_POST['gender'],
              'birth_date'=>$_POST['birth_date'],
            ];
            
            $data_err=[
              'adress_err'=>'',
              'nationality_err'=>'',
              'phone_number_err'=>'',
              'emergency_number_err'=>'',
              'emergency_relationship_err'=>'',
              'marital_err'=>'',
              'gender_err'=>'',
              'birth_date_err'=>'',
            ];

            $data_err=check_emtpy($data,$data_err);

            
            if(check_emtpy([],$data_err)){
              if(isset($_SESSION['edit'])){
                    // for edit page
                   $data['employe_id']= $_SESSION['employe_id'];
                   $this->getModel->update('personal_info',$data);
              //
                   redirect('admins/view/'.$_SESSION['employe_id']);
              }else {
                $_SESSION['personal_info']=$data;
                redirect('admins/add/2');
              }
              
            }else {
                  $msg='Some informations are Invalid ! please try again';
                  flash_msg($msg,'error');
              $data_1=[
                'values'=>$data,
                'errors'=>$data_err,
              ];
                $this->views('admin/add/1',$data_1);
              }
              
            }
          // }

          

          if($id==2){

            $data=[
              'job_title'=>$_POST['job_title'],
              'department'=>empty($_POST['department']) ? NULL :$_POST['department'],
              'certifications'=>$_POST['certifications'],
              'salary'=>$_POST['salary'],
              'contract_type'=>empty($_POST['contract_type']) ? NULL :$_POST['contract_type'],
              'employment_status'=>empty($_POST['employment_status']) ? NULL :$_POST['employment_status'],
              'contract_start'=> empty($_POST['contract_start']) ? date('y-m-d') : $_POST['contract_start'],
              'contract_duration'=>empty($_POST['contract_duration']) ? 06 : $_POST['contract_duration'],
            ];
            
            $data_err=[
              'job_title_err'=>'',
              'department_err'=>'',
              'certifications_err'=>'',
              'salary_err'=>'',
              'contract_type_err'=>'',
              'employment_status_err'=>'',
              'contract_start_err'=>'',
              'contract_duration_err'=>''
            ];



            $data_err=check_emtpy($data,$data_err);

            
            if(check_emtpy([],$data_err)){
              if(isset($_SESSION['edit'])){
                // for edit page
               $data['employe_id']= $_SESSION['employe_id'];
               $this->getModel->update('professional_info',$data);
          //
               redirect('admins/view/'.$_SESSION['employe_id']);
              }else {
                $_SESSION['professional_info']=$data;
                  redirect('admins/add/3');
              }
              
            }else {
              $msg='Some informations are Invalid ! please try again';
                  flash_msg($msg,'error');
              $data_2=[
                'values'=>$data,
                'errors'=>$data_err,
              ];
              $this->views('admin/add/2',$data_2);
            }
          }

          if($id==3){
            $data=[
              'first_name'=>trim($_POST['first_name']),
              'last_name'=>trim($_POST['last_name']),
              'email'=>trim($_POST['email']),
              'password'=>trim($_POST['password']),
              'role'=>trim($_POST['role']),
              'confirm_pass'=>trim($_POST['confirm_pass']),
              'image'=> empty($_POST['image']) ? 'no image' : $_POST['image'],
            ];
            
            $data_err=[
              'first_name_err'=>'',
              'last_name_err'=>'',
              'email_err'=>'',
              'password_err'=>'',
              'role_err'=>'',
              'confirm_pass_err'=>'',
              'image_err'=>'',
            ];

            // fore empty feilds
            $data_err=check_emtpy($data,$data_err);


            // more validation
  
              // validate if the email is exist 
            if(!isset($_SESSION['more_info'])){
              if($this->getModel->email_exist($data['email'])){
              $data_err['email_err']='the email is already exist';
            }
            }
            

            // validate the password

            if(empty($data_err['password_err']) && strlen($data['password'])<5){
              $data_err['password_err']='the password must be more than 6 character';
            }

            // validate the confirm password

            if(!empty($data['confirm_pass'])){
              if($data['password']!=$data['confirm_pass']){
                $data_err['confirm_pass_err']='passwords are not the same';
              }
            }
            if(check_emtpy([],$data_err)){
              if(isset($_SESSION['edit'])){
                // for edit page
               $data['employe_id']= $_SESSION['employe_id'];
               $this->getModel->update('employes',$data);
          //
               redirect('admins/view/'.$_SESSION['employe_id']);
              }else {
                $_SESSION['more_info']=$data;
                  redirect('admins/add/4');
              }
              
            }else {
                  $msg='Some informations are Invalid ! please try again';
                  flash_msg($msg,'error');
              $data_3=[
                'values'=>$data,
                'errors'=>$data_err,
              ];
              $this->views('admin/add/3',$data_3);
            }
          }


          if($id==4) {

            // insert more information
            $sql='INSERT INTO employes(first_name,last_name,email,password,role,image) 
                                    VALUES(:first_name,:last_name,:email,:password,:role,:image)';
            $id=$this->getModel->add_employes($sql,$_SESSION['more_info'],'id');

            // insert personal information
            $_SESSION['personal_info']['employe_id']=$id->employe_id;
            $sql='INSERT INTO personal_info(  employe_id,adress,nationality,phone_number,emergency_number,emergency_relationship,marital,gender,birth_date          ) 
                                    VALUES(   :employe_id,:adress,:nationality,:phone_number,:emergency_number,:emergency_relationship,:marital,:gender,:birth_date )';
            $this->getModel->add_employes($sql,$_SESSION['personal_info']);

            // insert professional information
            $_SESSION['professional_info']['employe_id']=$id->employe_id;
            $sql='INSERT INTO professional_info(employe_id,job_title,department,certifications,salary,contract_type,employment_status,contract_start,contract_duration) 
                                    VALUES(:employe_id,:job_title,:department,:certifications,:salary,:contract_type,:employment_status,:contract_start,:contract_duration)';
            $this->getModel->add_employes($sql,$_SESSION['professional_info']);


            
            unset($_SESSION['personal_info']);
            unset($_SESSION['professional_info']);
            unset($_SESSION['more_info']);
            $msg='A new employe has been added';
            flash_msg($msg,'secc');
            redirect('admins/employes');
          }
        }   
        
        
        else{
  
            $view_data=[
          ];
          $this->views('Admin/add/'.$id,$view_data);
          // $this->meassing_url($id);
          
          
      }
    }

    public function salary(){
      $departments=$this->getModel->total_salary_dept();
      $employes=[];
      foreach($departments as $key=>$value){
        $employes[$key]= $this->getModel->employes_dept($value->department);
      }

      $data=[
        'depts'=>$departments,
        'empls'=>$employes
      ];
      $this->views('admin/salary',$data);
    }
 

    public function logout(){
      session_unset();
      session_destroy();
      redirect('homes');
    }
  }