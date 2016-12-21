<?php

include('connection.php');

class EditMember
{
  public $id;
  public $username;
  public $password;
  public $firstname;
  public $lastname;
  public $nickname;
  public $age;
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
    $sql = "UPDATE member SET username = '{$this->username}',password = '{$this->password}',firstname = '{$this->lastname}',lastname = '{$this->lastname}',nickname = '{$this->nickname}',age = '{$this->age}', email = '{$this->email}' WHERE id = {$this->id}";
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
if($_POST['formRegister']){
  $edit_member = new EditMember;
  $edit_member->username = $_POST['username'];
  $edit_member->password = $_POST['password'];
  $edit_member->firstname = $_POST['firstname'];
  $edit_member->lastname = $_POST['lastname'];
  $edit_member->nickname = $_POST['nickname'];
  $edit_member->age = $_POST['age'];
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
        <div class="panel panel-primary">
          <div class="panel-heading">ข้อมูลส่วนตัว</div>
          <div class="panel-body">
            <form id="formRegister" name="formRegister" method="post" action="registersave.php">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="username" class="form-control" id="username" name="username" value="<?=$data['username']?>"placeholder="ชื่อผู้ใช้งาน">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?=$data['password']?>"placeholder="รหัสผ่าน">
              </div>
            <div class="form-group">
              <label for="firstname">Firstname</label>
              <input type="firstname" class="form-control" id="firstname" name="firstname" value="<?=$data['firstname']?>"placeholder="ชื่อ">
            </div>
            <div class="form-group">
              <label for="lastname">Lastname</label>
              <input type="lastname" class="form-control" id="lastname" name="lastname" value="<?=$data['lastname']?>"placeholder="นามสกุล">
            </div>
            <div class="form-group">
              <label for="nickname">Nickname</label>
              <input type="nickname" class="form-control" id="nickname" name="nickname" value="<?=$data['nickname']?>"placeholder="ชื่อเล่น">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="age" class="form-control" id="age" name="age" value="<?=$data['age']?>"placeholder="อายุ">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" value="<?=$data['email']?>" placeholder="อีเมลล์">
            </div>

              </label>

            <button type="submit" class="btn btn-primary"> <a href="index.php"></a>ตกลง</button>
          </div></form>
          </div>
        </div>

    </div>
    </div>
  </div>




</body>
</html>
