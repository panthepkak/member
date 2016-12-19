<?php
include('connection.php');

class Registersave
{

	public $name;
	public $email;

	public function saveData(){

		if(isset($this->name) && isset($this->email)){
			$connection = new Connection;
			$con = $connection->connectDataBase();

			$sql = "INSERT INTO member(name, email)
					 VALUES('$this->name', '$this->email')";

			$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

			if($result){
				return true;
			}else{
				return false;
			}
		  $connection->closeDataBase();
		}else{
			return false;
		}

	}


}

 $save = new Registersave;
 $save->name = $_POST['name'];
 $save->email = $_POST['email'];
 if($save->saveData()){
	echo "<script type='text/javascript'>window.top.location='index.php';</script>";
 }

?>
