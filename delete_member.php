<?php

include('connection.php');

class DeleteMember
{

  public function memberDelete($id){
    $connection = new Connection;
    $connect = $connection->connectDataBase();
    $sql = "DELETE FROM member WHERE id=$id";
    if (mysqli_query($connect,$sql)) {
      return true;
    }else {
      return false;
    }

  }

}
$id = $_GET['id'];

$member = new DeleteMember;
if($member->memberDelete($id)){
echo "<script type='text/javascript'>window.top.location='index.php';</script>";

}
?>
