
<html>
<head>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 col-md-offset-3">
        <div class="panel panel-warning">
          <div class="panel-heading">กรอกข้อมูล</div>
          <div class="panel-body">

            <form id="formRegister" name="formRegister" method="post" action="registersave.php">

              <form class="form-inline">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail3">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword3">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
                <button type="submit" class="btn btn-default">Sign in</button>
              </form>

              <div class="form-inline">
                <label for="username">Username</label>
                <input type="username" class="form-control" id="username" name="username" placeholder="ชื่อผู้ใช้งาน">
              </div>
              <div class="form-inline">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">
              </div>
            <div class="form-inline">
              <label for="firstname">Firstname</label>
              <input type="firstname" class="form-control" id="firstname" name="firstname" placeholder="ชื่อ">
            </div>
            <div class="form-inline">
              <label for="lastname">Lastname</label>
              <input type="lastname" class="form-control" id="lastname" name="lastname" placeholder="นามสกุล">
            </div>
            <div class="form-inline">
              <label for="nickname">Nickname</label>
              <input type="nickname" class="form-control" id="nickname" name="nickname" placeholder="ชื่อเล่น">
            </div>
            <div class="form-inline">
              <label for="age">Age</label>
              <input type="age" class="form-control" id="age" name="age" placeholder="อายุ">
            </div>
            <div class="form-inline">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="อีเมลล์">
            </div>

              </label>

            <button type="submit" class="btn btn-warning"> <a href="index.php"></a>ตกลง</button>
</div>
          </form>
          </div>
        </div>

    </div>
    </div>
  </div>




</body>
</html>
