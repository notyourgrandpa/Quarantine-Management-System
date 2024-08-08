<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Status</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Complete Name: </label>
                    <input readonly name="txt_edit_cname" class="form-control input-sm" type="text" value="'.$row['cname'].'" />
                </div>
                
                <div class="form-group">
                    <label>Status : </label>
                    <select name="txt_edit_status" class="form-control input-sm" type="text"/>
                    <option value="'.$row['status'].'"selected="">'.$row['status'].'</option>    
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
                    <label>Date Discharged: </label>
                    <input name="txt_edit_ddate" class="form-control input-sm" type="date" value="'.$row['date_discharged'].'" />
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
</div>';?>