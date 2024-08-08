
<!-- ========================= MODAL ======================= -->
<div id="detailsModal<?php echo $row['id'];?>" class="modal fade">
<form method="post">
  <div class="modal-dialog " >
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Details of <?php echo '<b>'.$row['cname'].'</b>';?></h4>
        </div>
        <div class="modal-body">
            
            <div class="row">
                
                <?php
                echo '
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name:</label><br>
                        '.$row['cname'].'
                    </div>
                    <div class="form-group">
                        <label>Birthdate:</label><br>
                        '.$row['birthdate'].'
                    </div>
                    <div class="form-group">
                        <label>Age:</label><br>
                        '.$row['age'].' years old
                    </div>
                    <div class="form-group">
                        <label>Gender:</label><br>
                        '.$row['gender'].'
                    </div>
                    <div class="form-group">
                        <label>Nationality:</label><br>
                        '.$row['nationality'].'
                    </div>
                    <div class="form-group">
                        <label>Control No.:</label><br>
                        '.$row['control_no'].'
                    </div>
                    <div class="form-group">
                        <label>Date Registered:</label><br>
                        '.$row['date_registered'].'
                    </div>
                    <div class="form-group">
                            <label>&nbsp;</label><br>
                    </div>                     
                    <div class="form-group">
                        <label>Contact Details:</label><br>                            
                            <label>&ensp;Email:</label><br>
                            &ensp;'.$row['email'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Contact No.:</label><br>
                        &ensp;'.$row['contact'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Country:</label><br>
                        &ensp;'.$row['country'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Permanent Address:</label><br>
                        &ensp;'.$row['address'].'
                    </div>
                    <div class="form-group">
                            <label>&nbsp;</label><br>
                    </div>        
                    <div class="form-group">
                        <label>Remarks:</label><br>
                        '.$row['remarks'].'
                    </div>
                    <div class="form-group">
                        <label>Recorded by::</label><br>
                        '.$row['recorded_by'].'
                    </div>
                    <div class="form-group">
                        <label>Doctor\'s Note:</label><br>
                        <p style="white-space: pre-line">'.$row['additional_status'].'</p>
                    </div>
                   
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Start Date:</label><br>
                        '.$row['start_date'].'
                    </div>
                    <div class="form-group">
                        <label>Completion Date:</label><br>
                        '.$row['completion_date'].'
                    </div>
                    <div class="form-group">
                        <label>Required Days:</label><br>
                        '.$row['required_days'].'
                    </div>
                    <div class="form-group">
                        <label>Status:</label><br>
                        '.$row['status'].'
                    </div>
                    <div class="form-group">
                        <label>Facility Area:</label><br>
                        '.$row['facility_area'].'
                    </div>
                    <div class="form-group">
                            <label>&nbsp;</label><br>
                    </div>
                    <div class="form-group">
                        <label>Vital Signs:</label><br>                            
                    </div>
                    <div class="form-group">
                        <label>&ensp;Heart Rate:</label><br>
                        &ensp;'.$row['heart_rate'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Blood Pressure:</label><br>
                        &ensp;'.$row['bp'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Oxygen Saturation:</label><br>
                        &ensp;'.$row['oxygen_sat'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Temperature :</label><br>
                        &ensp;'.$row['temp'].'
                    </div>
                    <div class="form-group">
                            <label>&nbsp;</label><br>
                    </div>
                    <div class="form-group">
                        <label>Monitoring:</label><br>                            
                    </div>
                    <div class="form-group">
                        <label>&ensp;No Symptoms :</label><br>
                        &ensp;'.$row['no_symptom'].'
                    </div>                    
                    <div class="form-group">
                        <label>&ensp;Shortness of Breath :</label><br>
                        &ensp;'.$row['shortness_breath'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Sore throat :</label><br>
                        &ensp;'.$row['sore_throat'].'
                    </div>                    
                    <div class="form-group">
                        <label>&ensp;Cough :</label><br>
                        &ensp;'.$row['cough'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Headache :</label><br>
                        &ensp;'.$row['headache'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Muscle/Joint Pain :</label><br>
                        &ensp;'.$row['m_pain'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Diarrhea :</label><br>
                        &ensp;'.$row['diarrhea'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Vomit/Nausea :</label><br>
                        &ensp;'.$row['vomit'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Runny Nose :</label><br>
                        &ensp;'.$row['runny_nose'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Fever :</label><br>
                        &ensp;'.$row['fever'].'
                    </div>
                    <div class="form-group">
                        <label>&ensp;Others :</label><br>
                        &ensp;'.$row['others'].'
                    </div>
                </div>';
                ?>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Close"/>
        </div>
    </div>
  </div>
  </form>
</div>