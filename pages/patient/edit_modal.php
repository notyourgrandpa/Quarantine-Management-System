<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">

<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Patient Information</h4>
        </div>
        <div class="modal-body">';
        
        $edit_query = mysqli_query($con,"SELECT * FROM tbl_patients where id = '".$row['id']."' ");
        $erow = mysqli_fetch_array($edit_query);
        
        echo '
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <input type="hidden" value="'.$erow['id'].'" name="hidden_id" id="hidden_id"/>
                            <label class="control-label">Name:</label><br>
                            <div class="col-sm-4">
                                <input name="txt_edit_lname" class="form-control input-sm" type="text" value="'.$erow['last_name'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_fname" class="form-control input-sm" type="text" value="'.$erow['first_name'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_mname" class="form-control input-sm" type="text" value="'.$erow['middle_name'].'"/>
                            </div> <br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Birthdate:</label>
                            <input name="txt_edit_bdate" class="form-control input-sm input-size" type="date" value="'.$erow['birthdate'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Age:</label>
                            <input name="txt_edit_age" class="form-control input-sm input-size" type="number" value="'.$erow['age'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Gender:</label>
                            <select name="ddl_edit_gender" class="form-control input-sm input-size">
                                <option value="'.$erow['gender'].'"selected="">'.$erow['gender'].'</option>    
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nationality:</label>
                            <input name="txt_edit_nationality" class="form-control input-sm input-size" type="text" value="'.$erow['nationality'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Control No:</label>
                            <input name="txt_edit_control" class="form-control input-sm input-size" type="number" value="'.$erow['control_no'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email:</label>
                            <input name="txt_edit_email" class="form-control input-sm input-size" type="text" value="'.$erow['email'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Contact No.:</label>
                            <input name="txt_edit_contact" class="form-control input-sm input-size" type="text" value="'.$erow['contact'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Country:</label>
                            <input name="txt_edit_country" class="form-control input-sm input-size" type="text" value="'.$erow['country'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Starting Date:</label>
                            <input name="txt_edit_sdate" class="form-control input-sm input-size" type="date" value="'.$erow['start_date'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Required Days</label>
                            <input name="txt_edit_rdays" class="form-control input-sm input-size" type="number" value="'.$erow['required_days'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Completion Date:</label>
                            <input name="txt_edit_cdate" class="form-control input-sm input-size" type="date" value="'.$erow['completion_date'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Status:</label>
                            <select name="txt_edit_status" class="form-control input-sm input-size">
                                <option value="'.$erow['status'].'"selected="">'.$erow['status'].'</option>    
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
                            <input name="txt_edit_address" class="form-control input-sm input-size" type="text" value="'.$erow['address'].'"/>
                        </div>
                            
                        <div class="form-group">
                            <label class="control-label">Facility Area:</label>
                            <select name="txt_edit_facility" class="form-control input-sm input-size">
                                <option value="'.$erow['facility_area'].'" selected>'.$erow['facility_area'].'</option>
                                <option value="Isolation Room #1">Isolation Room #1</option>
                                <option value="Isolation Room #2">Isolation Room #2</option>
                                <option value="Isolation Room #3">Isolation Room #3</option>
                                <option value="Isolation Room #4">Isolation Room #4</option>
                                <option value="Isolation Room #5">Isolation Room #5</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Remarks:</label>
                            <input name="txt_edit_remarks" class="form-control input-sm input-size" type="text" value="'.$erow['remarks'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Recorded by:</label><br>
                            <select name="txt_edit_record" class="form-control input-sm input-size">
                                <option value="'.$erow['recorded_by'].'" selected="">'.$erow['recorded_by'].'</option>
                                <option value="Aoyama">Aoyama</option>
                                <option value="Hinata">Hinata</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label" >Vital Signs:</label><br>
                            <div class="col-sm-4">
                                <label class="control-label" style="font-size: 12px">Heart Rate:</label>
                                    <input name="txt_edit_hrate" class="form-control input-sm" type="text" value="'.$erow['heart_rate'].'"/>
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label" style="font-size: 12px">Blood Pressure:</label>
                                    <input name="txt_edit_bpressure" class="form-control input-sm" type="text" value="'.$erow['bp'].'"/>
                            </div>

                            <div class="col-sm-4">
                                <label class="control-label" style="font-size: 12px">Temperature:</label>
                                    <input name="txt_edit_temp" class="form-control input-sm" type="text" value="'.$erow['temp'].'"/>
                            </div>
                            
                            <div class="col-sm-4">
                                <label class="control-label" style="font-size: 12px">Oxygen Saturation:</label>
                                    <input name="txt_edit_osat" class="form-control input-sm" type="text" value="'.$erow['oxygen_sat'].'"/>
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
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>
';?>

    