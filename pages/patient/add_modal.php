<!-- ========================= MODAL ======================= -->
<div id="addCourseModal" class="modal fade">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="modal-dialog modal-lg" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Patients</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label" >Name:</label><br>
                                        <div class="col-sm-4">
                                            <input name="txt_lname" class="form-control input-sm" type="text" placeholder="Lastname"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="txt_fname" class="form-control input-sm col-sm-4" type="text" placeholder="Firstname"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="txt_mname" class="form-control input-sm col-sm-4" type="text" placeholder="Middlename"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Birthdate:</label>
                                        <input name="txt_bdate" class="form-control input-sm input-size" type="date" placeholder="Birthdate"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">Age:</label>
                                        <input name="txt_age" class="form-control input-sm input-size" type="number" placeholder="Age"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Gender:</label>
                                        <select name="ddl_gender" class="form-control input-sm input-size">
                                            <option selected="" disabled="">-Select Gender-</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Nationality:</label>
                                        <input name="txt_nationality" class="form-control input-sm input-size" type="text" placeholder="Nationality"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Control No.:</label>
                                        <input name="txt_control" class="form-control input-sm input-size" type="number" value="1234"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Email:</label>
                                        <input name="txt_email" class="form-control input-sm input-size" type="text" placeholder="Email"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Contact No.:</label>
                                        <input name="txt_contact" class="form-control input-sm input-size" type="text" placeholder="Contact No."/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Country:</label>
                                        <input name="txt_country" class="form-control input-sm input-size" type="text" placeholder="Country"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" id ="sdate">Start Date:</label>
                                        <input name="txt_sdate" class="form-control input-sm input-size" type="date" placeholder="Start Date"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label" id ="rdate">Required Days:</label>
                                        <input name="txt_rdays" class="form-control input-sm input-size" type="number" placeholder="Required Days"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" id ="cdate">Completion Date:</label>
                                        <input name="txt_cdate" class="form-control input-sm input-size" type="date" placeholder="Completion Date"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">Status:</label>
                                        <select name="txt_status" class="form-control input-sm input-size">
                                            <option selected="" disabled="">-Select Status-</option>
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
                                        <input name="txt_address" class="form-control input-sm input-size" type="text" placeholder="Address"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">Facility Area:</label>
                                        <select name="txt_facility" class="form-control input-sm input-size">
                                            <option selected="" disabled="">-Select Facility Area-</option>
                                            <?php
                                                
                                                $squery = mysqli_query($con, "SELECT *,CONCAT(area_name) as isolationroom FROM tbl_facility");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                            <option value="'.$row['isolationroom'].'">'.$row['isolationroom'].'</option>
                                                    ';
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Remarks:</label>
                                        <input name="txt_remarks" class="form-control input-sm input-size" type="text" placeholder="Remarks"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Recorded by:</label>
                                        <select name="txt_record" class="form-control input-sm input-size">
                                            <option selected="" disabled="">-Select Staff-</option>
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
                                                <input name="txt_hrate" class="form-control input-sm" type="text" value="Any"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Blood Pressure:</label>
                                                <input name="txt_bpressure" class="form-control input-sm" type="text" value="Any"/>
                                        </div>

                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Temperature:</label>
                                                <input name="txt_temp" class="form-control input-sm" type="text" value="Any"/>
                                        </div>
                                      
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Oxygen Saturation:</label>
                                                <input name="txt_osat" class="form-control input-sm" type="text" value="Any"/>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" >Monitoring:</label><br>
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">No Symptoms</label>
                                                <input name="txt_nsymptom" class="form-control input-sm" type="checkbox" value="Yes"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Shortness of Breath</label>
                                                <input name="txt_sbreath" class="form-control input-sm" type="checkbox" value="Yes"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Sore Throat</label>
                                                <input name="txt_sthroat" class="form-control input-sm" type="checkbox" value="Yes"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Cough:</label>
                                                <input name="txt_cough" class="form-control input-sm" type="checkbox" value="Yes"/>
                                        </div>

                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Headache</label>
                                                <input name="txt_headache" class="form-control input-sm" type="checkbox" value="Yes"/>
                                        </div>
                                      
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Muscle/joint Pain:</label>
                                                <input name="txt_mjpain" class="form-control input-sm" type="checkbox" value="Yes"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Diarrhea</label>
                                                <input name="txt_diarrhea" class="form-control input-sm" type="checkbox" value="Yes"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Vomit:</label>
                                                <input name="txt_vomit" class="form-control input-sm" type="checkbox" value="Yes"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Runny Nose:</label>
                                                <input name="txt_rnose" class="form-control input-sm" type="checkbox" value="Yes"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Fever:</label>
                                                <input name="txt_fever" class="form-control" type="name"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="control-label" style="font-size: 12px">Others:</label>
                                                <input name="txt_others" class="form-control input-sm" type="name"/>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Image:</label>
                                        <input name="txt_image" class="form-control input-sm" type="file" />
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Classification:</label>
                                        <select name="txt_classification" class="form-control input-sm input-size">
                                            <option selected="" disabled="">-Select Classification-</option>
                                            <option>Asymptomatic</option>
                                            <option>Mild</option>
                                            <option>Moderate</option>
                                            <option>Severe</option>
                                            <option>Critical</option>
                                            </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_add" id="btn_add" value="Add Patient"/>
                    </div>
                </div>
              </div>
              </form>
            </div>

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
                case 13:    //enter
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