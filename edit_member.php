<?php

include('connection.php');

class EditMember
{
  public $id;
  public $name;
  public $email;

  public function getMember(){
    $connection = new Connection;
    $connect = $connection->connectDataBase();

    $sql = "SELECT * FROM member WHERE id = {$this->id}";
    $result = mysqli_query($connect,$sql);
    $row_cnt = mysqli_num_rows($result);
    if($row_cnt > 0){
      $data = $connection->fetchData($result);
    }
    return $data;
  }

  public function updateMember(){
    $connection = new Connection;
    $connect = $connection->connectDataBase();
    $sql = "UPDATE member SET name = '{$this->name}', email = '{$this->email}' WHERE id = {$this->id}";
    $result = mysqli_query($connect,$sql);
    if($result){
      return true;
    }else{
      return false;
    }
  }

}

// get member
$id = $_GET['id'];
$member = new EditMember;
$member->id = $id;
$data = $member->getMember();
$data = $data[0];


// update member
if($_POST['name']){
  $edit_member = new EditMember;
  $edit_member->name = $_POST['name'];
  $edit_member->email = $_POST['email'];
  $edit_member->id = $_POST['id'];
  if($edit_member->updateMember()){
  echo "<script type='text/javascript'>window.top.location='index.php';</script>";
  }
}

?>


<html>
<head>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">Panel heading without title</div>
          <div class="panel-body">

            <form id="formRegister" name="formRegister" method="post" action="edit_member.php">
              <input type="hidden"  name="id" value="<?=$data['id']?>">
            <div class="form-group">
              <label for="name">name</label>
              <input type="name" class="form-control" id="name" name="name" value="<?=$data['name']?>" placeholder="name">
            </div>
            <div class="form-group">
              <label for="email">email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?=$data['email']?>" placeholder="email">
            </div>

              </label>
            </div>
            <button type="submit" class="btn btn-default"> <a href="index.php"></a>ตกลง</button>
          </form>
          </div>
        </div>

    </div>
    </div>
  </div>




</body>
</html>
