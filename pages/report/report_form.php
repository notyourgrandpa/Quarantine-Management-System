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
</style>
<style type="text/css" media="print">
    @media print{
        .noprint, .noprint *{
            display: none; !important;
        }
    }
</style>
<body onload="print()" class="skin-black">
<?php 
    include "../qConnection.php";
?>
            <?php include('../header.php'); ?>
            <?php include('../sidebar-left.php'); ?>
<div class="container">
    <center>
        <h3 stlye="margin-top: 30px;">Patient List</h3>
        <hr>
    </center>
    <table id="ready" class="table table-striped table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Control No.</th>
                <th>Starting Date</th>
                <th>Completion Date</th>
                <th>Required Days</th>
                <th>Status</th>
        </thead>
        <tbody>
            <?php
                $get_list = mysqli_query($con, "SELECT *, CONCAT(last_name, ', ', first_name, ' ', middle_name) as cname FROM tbl_patients");
                while($row = mysqli_fetch_array($get_list)){

            ?>

            <tr>
                <td><?php echo $row['cname']?></td>
                <td><?php echo $row['control_no']?></td>
                <td><?php echo $row['start_date']?></td>
                <td><?php echo $row['completion_date']?></td>
                <td><?php echo $row['required_days']?></td>
                <td><?php echo $row['status']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="container">
    <button type="" class="btn btn-info noprint" style="width: 100%" onclick="window.location.replace('report.php');">Cancel Print</button>
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