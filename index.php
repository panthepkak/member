<?php
include('connection.php');

class Member
{

  public function memberList(){
    $connection = new Connection;
    $connect = $connection->connectDataBase();
    $sql = "SELECT * FROM member";
    $result = mysqli_query($connect,$sql);
    $row_cnt = mysqli_num_rows($result);
    if($row_cnt > 0){
      $data = $connection->fetchData($result);
    }
    return $data;
  }

}

$member = new Member;
$data = $member->memberList();

?>


<html>
<head>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Member</div>
          <div class="panel-body">

              <p>
                <a href="register_test.php" class="btn btn-success">Add Member</a>
              </p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Manage</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($data as $val) {
                    echo "<tr>
                      <td>{$val['id']}</td>
                      <td>{$val['name']}</td>
                      <td>{$val['email']}</td>
                      <td>
                        <a href='edit_member.php?id={$val['id']}' class='btn btn-primary btn-xs'>Edit</a>
                        <a href='delete_member.php?id={$val['id']}' type='button' class='btn btn-danger btn-xs' onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a>
                      </td>
                    </tr>";
                  }
                  ?>
                </tbody>
              </table>
          </div>
        </div>

    </div>
    </div>
  </div>

</body>
</html>
