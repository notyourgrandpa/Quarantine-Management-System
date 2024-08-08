<html>
<head>
    <meta charset="UTF-8">
    <title>Quarantine Management System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/select2.css" rel="stylesheet" type="text/css" />
    <script src="../js/jquery-1.12.3.js" type="text/javascript"></script>
    <style>
    .no-print{
        display:none;
    }
    .dataTables_filter input { 
    padding-top: 20px;
    padding-bottom: 20px;}
    </style>
</head>
<body>
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
      <a class="navbar-brand" href="index.php"><img alt="Brand" src="../img/quarantine.png" style="width:50px; margin-top:-15px; "></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="../login.php">Admin</a></li>
        <li><a href="../pages/staff/login.php">Staff</a></li>
        <li><a href="nearModal.php">Facilities Near Me</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper row-offcanvas row-offcanvas-left">
<div class="container-fluid">
<table id="table" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Contact No.</th>
            <th>Nationality</th>
            <th>Start Date</th>
            <th>Completion Date</th>
            <th>Required Days</th>
            <th>Facility Area</th>
            <th>Status</th>
            <th style="width: 5% !important;">Option</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "../pages/qConnection.php";

        $squery = mysqli_query($con, "SELECT *,facility_area,id,CONCAT(last_name, ', ', first_name, ' ', middle_name) as cname, control_no, contact, nationality, start_date, completion_date, required_days, status, image FROM tbl_patients order by facility_area");
        while($row = mysqli_fetch_array($squery))
        {
            echo '
            <tr>
                  <td style="width:70px;"><image src="../pages/patient/image/'.basename($row['image']).'" style="width:60px;height:60px;"/></td>
                  <td>'.$row['cname'].'</td>                
                  <td>'.$row['contact'].'</td>
                  <td>'.$row['nationality'].'</td>
                  <td>'.$row['start_date'].'</td>
                  <td>'.$row['completion_date'].'</td>
                  <td>'.$row['required_days'].'</td>
                  <td>'.$row['facility_area'].'</td>
                  <td>'.$row['status'].'</td>
                <td><button class="btn btn-primary btn-sm" data-target="#detailsModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-search" aria-hidden="true"></i> Details</button></td>
            </tr>
            ';
            include "detailsModal.php";
        }
        ?>
    </tbody>
</table>

</div>
</div>
</body>


<script src="../js/alert.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>


<script src="../js/morris/raphael-2.1.0.min.js" type="text/javascript"></script>
<script src="../js/morris/morris.js" type="text/javascript"></script>
<script src="../js/select2.full.js" type="text/javascript"></script>

<script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="../js/buttons.print.min.js" type="text/javascript"></script>

<script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../js/AdminLTE/app.js" type="text/javascript"></script>

<script type="text/javascript">
  $(function() {
      $("#table").dataTable({
         "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0, 9 ] } ],"aaSorting": [],
         "dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">'
      });
  });

  $(document).ready(function () {             
  $('.dataTables_filterinput[type="search"]').css(
     {'width':'350px','display':'inline-block'}
  );
});

</script>


</html>