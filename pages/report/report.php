<!DOCTYPE html>
<html>

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
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../qConnection.php";
        ?>
        <?php include('../header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('../sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Patient
                    </h1>
                    
                </section>

                <?php 
                if(!isset($_GET['patient']))
                {
                ?>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">
                                        
                                        <a href="report_form.php" class="btn btn-primary btn-sm"><i aria-hidden="true" class="fa fa-print"></i>Print Report</a>
                                
                                    </div>                                
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                <form method="post"  enctype="multipart/form-data">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <?php 
                                                    if(!isset($_SESSION['staff']))
                                                    {
                                                ?>
                                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                                <?php
                                                    }
                                                ?>
                                                <th>Image</th>
                                                <th>Control No</th>
                                                <th>Name</th>
                                                <th>Nationality</th>
                                                <th>Start Date</th>
                                                <th>Completion Date</th>
                                                <th>Required Days</th>
                                                <th>Facility Area</th>
                                                <th>Status</th>
                                                <th style="width: 10% !important;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(!isset($_SESSION['staff']))
                                            {
                                                $squery = mysqli_query($con, "SELECT *, facility_area,id,CONCAT(last_name, ', ', first_name, ' ', middle_name) as cname, control_no, contact, nationality, start_date, completion_date, required_days, status, image FROM tbl_patients order by facility_area");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                                        <td style="width:70px;"><image src="../patient/image/'.basename($row['image']).'" style="width:60px;height:60px;"/></td>
                                                        <td>'.$row['control_no'].'</td>
                                                        <td>'.$row['cname'].'</td>
                                                        <td>'.$row['nationality'].'</td>
                                                        <td>'.$row['start_date'].'</td>
                                                        <td>'.$row['completion_date'].'</td>
                                                        <td>'.$row['required_days'].'</td>
                                                        <td>'.$row['facility_area'].'</td>
                                                        <td>'.$row['status'].'</td>
                                                        <td>
                                                        <a target="_blank" style="width: 100%" href="individual_report.php?patient='.$row['id'].'&session='.$_SESSION['role'].'" onclick="location.reload();" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Report</a></td></td>
                                                    </tr>
                                                    ';
                                                    
                                                    
                                                    
                                                }
                                            }
                                            else{
                                                $squery = mysqli_query($con, "SELECT *, facility_area,id,CONCAT(last_name, ', ', first_name, ' ', middle_name) as cname, control_no, contact, nationality, start_date, completion_date, required_days, status, image FROM tbl_patients order by facility_area");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td style="width:70px;"><image src="../patient/image/'.basename($row['image']).'" style="width:60px;height:60px;"/></td>
                                                        <td>'.$row['control_no'].'</td>
                                                        <td>'.$row['cname'].'</td>
                                                        <td>'.$row['nationality'].'</td>
                                                        <td>'.$row['start_date'].'</td>
                                                        <td>'.$row['completion_date'].'</td>
                                                        <td>'.$row['required_days'].'</td>
                                                        <td>'.$row['facility_area'].'</td>
                                                        <td>'.$row['status'].'</td>
                                                        <td>
                                                        <a target="_blank" style="width: 100%" href="individual_report.php?patient='.$row['id'].'&session='.$_SESSION['role'].'" onclick="location.reload();" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Report</a></td></td>
                                                    </tr>
                                                    ';
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <?php include "../edit_notif.php"; ?>

                            <?php include "../added_notif.php"; ?>

                            <?php include "../delete_notif.php"; ?>

                            <?php include "../duplicate_error.php"; ?>


                    </div>   <!-- /.row -->
                </section><!-- /.content -->
                <?php
                }
                else
                {
                ?>
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                
                                <div class="box-body table-responsive">
                                <form method="post"  enctype="multipart/form-data">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                                <th>Image</th>
                                                <th>Control No</th>
                                                <th>Name</th>
                                                <th>Nationality</th>
                                                <th>Start Date</th>
                                                <th>Completion Date</th>
                                                <th>Required Days</th>
                                                <th>Facility Area</th>
                                                <th>Status</th>
                                                <th style="width: 40px !important;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT facility_area,id,CONCAT(last_name, ', ', first_name, ' ', middle_name) as cname, control_no, contact, nationality, status, image FROM tbl_patients order by facility_area");
                                            while($row = mysqli_fetch_array($squery))
                                            {
                                                echo '
                                                <tr>
                                                    <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                                    <td style="width:70px;"><image src="image/'.basename($row['image']).'" style="width:60px;height:60px;"/></td>
                                                    <td>'.$row['control_no'].'</td>
                                                    <td>'.$row['cname'].'</td>
                                                    <td>'.$row['nationality'].'</td>
                                                    <td>'.$row['start_date'].'</td>
                                                    <td>'.$row['completion_date'].'</td>
                                                    <td>'.$row['required_days'].'</td>
                                                    <td>'.$row['facility_area'].'</td>
                                                    <td>'.$row['status'].'</td>
                                                    <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
                                                    
                                                </tr>
                                                ';

                                                include "edit_modal.php";
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    <?php include "../deleteModal.php"; ?>
                            <?php include "../duplicate_error.php"; ?>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box --> 
                        </div>   <!-- /.row -->
                </section><!-- /.content -->
                <?php
                }
                ?>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php }
        include "../footer.php"; ?>
<script type="text/javascript">
    $(function() {
        $("#table").dataTable({
           "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] } ],"aaSorting": []
        });
    });
    </script>
    </body>
</html>