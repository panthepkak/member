<?php
include('connection.php');

class deleteMember
{
  public $id;
	public $name;
	public $email;

	public function deleteData(){

		if(isset($this->name) && isset($this->email)){
			$connection = new Connection;
			$con = $connection->connectDataBase();

			$sql = "DELETE member(id,name,email)
					 VALUES('$this->id','$this->name', '$this->email')";

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

 $delete = new deleteMember;
 $delete->id = $_POST['id'];
 $delete->name = $_POST['name'];
 $delete->email = $_POST['email'];
 if($delete->deleteData()){

 }

// delete member
if($_POST['name']){
  $delete_member = new deleteMember;
  $delete_member->name = $_POST['name'];
  $delete_member->email = $_POST['email'];
  $delete_member->id = $_POST['id'];
  if($delete_member->deleteMember()){
		echo "de";
	}
}
?>
