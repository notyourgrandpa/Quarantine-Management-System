<!DOCTYPE html>
<html id="certificate">

<?php
session_start();
if(!isset($_SESSION['role']))
{
    header("Location: ../../login.php"); 
}
else
{
ob_start();
include('../head_css.php'); ?>
<style>
.input-size {
    width:418px;
}
.col-xs-12 {
     width: 100%;
 }
 @media (min-width: 768px){
     .col-sm-6 {
         width: 50%;
     }
 }

 /* add such rules everywhere */
 @media print{
     .col-sm-6 {
         width: 50%;
     }
 }
</style>
<style type="text/css" media="print">
    @media print{
        .noprint, .noprint *{
            display: none; !important;
        }
    }
    @page { size: auto;  margin: 4mm; }
    
</style>
<body onload="print()" class="skin-black">
<?php 
    include "../qConnection.php";
?>
<?php include('../header.php'); ?>
<?php include('../sidebar-left.php'); ?>
<div style=" background: black;" >       
    <div class="" style="background: white;  ">
        <div class="pull-left" style="font-size: 16px; margin-left: 17%;"><b><center>
            <image src="../../img/quarantine.png" style="width:20%;height:20%;"/><br>
                SERUM ISOLATION FACILITY<br></b>
                Quezon City, Brixton Hills Brgy. Santol<br>
                (909)298-2679 &nbsp;&nbsp;&nbsp; serumiso@gmail.com<br>
                </b></center><br>
        </div>
</div>
</div>
<p class="pull-left" style="font-size: 28px;">Patient Medical Record</p><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 ">
                <p><b>Patient Information</p></b>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p><b>Birthdate:</b></p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p>
                    <?php
                        $qry2=mysqli_query($con,"SELECT *, CONCAT(first_name, ' ', middle_name, ' ', last_name) as cname from tbl_patients where id = '".$_GET['patient']."' ");
                        while($row = mysqli_fetch_array($qry2)){
                            echo ''.$row['cname'].'';
                        }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p>
                    <?php
                        $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                        while($row = mysqli_fetch_array($qry2)){
                            echo ''.strtoupper($row['birthdate']).'';
                        }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <br>
                <p>
                    <?php
                        $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                        while($row = mysqli_fetch_array($qry2)){
                            echo 'Contact No: '.$row['contact'].'';
                        }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <br>
                <p><b>Age:</b></p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <br>
                <p>
                    <?php
                        $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                        while($row = mysqli_fetch_array($qry2)){
                            echo ''.$row['address'].'';
                        }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p>
                    <?php
                        $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                        while($row = mysqli_fetch_array($qry2)){
                            echo ''.$row['age'].' years old';
                        }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p></p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <br>
                <p><b>Gender:</b></p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p></p>
            </div>
            <div class="col-xs-12 col-sm-6">
            <p>
                <?php
                    $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                    while($row = mysqli_fetch_array($qry2)){
                        echo ''.$row['gender'].'';
                    }
                ?>
            </p>
            </div>
        </div>
    </div>
    <p class="pull-left" style="font-size: 20px;">Medical History</p><br><br>
    <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 ">
                <p><b>Start Date:</p></b>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p><b>Facility Area:</b></p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p>
                    <?php
                        $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                        while($row = mysqli_fetch_array($qry2)){
                            echo ''.$row['start_date'].'';
                        }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p>
                    <?php
                        $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                        while($row = mysqli_fetch_array($qry2)){
                            echo ''.$row['facility_area'].'';
                        }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <br>
                <p><b>Completion Date:</b></p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <br>
                <p><b>Status:</b></p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p>
                    <?php
                        $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                        while($row = mysqli_fetch_array($qry2)){
                            echo ''.$row['completion_date'].'';
                        }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p>
                    <?php
                        $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                        while($row = mysqli_fetch_array($qry2)){
                            echo ''.$row['status'].'';
                        }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <br>
                <p><b>Required Days:</b></p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <br>
                <p><b>Vital Signs:</b></p>
            </div>
            <div class="col-xs-12 col-sm-6">
            <p>
                <?php
                    $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                    while($row = mysqli_fetch_array($qry2)){
                        echo ''.$row['required_days'].' days';
                    }
                ?>
            </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p>
                    <?php
                        $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                        while($row = mysqli_fetch_array($qry2)){
                            echo '<b>Heart Rate: </b>'.$row['heart_rate'].' bpm <br>
                            <b>Blood Pressure: </b>'.$row['bp'].' mm Hg <br>
                            <b>Oxygen Saturation: </b>'.$row['oxygen_sat'].'<br>
                            <b>Temperature: </b>'.$row['temp'].'°C
                            ';
                        }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <br><p><b>Recorded By:</b><br>
                <?php
                        $qry2=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                        while($row = mysqli_fetch_array($qry2)){
                            echo ''.$row['recorded_by'].'';
                        }
                    ?>
            </p>
            </div>
            
        </div>
    </div>
<div class="container">
    <button type="" class="btn btn-info noprint" style="width: 100%" onclick="window.location.replace('patient.php');">Cancel Print</button>
    <button style="width: 100%" class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#certificate')">Print</button>
</div>
    <!-- header logo: style can be found in header.less -->
    
    
    <?php }
    include "../footer.php"; ?>
</body>
<script>
         function PrintElem(elem)
    {
        window.print();
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body class="skin-black" >');
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'visible';
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();

        printButton.style.visibility = 'visible';
        mywindow.close();

        return true;
    }
    </script>
</html>