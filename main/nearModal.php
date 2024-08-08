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
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="../login.php">Admin</a></li>
        <li><a href="../pages/staff/login.php">Staff</a></li>
        <li class="active"><a href="nearModal.php">Facilities Near Me <span class="sr-only">(current)</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper row-offcanvas row-offcanvas-left">

<div class="row">
    <div class="container-fluid">
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label class="control-label" >Area:</label><br>
                <select onchange="show_nearest()" id="txt_area" name="txt_area">
                    <option selected>- Select Area -</option>
                    <option value="Metro Manila">Metro Manila</option>
                    <option value="Marikina">Marikina</option>
                    <option value="San Mateo">San Mateo</option>
                    <option value="Manila">Manila</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" >Nearest Facility in your Area:</label><br>
                <select onchange="show_address(); show_Link()" id="txt_nearest" name="txt_nearest">
                    <option disabled selected>- Enter Area First - </option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" >Address:</label><br>
                <input id="txt_address" name="txt_address" size="100"readonly value="- Select Facility First -"/>    
            </div>
            <div class="form-group">
                <label class="control-label" >Link:</label><br>
                <input id="txt_link" name="txt_link" size="100" readonly value="- Select Facility First -"/>    
            </div>
            <button onclick="show_Map()">Map</button>
            <button onclick="show_Street()">Street View</button>
            
            <div id="surprise" class="form-group">
                
            </div>
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
         "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] } ],"aaSorting": []
      });
  });
</script>
<script>
    function show_nearest(){
    var area = $('#txt_area').val();
    console.log(area);
    if(area){
        $.ajax({
            type:'POST',
            url:'nearest_dropdown.php',
            data: 'areaa='+area,
            success:function(html){
                $('#txt_nearest').html(html);
            }
        });
    }
    }
    function show_address(){
        var nearest = $('#txt_nearest').val();
        console.log(nearest);
        if(nearest){
            $.ajax({
                type:'POST',
                url:'nearest_dropdown.php',
                data: 'nearestt='+nearest,
                success:function(html){
                    $('#txt_address').html(html);
                }
            }); 
        }
    }
    function show_Link(){
        const txt_link = document.getElementById("txt_nearest")
        if(txt_link.value == "San Mateo Isolation Facility"){
            document.getElementById("txt_link").value="https://goo.gl/maps/Lv8yEYzRxAxeF6pbA";
        }
        else if(txt_link.value == "MLQU Quarantine Facility"){
            document.getElementById("txt_link").value="https://goo.gl/maps/GKsd9Qrigqh4fggf8";
        }
        else if(txt_link.value == "Kamia Residence Hall"){
            document.getElementById("txt_link").value="https://goo.gl/maps/dZ2xXJHGNYuG2UGZ9";
        }
        else if(txt_link.value == "Bagong Sibol Quarantine Facility"){
            document.getElementById("txt_link").value="https://goo.gl/maps/DuxgHhvn7LsC1E7s8";
        }
        else if(txt_link.value == "Delpan Quarantine Facility"){
            document.getElementById("txt_link").value="https://goo.gl/maps/tpMua3ppDGw1TdTg9";
        }
        else if(txt_link.value == "Rosario Maclang Bautista General Hospital"){
            document.getElementById("txt_link").value="https://goo.gl/maps/KYGPFhGbUosdk3wY9";
        }
        else if(txt_link.value == "San Mateo Medical Center"){
            document.getElementById("txt_link").value="https://goo.gl/maps/gSfrrWjbQbnJTRFB7";
        }
        
    }
    function show_Map()
    {
        const txt_link = document.getElementById("txt_nearest")
        if(txt_link.value == "San Mateo Isolation Facility"){
            document.getElementById("surprise").innerHTML="<img src='images/sanmateoisolationfacilityview.PNG'/>";
        }
        else if(txt_link.value == "MLQU Quarantine Facility"){
            document.getElementById("surprise").innerHTML="<img src='images/mlquview.PNG'/>";
        }
        else if(txt_link.value == "Kamia Residence Hall"){
            document.getElementById("surprise").innerHTML="<img src='images/residenceview.PNG'/>";
        }
        else if(txt_link.value == "Bagong Sibol Quarantine Facility"){
            document.getElementById("surprise").innerHTML="<img src='images/bagongsilbolview.PNG'/>";
        }
        else if(txt_link.value == "Delpan Quarantine Facility"){
            document.getElementById("surprise").innerHTML="<img src='images/delpanview.PNG'/>";
        }
        else if(txt_link.value == "Rosario Maclang Bautista General Hospital"){
            document.getElementById("surprise").innerHTML="<img src='images/maclangview.PNG'/>";
        }
        else if(txt_link.value == "San Mateo Medical Center"){
            document.getElementById("surprise").innerHTML="<img src='images/sanmateoview.PNG'/>";
        }
    }
    function show_Street()
    {
        const txt_link = document.getElementById("txt_nearest")
        if(txt_link.value == "San Mateo Isolation Facility"){
            document.getElementById("surprise").innerHTML="<img src='images/sanmateoisolationfacility.PNG'/>";
        }
        else if(txt_link.value == "MLQU Quarantine Facility"){
            document.getElementById("surprise").innerHTML="<img src='images/mlqu.PNG'/>";
        }
        else if(txt_link.value == "Kamia Residence Hall"){
            document.getElementById("surprise").innerHTML="<img src='images/residence.PNG'/>";
        }
        else if(txt_link.value == "Bagong Sibol Quarantine Facility"){
            document.getElementById("surprise").innerHTML="<img src='images/bagongsilbol.PNG'/>";
        }
        else if(txt_link.value == "Delpan Quarantine Facility"){
            document.getElementById("surprise").innerHTML="<img src='images/delpan.PNG'/>";
        }
        else if(txt_link.value == "Rosario Maclang Bautista General Hospital"){
            document.getElementById("surprise").innerHTML="<img src='images/maclang.PNG'/>";
        }
        else if(txt_link.value == "San Mateo Medical Center"){
            document.getElementById("surprise").innerHTML="<img src='images/sanmateo.PNG'/>";
        }
    }
    

    function show_total(){
        var totalID = $('#txt_hof').val();
        console.log(totalID);
        if(totalID){
            $.ajax({
                type:'POST',
                url:'household_dropdown.php',
                data: 'total_id='+totalID,
                success:function(html){
                    $('#txt_hof').html(html);
                }
            }); 
        }
    }

</script>
</html>