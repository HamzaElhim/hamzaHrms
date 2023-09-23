<?PHP 

  /*

  === database class
  === the model only is able to speek with it
  === it's going to cantians all basic method

  */


 class Database {
  private $hostName=DB_HOST;
  private $dbName=DB_NAME;
  private $user=DB_USER;
  private $pass=DB_PASS;

  private $stmt;
  private $connect;

  public function __construct()
  {
    $dsn='mysql:host='.$this->hostName.';dbname='.$this->dbName;
    try {
      $this->connect=new PDO($dsn,$this->user,$this->pass);
      $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      die('connection feiled '.$e->getMessage());
    }
  }

  // prepare stmt with query
  public function query($sql){
    $this->stmt= $this->connect->prepare($sql);
  }

  // bind value

  // Bind values
  public function bind($param, $value, $type = null){
    if(is_null($type)){
      switch(true){
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }

    $this->stmt->bindValue($param, $value, $type);
  }
  // execute the stmt

  public function execute(){
    return $this->stmt->execute();
  }

  // get multiple rows of data

  public function multipleResult(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
  }

  // get multiple rows of data

  public function singeResult(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_OBJ);
  }

  // get row count 

  public function rowCount(){  
    return $this->stmt->rowCount();
  }

  
  public function fetchColumn(){
    $this->stmt->execute();
    return $this->stmt->fetchColumn();
  }


 }
  