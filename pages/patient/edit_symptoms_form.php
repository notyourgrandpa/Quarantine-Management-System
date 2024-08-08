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
    <body class="skin-black" >
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../qConnection.php";
        ?>
        <?php include "function.php"; ?>
        <?php
            $symptom = array();
            $squery = mysqli_query($con, "SELECT *, CONCAT(last_name, ', ', first_name, ' ', middle_name) as cname FROM tbl_patients where id = '".$_GET['patient']."' ");
            while($row = mysqli_fetch_array($squery))
            {
                $id = $row['id'];
                $cname = $row['cname'];
                $lname = $row['last_name'];
                $fname = $row['first_name'];
                $mname = $row['middle_name'];
                $bdate = $row['birthdate'];
                $age = $row['age'];
                $gender = $row['gender'];
                $nationality = $row['nationality'];
                $control = $row['control_no'];
                $email = $row['email'];
                $contact = $row['contact'];
                $country = $row['country'];
                $sdate = $row['start_date'];
                $rdays = $row['required_days'];
                $cdate = $row['completion_date'];
                $status = $row['status'];
                $address = $row['address'];
                $facility = $row['facility_area'];
                $remarks = $row['remarks'];
                $recorded = $row['recorded_by'];
                $hrate = $row['heart_rate'];
                $bp = $row['bp'];
                $oxygen = $row['oxygen_sat'];
                $temp = $row['temp'];
                $fever = $row['fever'];
                $others = $row['others'];
                $classification = $row['classification'];
                $symptom1 = $row['no_symptom'];
                $symptom2 = $row['shortness_breath'];
                $symptom3 = $row['sore_throat'];
                $symptom4 = $row['cough'];
                $symptom5 = $row['headache'];
                $symptom6 = $row['m_pain'];
                $symptom7 = $row['diarrhea'];
                $symptom8 = $row['vomit'];
                $symptom9= $row['runny_nose'];
                $status1 = $row['additional_status'];
            }
        ?>
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Manage Patient</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" value="<?php echo "$id"?>" name="hidden_id" id="hidden_id"/>
                            <div class="form-group">
                                <label class="control-label">Name:</label><br>
                                <div class="col-sm-4">
                                    <input name="txt_edit_lname" class="form-control input-sm" type="text"value="<?php echo "$lname"?>"/>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_edit_fname" class="form-control input-sm" type="text"value="<?php echo "$fname"?>"/>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_edit_mname" class="form-control input-sm" type="text"value="<?php echo "$mname"?>"/>
                                </div> <br>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Birthdate:</label>
                                <input name="txt_edit_bdate" class="form-control input-sm input-size" type="date" value="<?php echo "$bdate"?>"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Age:</label>
                                <input name="txt_edit_age" class="form-control input-sm input-size" type="number" value="<?php echo "$age"?>"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Gender:</label>
                                <select name="ddl_edit_gender" class="form-control input-sm input-size">
                                    <option value="<?php echo "$gender"?>"selected=""><?php echo "$gender"?></option>    
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Nationality:</label>
                                <input name="txt_edit_nationality" class="form-control input-sm input-size" type="text" value="<?php echo "$nationality"?>"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Control No:</label>
                                <input name="txt_edit_control" class="form-control input-sm input-size" type="number" value="<?php echo "$control"?>"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Email:</label>
                                <input name="txt_edit_email" class="form-control input-sm input-size" type="text" value="<?php echo "$email"?>"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Contact No.:</label>
                                <input name="txt_edit_contact" class="form-control input-sm input-size" type="text" value="<?php echo "$contact"?>"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Country:</label>
                                <input name="txt_edit_country" class="form-control input-sm input-size" type="text" value="<?php echo "$country"?>"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Starting Date:</label>
                                <input name="txt_edit_sdate" class="form-control input-sm input-size" type="date" value="<?php echo "$sdate"?>"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Required Days</label>
                                <input name="txt_edit_rdays" class="form-control input-sm input-size" type="number" value="<?php echo "$rdays"?>"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Completion Date:</label>
                                <input name="txt_edit_cdate" class="form-control input-sm input-size" type="date" value="<?php echo "$cdate"?>"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Status:</label>
                                <select name="txt_edit_status" class="form-control input-sm input-size">
                                    <option value="<?php echo "$status"?>"selected=""><?php echo "$status"?></option>    
                                    <option>PUI</option>
                                    <option>PUM</option>
                                    <option>Admitted</option>
                                    <option>Discharged</option>
                                    <option>Completed</option>
                                    <option>Positive</option>
                                    <option>Dead</option>
                                    <option>Transferred</option>
                                    <option>Recovered</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Address:</label>
                                <input name="txt_edit_address" class="form-control input-sm input-size" type="text" value="<?php echo "$address"?>"/>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Facility Area:</label>
                                <select name="txt_edit_facility" class="form-control input-sm input-size">
                                    <option value="<?php echo "$facility"?>" selected><?php echo "$facility"?></option>
                                    <?php
                                        $squery = mysqli_query($con, "SELECT *,CONCAT(area_name) as cname FROM tbl_facility");
                                        while($row = mysqli_fetch_array($squery))
                                        {
                                            echo '
                                                    <option value="'.$row['cname'].'">'.$row['cname'].'</option>
                                            ';
                                        }
                                    ?>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Remarks:</label>
                                <input name="txt_edit_remarks" class="form-control input-sm input-size" type="text" value="<?php echo "$remarks"?>"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Recorded by:</label><br>
                                <select name="txt_edit_record" class="form-control input-sm input-size">
                                    <option value="<?php echo "$recorded"?>" selected=""><?php echo "$recorded"?></option>
                                    <?php
                                        $squery = mysqli_query($con, "SELECT *,CONCAT(name) as cname FROM tbl_staff");
                                        while($row = mysqli_fetch_array($squery))
                                        {
                                            echo '
                                                    <option value="'.$row['cname'].'">'.$row['cname'].'</option>
                                            ';
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label" >Vital Signs:</label><br>
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Heart Rate:</label>
                                        <input name="txt_edit_hrate" class="form-control input-sm" type="text" value="<?php echo "$hrate"?>"/>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Blood Pressure:</label>
                                        <input name="txt_edit_bpressure" class="form-control input-sm" type="text" value="<?php echo "$bp"?>"/>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Temperature:</label>
                                        <input name="txt_edit_temp" class="form-control input-sm" type="text" value="<?php echo "$temp"?>"/>
                                </div>
                                
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Oxygen Saturation:</label>
                                        <input name="txt_edit_osat" class="form-control input-sm" type="text" value="<?php echo "$oxygen"?>"/>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label class="control-label" >Monitoring:</label><br>
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">No Symptoms</label>
                                        <input name="txt_edit_nsymptom" class="form-control input-sm" type="checkbox" value="Yes" 
                                        <?php if($symptom1 == 'Yes') echo "checked = 'checked'"?>/>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Shortness of Breath</label>
                                        <input name="txt_edit_sbreath" class="form-control input-sm" type="checkbox" value="Yes"
                                        <?php if($symptom2 == 'Yes') echo "checked = 'checked'"?>/>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Sore Throat</label>
                                        <input name="txt_edit_sthroat" class="form-control input-sm" type="checkbox" value="Yes"
                                        <?php if($symptom3 == 'Yes') echo "checked = 'checked'"?>/>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Cough:</label>
                                        <input name="txt_edit_cough" class="form-control input-sm" type="checkbox" value="Yes" 
                                        <?php if($symptom4 == 'Yes') echo "checked = 'checked'"?>/>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Headache</label>
                                        <input name="txt_edit_headache" class="form-control input-sm" type="checkbox" value="Yes"
                                        <?php if($symptom5 == 'Yes') echo "checked = 'checked'"?>/>
                                </div>
                                
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Muscle/joint Pain:</label>
                                        <input name="txt_edit_mjpain" class="form-control input-sm" type="checkbox" value="Yes"
                                        <?php if($symptom6 == 'Yes') echo "checked = 'checked'"?>/>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Diarrhea</label>
                                        <input name="txt_edit_diarrhea" class="form-control input-sm" type="checkbox" value="Yes"
                                        <?php if($symptom7 == 'Yes') echo "checked = 'checked'"?>/>
                                    
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Vomit:</label>
                                        <input name="txt_edit_vomit" class="form-control input-sm" type="checkbox" value="Yes"
                                        <?php if($symptom8 == 'Yes') echo "checked = 'checked'"?>/>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Runny Nose:</label>
                                        <input name="txt_edit_rnose" class="form-control input-sm" type="checkbox" value="Yes"
                                        <?php if($symptom9 == 'Yes') echo "checked = 'checked'"?>/>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Fever:</label>
                                        <input name="txt_edit_fever" class="form-control" type="name" value="<?php echo "$fever"?>"/>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label" style="font-size: 12px">Others:</label>
                                        <input name="txt_edit_others" class="form-control input-sm" type="name" value="<?php echo "$others"?>"/>
                                </div>
                            </div>

                        </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">Image:</label>
                                    <input name="txt_edit_image" class="form-control input-sm" type="file" />
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Classification:</label>
                                    <select name="txt_edit_classification" class="form-control input-sm input-size">
                                        <option value="<?php echo "$classification"?>" selected=""><?php echo "$classification"?></option>
                                        <option>Asymptomatic</option>
                                        <option>Mild</option>
                                        <option>Moderate</option>
                                        <option>Severe</option>
                                        <option>Critical</option>
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Doctor's Note:</label>
                                    <textarea name="txt_edit_stat" cols=40  rows=3 style="white-space: pre-wrap;" class="form-control input-lg"><?php echo "$status1"?></textarea>
                                </div>
                            </div>

                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
            <a href="patient.php" class="btn btn-primary btn-sm"><i aria-hidden="true" class=""></i>Cancel</a>
                <input type="submit" class="btn btn-primary btn-sm" name="btn_edit_symptom" id="btn_edit_symptom" value="Save"/>
            </div>
        </div>
        </div>
        </form>

<script type="text/javascript">
    $(document).ready(function() {
 
        var timeOut = null; // this used for hold few seconds to made ajax request
 
        var loading_html = '<img src="../../img/ajax-loader.gif" style="height: 20px; width: 20px;"/>'; // just an loading image or we can put any texts here
 
        //when button is clicked
        $('#username').keyup(function(e){
 
            // when press the following key we need not to make any ajax request, you can customize it with your own way
            switch(e.keyCode)
            {
                //case 8:   //backspace
                case 9:     //tab
                case 13:    {
                    e.preventDefault();
                    return false;
                }
                case 16:    //shift
                case 17:    //ctrl
                case 18:    //alt
                case 19:    //pause/break
                case 20:    //caps lock
                case 27:    //escape
                case 33:    //page up
                case 34:    //page down
                case 35:    //end
                case 36:    //home
                case 37:    //left arrow
                case 38:    //up arrow
                case 39:    //right arrow
                case 40:    //down arrow
                case 45:    //insert
                //case 46:  //delete
                    return;
            }
            if (timeOut != null)
                clearTimeout(timeOut);
            timeOut = setTimeout(is_available, 500);  // delay delay ajax request for 1000 milliseconds
            $('#user_msg').html(loading_html); // adding the loading text or image
        });
  });

function is_available(){
    //get the username
    var username = $('#username').val();
 
    //make the ajax request to check is username available or not
    $.post("check_username.php", { username: username },
    function(result)
    {
        console.log(result);
        if(result != 0)
        {
            $('#user_msg').html('Not Available');
            document.getElementById("btn_add").disabled = true;
        }
        else
        {
            $('#user_msg').html('<span style="color:#006600;">Available</span>');
            document.getElementById("btn_add").disabled = false;
        }
    });
 
}
</script>
       
    
    </body>
    <?php
    }
    ?>


    
</html>