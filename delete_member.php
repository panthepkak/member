<?php

include('connection.php');

class delete
{

  public function memberDelete(){
    $connection = new Connection;
    $connect = $connection->connectDataBase();
    $sql = "DELETE * FROM member";
    $result = mysqli_query($connect,$sql);
    $row_cnt = mysqli_num_rows($result);
    if($row_cnt > 0){
      $data = $connection->fetchData($result);
    }
    return $data;
  }

}

$member = new delete;
$data = $member->memberDelete();
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
echo $id;
echo $name;
echo $email;
//$r = mysql_query("DELETE FROM feed WHERE date = '$date' AND time = '$time'") or die("Query failed! with '$feed'");
$r = mysql_query ("DELETE FROM member WHERE member = '" . mysql_real_escape_string ($) . "'") or die ("Query failed with {$member} and mysql error: " . mysql_error); )
mysql_query("DELETE FROM member WHERE member = 'hello'")
or die("Query failed! with '$member'");
?>
