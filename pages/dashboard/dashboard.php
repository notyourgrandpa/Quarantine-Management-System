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
                        Dashboard
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">                                
                                
                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../patient/patient.php"><span class="info-box-icon bg-red"><i class="fa fa-user" aria-hidden="true"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Positive Cases</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tbl_patients where status = 'Positive'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../patient/patient.php"><span class="info-box-icon bg-orange"><i class="fa fa-desktop" aria-hidden="true"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Total PUM</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tbl_patients where status = 'PUM'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../patient/patient.php"><span class="info-box-icon bg-blue"><i class="fa fa-search" aria-hidden="true"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Total PUI</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tbl_patients where status = 'PUI'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../patient/patient.php"><span class="info-box-icon bg-red"><i class="fa fa-medkit" aria-hidden="true"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Admitted</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tbl_patients where status = 'Admitted'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>                               

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../patient/patient.php"><span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Completed</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tbl_patients where status = 'Completed'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>                                

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../patient/patient.php"><span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Discharged</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tbl_patients where status = 'Discharged'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../patient/patient.php"><span class="info-box-icon bg-aqua"><i class="fa fa-plus-square" aria-hidden="true"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Recovered</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tbl_patients where status = 'Recovered'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../patient/patient.php"><span class="info-box-icon bg-aqua"><i class="fa fa-book" aria-hidden="true"></i>/span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Total Registered</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tbl_patients");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>                                
                            </div><!-- /.box -->
                            
                    </div>   <!-- /.row -->
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">
                                    
                                    </div>                            
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                
                                <div class="row">                     
                                    
                                    <div class="col-md-6 col-sm-12 col-xs-12">                     
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                               Patient Status
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-donut-chart"></div>
                                            </div>
                                        </div>            
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">                     
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                               Population per Room
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-bar-chart3"></div>
                                            </div>
                                        </div>            
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">                     
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Age
                                        </div>
                                        <div class="panel-body">
                                            <div id="morris-bar-chart2"></div>
                                        </div>
                                    </div>            
                                </div> 


                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            


                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php }
        include "../footer.php"; 

        include "donut-chart.php";
        include "bar-chart.php"; 
        ?>
<script type="text/javascript">
    $(function() {
        $("#table").dataTable({
           "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
        });
    });
</script>
    </body>
</html>