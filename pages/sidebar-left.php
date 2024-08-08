<?php

	echo '
	<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
                        <div class="pull-left info" style= margin-top:80px;>
                            <h4>Hello, '.$_SESSION['role'].'</h4>

                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    ';
                    if($_SESSION['role'] == "Administrator"){
                        echo '
                    <ul class="sidebar-menu">
                            <li>
                                <a href="../dashboard/dashboard.php">
                                <i class="fa fa-credit-card" aria-hidden="true"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="../facility/facility.php">
                                    <i class="fa fa-home"></i> <span>Facility</span>
                                </a>
                            </li>
                            <li>
                                <a href="../staff/staff.php">
                                    <i class="fa fa-user"></i> <span>Staff</span>
                                </a>
                            </li>
                            <li>
                                <a href="../patient/patient.php">
                                    <i class="fa fa-users"></i> <span>Patient</span>
                                </a>
                            </li>
                            <li>
                                <a href="../certificate/certificate.php">
                                    <i class="fa fa-file"></i> <span>Certificate</span>
                                </a>
                            </li>
                            
                            </li>
                            <li>
                                <a href="../report/report.php">
                                    <i class="fa fa-file"></i> <span>Report</span>
                                </a>
                            </li>
                            <li>
                                <a href="../logs/logs.php">
                                    <i class="fa fa-history"></i> <span>Logs</span>
                                </a>
                            </li>                            
                            
                    </ul>';
                    }
                    elseif(isset($_SESSION['role'])){
                        echo '
                        <ul class="sidebar-menu">
                            <li>
                                <a href="../facility/facility.php">
                                    <i class="fa fa-home"></i> <span>Facility</span>
                                </a>
                            </li>
                            <li>
                                <a href="../patient/patient.php">
                                    <i class="fa fa-users"></i> <span>Patient</span>
                                </a>
                            </li>
                            <li>
                                <a href="../certificate/certificate.php">
                                    <i class="fa fa-file"></i> <span>Certificate</span>
                                </a>
                            </li>
                            
                        </ul>';
                    }
                    else{
                        echo '
                        <ul class="sidebar-menu">
                            <li>
                                <a href="../facility/facility.php">
                                    <i class="fa fa-home"></i> <span>Facility</span>
                                </a>
                            </li>
                            <li>
                                <a href="../patient/patient.php">
                                    <i class="fa fa-users"></i> <span>Patient</span>
                                </a>
                            </li>
                            <li>
                                <a href="../certificate/certificate.php">
                                    <i class="fa fa-file"></i> <span>Certificate</span>
                                </a>
                            </li>
                            
                        </ul>';
                    }
                echo '
                </section>
                <!-- /.sidebar -->
            </aside>
	';
?>