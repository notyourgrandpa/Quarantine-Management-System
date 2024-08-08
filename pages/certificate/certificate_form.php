<!DOCTYPE html>
<html id="certificate">
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 4mm; }
</style>
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
    <body class="skin-black" >
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../qConnection.php";
        ?>
       
        <div class="" style="" >
            
        <button style="width: 100%" class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#certificate')">Print</button>
            <div style=" background: black;" >
                
                
                <div class="" style="background: white;  ">
                    <div class="pull-left" style="font-size: 16px; margin-left: 17%;"><b><center>
                    <image src="../../img/quarantine.png" style="width:20%;height:20%;"/><br>
                        SERUM ISOLATION FACILITY<br></b>
                        Quezon City, Brixton Hills Brgy. Santol<br>
                        (909)298-2679 &nbsp;&nbsp;&nbsp; serumiso@gmail.com<br>
                        </b></center><br><br><br>
                    </div>
                    
                    <div class="col-xs-12 col-md-12">
                        <br><br><p class="text-center"><b style="font-size: 28px;">QUARANTINE CERTIFICATE</b></p><br><br>
                        
                        <p style="text-indent:40px;text-align: justify;">This is to certify that the bearer, 
                        <?php
                            $qry2=mysqli_query($con,"SELECT *, CONCAT(last_name, ', ', first_name, ' ', middle_name) as cname from tbl_patients where id = '".$_GET['patient']."' ");
                            while($row = mysqli_fetch_array($qry2)){
                                echo '<b><u>'.strtoupper($row['cname']).'</b></u>';
                            }
                        ?>
                                with residence at 
                        <?php
                            $qry3=mysqli_query($con,"SELECT * from tbl_patients where id = '".$_GET['patient']."' ");
                            while($row = mysqli_fetch_array($qry3)){
                                echo '<b><u>'.strtoupper($row['address']).'</b></u>';
                            }
                        ?>
                                Completed the Mandatory Quarantine Process and is COVID-19 Free.
                            </p><br><br>
                            <p style="text-indent:40px;text-align: justify;">This Certificate is issued after a thorough medical examination determining that
                                the bearer has no medical signs and symptoms related to COVID-19 and is hereby
                                cleared to leave the quarantine facility and to return to residence as stated.</p><br>
                                <p style="text-indent:40px;text-align: justify;"> Given this

                        <?php
                                $today = date("Y-m-d");
                                echo '
                                    <b><u>'.$today.'</u></b>
                                ';

                        ?>
                                at Quezon City, Brixton Hills Brgy. Santol.
                            </p>
                        </div>
                        
                    </div>  
                    
                </div>
            
                <div class="col-xs-12 col-md-12"><br><br><br><br><br><br><br><br><br><br><br>
                    <?php
                    $session = $_GET['session'];
                    
                        echo '
                        <p>
                        <b style="font-size:18px; margin-left: 120px"><u>'.strtoupper($session).'</u>
                        <span class="pull-right" style="font-size:18px; margin-right: 120px"><u>REN TAKAHASHI</u></b></p>
                        <p style="font-size:18px; margin-left: 120px">In Charge
                        <span class="pull-right" style="font-size:18px; margin-right: 120px">Consultant</b></p>
                        ';
                        
                    
                    ?>
                </div>
                
            </div>
        </div>
    
    </body>
    <?php
    }
    ?>


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