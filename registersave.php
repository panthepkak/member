<?php

include('connection.php');

class Registersave
{
  public $username;
	public $password;
	public $firstname;
	public $lastname;
	public $nickname;
	public $age;
	public $email;

	public function saveData(){

			$connection = new Connection;
			$con = $connection->connectDataBase();

			$sql = "INSERT INTO member(username,password,firstname,lastname,nickname,age,email)
					 VALUES('$this->username','$this->password','$this->firstname','$this->lastname','$this->nickname','$this->age', '$this->email')";

			$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

			if($result){
				return true;
			}else{
				return false;
			}

		  $connection->closeDataBase();

	}


}

	print_r($_POST);

 $save = new Registersave;
 $save->username = $_POST['username'];
 $save->password = $_POST['password'];
 $save->firstname = $_POST['firstname'];
 $save->lastname = $_POST['lastname'];
 $save->nickname = $_POST['nickname'];
 $save->age = $_POST['age'];
 $save->email = $_POST['email'];
 if($save->saveData()){
	echo "<script type='text/javascript'>window.top.location='index.php';</script>";
 }

?>
