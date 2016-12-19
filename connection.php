
<?php

class Connection
{

  function __construct()
  {
    $this->hostname = 'localhost';
    $this->username = 'root';
    $this->password = 'root';
    $this->dbname = 'test';
  }

  public  function  connectDataBase(){
    $connection = mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname) or die("Error: " . mysqli_error($connection));
    mysqli_query($connection, "SET NAMES 'utf8' ");
    return $connection;
  }

  public function closeDataBase(){
    $connection = $this->connectDataBase();
    mysqli_close($connection);
  }

  public function fetchData($data){
    $result = [];
    while ($fetch = mysqli_fetch_assoc($data)) {
      $result[] = $fetch;
    }
    return $result;
  }


}




?>
