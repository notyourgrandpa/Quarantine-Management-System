<?php
if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_status = $_POST['txt_edit_status'];
    $txt_edit_ddate = $_POST['txt_edit_ddate'];
    $txt_edit_cname = $_POST['txt_edit_cname'];

    if(isset($_SESSION['role'])){
        $action = 'Updated Patient named '.$txt_edit_cname;
        $iquery = mysqli_query($con,"INSERT INTO tbl_logs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    $update_query = mysqli_query($con,"UPDATE tbl_patients set status= '".$txt_edit_status."', date_discharged = '".$txt_edit_ddate."' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

?>