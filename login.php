<!DOCTYPE html>
<html>
<?php
session_start();
?>
    <head>
        <meta charset="UTF-8">
        <title>Quarantine Management System</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="skin-black">
    <nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img alt="Brand" src="img/quarantine.png" style="width:50px; margin-top:-15px; "></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="main/about.php">About</a></li>
        <li><a href="login.php">Admin</a></li>
        <li><a href="pages/staff/login.php">Staff</a></li>
        <li><a href="main/nearModal.php">Facilities Near Me</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <div class="container" style="margin-top:30px">
          <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center;">
                <img src="img/quarantine.png" style="height:100px;"/>
              <h3 class="panel-title">
                <strong>
                    Quarantine Administrator
                </strong>
              </h3>
            </div>
            <div class="panel-body">
              <form role="form" method="post">
                <div class="form-group">
                  <label for="txt_username">Username</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="txt_username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label for="txt_password">Password</label>
                  <input type="password" class="form-control" style="border-radius:0px" name="txt_password" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-sm btn-primary" name="btn_login">Log in</button>
                <label id="error" class="label label-danger pull-right"></label> 
              </form>
            </div>
          </div>
          </div>
        </div>

      <?php
        include "pages/qConnection.php";
        if(isset($_POST['btn_login']))
        { 
            $username = $_POST['txt_username'];
            $password = $_POST['txt_password'];

            $admin = mysqli_query($con, "SELECT * from tbl_users where username = '$username' and password = '$password' and type = 'administrator' ");
            $numrow_admin = mysqli_num_rows($admin);

            $staff = mysqli_query($con, "SELECT * from tbl_staff where username = '$username' and password = '$password' ");
            $numrow_staff = mysqli_num_rows($staff);

            if($numrow_admin > 0)
            {
                while($row = mysqli_fetch_array($admin)){
                  $_SESSION['role'] = "Administrator";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: pages/patient/patient.php');
            }
           
            elseif($numrow_staff > 0)
            {
                while($row = mysqli_fetch_array($staff)){
                  $_SESSION['role'] = $row['name'];
                  $_SESSION['staff'] = "Staff";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: pages/patient/patient.php');
            }
            else
            {
              echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Invalid Account";</script>';               
            }             
        }        
      ?>
    </body>
</html>