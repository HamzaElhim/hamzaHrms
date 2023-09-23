<?php 



    class Employe {
      private $db;
      public function __construct()
      {
        $this->db=new Database();
      }

      // get the specific info of an employe by the type of the info
      public function employe_info($table_name,$id){
        $sql='SELECT * from '.$table_name.' where employe_id=:id';
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        return $this->db->singeResult();
      }

      //  return all employes rows of the emploples table and in the chosen order whith option sort by full_name
      public function all_employes($column_order='first_name',$full_name=''){
        $full_name='%'.$full_name.'%';

        $column_order= $column_order=='first_name' ? $column_order.' asc' : $column_order.' DESC';
        $sql='SELECT * from employes 
              WHERE (
                      (role NOT LIKE "RH") AND ( (last_name LIKE :full_name)  OR (first_name  LIKE :full_name)  )
                    ) 
              ORDER BY '.$column_order;
        $this->db->query($sql);
        $this->db->bind(':full_name',$full_name);
        return $this->db->multipleResult();
      }

      // return the total number of all employes
      public function total_employes(){
        $sql='SELECT * FROM employes WHERE role NOT LIKE "RH"';
        $this->db->query($sql);
        $this->db->execute();
        return $this->db->rowCount();
      }

      // delet the specifed employe info from the specifyed table
      public function delete_employe($id,$table_name){
        $sql='DELETE from '.$table_name.' where employe_id=:id';
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        $this->db->execute();
      }


      // check if a certain email exist in the database
      public function email_exist($email){
        $sql='SELECT * FROM employes WHERE email=:email';
        $this->db->query($sql);
        $this->db->bind(':email',$email);

        $this->db->execute();

        return $this->db->rowCount()>0 ? true : false;
      }


      // add the information of a employe to the scefied table
      public function add_employes($sql,$data,$id=''){
        $this->db->query($sql);
        foreach($data as $key=>$value){
          $name=':'.$key;
          // check if the name exist in the sql comand
          if(strpos($sql,$name) != false){
            $this->db->bind($name,$value);
          }    
        }
        $this->db->execute();

        // get the user id 
        if(!empty($id)){
          $sql='SELECT employe_id FROM employes WHERE email=:email';
          $this->db->query($sql);
          $this->db->bind(':email',$data['email']);
          return $this->db->singeResult();
        }
      }



      // update the employe info of the specefied table with the employe_id in data parameter
      public function update($table_name,$data){

        if($table_name=='personal_info'){
          $sql='UPDATE '.$table_name.' SET adress=:adress,nationality=:nationality,phone_number=:phone_number,
        emergency_number=:emergency_number,emergency_relationship=:emergency_relationship,marital=:marital,gender=:gender,birth_date=:birth_date
         WHERE employe_id=:employe_id';
        }
        elseif($table_name=='employes'){
          
        $sql='UPDATE '.$table_name.' SET first_name=:first_name,last_name=:last_name,email=:email,
        password=:password,role=:role,image=:image
         WHERE employe_id=:employe_id';
        }
        elseif($table_name=='professional_info')
        {

          $sql='UPDATE '.$table_name.' SET job_title=:job_title,department=:department,certifications=:certifications,
                  salary=:salary,contract_type=:contract_type,employment_status=:employment_status,contract_start=:contract_start,contract_duration=:contract_duration
                  WHERE employe_id=:employe_id';
        }
        

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

      // for salary page 
        public function total_salary_dept(){
          $sql='SELECT department,salary,sum(salary) as total from professional_info group by department order by total DESC';
          $this->db->query($sql);
          return $this->db->multipleResult();
        }

        public function employes_dept($dept){
          $sql='SELECT * from employes inner join professional_info on employes.employe_id=professional_info.employe_id WHERE department LIKE :department order by salary DESC ';
          $this->db->query($sql);
          $this->db->bind(':department',$dept);
          return $this->db->multipleResult();
          
        }

        public function count_evn($dept=''){
          $blanc=empty($dept) ? '' : ' AND (branch LIKE "ALL" OR branch LIKE '.$dept.')';
          $sql='SELECT * FROM events 
          where  date >= CURRENT_DATE
           AND (date > CURRENT_DATE 
           OR time>= CURRENT_TIME) 
          '.$blanc.'';
    
          $this->db->query($sql);
          $this->db->execute();
          
    
          return $this->db->rowCount() >0 ? $this->db->rowCount() : false;
          
    
      }

      
    }