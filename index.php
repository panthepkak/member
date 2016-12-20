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
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Test</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="ค้นหา">
        </div>
        <button type="search" class="btn btn-primary">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Profile</a></li>
        <li> class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator"class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<ul class="nav nav-pills nav-stacked">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 col-md-offset-2">
        <div class="panel panel-info">
          <div class="panel-heading">ข้อมูลสมาชิก</div>
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
