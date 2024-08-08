<?php
if(isset($_POST['btn_add'])){
    $txt_lname = $_POST['txt_lname'];
    $txt_fname = $_POST['txt_fname'];
    $txt_mname = $_POST['txt_mname'];
    $txt_bdate = $_POST['txt_bdate'];

    //$txt_age = $_POST['txt_age'];
    $dateOfBirth = $txt_bdate;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $txt_age = $diff->format('%y');

    $ddl_gender = $_POST['ddl_gender'];

    $txt_nationality = $_POST['txt_nationality'];
    $txt_control = $_POST['txt_control'];
    $txt_dreg = $today;
    $txt_email = $_POST['txt_email'];
    $txt_contact = $_POST['txt_contact'];
    $txt_country = $_POST['txt_country'];

    $txt_sdate = $_POST['txt_sdate'];
    $txt_cdate = $_POST['txt_cdate'];
    $rdays = date_diff(date_create($txt_sdate), date_create($txt_cdate));
    $txt_rdays = $rdays->format('%d');

    $txt_status = $_POST['txt_status'];
    $txt_address = $_POST['txt_address'];
    $txt_facility = $_POST['txt_facility'];
    $txt_remarks = $_POST['txt_remarks'];
    $txt_record = $_POST['txt_record'];
    $txt_hrate = $_POST['txt_hrate'];
    $txt_bpressure = $_POST['txt_bpressure'];
    $txt_temp = $_POST['txt_temp'];
    $txt_osat = $_POST['txt_osat'];
    $txt_nsymptom = $_POST['txt_nsymptom'];
    $txt_fever = $_POST['txt_fever'];
    $txt_sbreath = $_POST['txt_sbreath'];
    $txt_sthroat = $_POST['txt_sthroat'];
    $txt_cough = $_POST['txt_cough'];
    $txt_headache = $_POST['txt_headache'];
    $txt_mjpain = $_POST['txt_mjpain'];
    $txt_diarrhea = $_POST['txt_diarrhea'];
    $txt_vomit = $_POST['txt_vomit'];
    $txt_rnose = $_POST['txt_rnose'];
    $txt_others = $_POST['txt_others'];
    $txt_classification = $_POST['txt_classification'];
   
    
    //Check Null
    function checkAny($var){
        if(!isset($var)){
            $var = 'Any';
            return $var;
        }
        return $var;
    }

    function checkNo($var){
        if(!isset($var)){
            $var = 'No';
            return $var;
        }
        return $var;
    }

    //Vital Signs
    $txt_hrate = checkAny($txt_hrate);
    $txt_bpressure = checkAny($txt_bpressure);
    $txt_temp = checkAny($txt_temp);
    $txt_osat = checkAny($txt_osat);
    //Monitoring
    $txt_nsymptom = checkNo($txt_nsymptom);
    $txt_sbreath = checkNo($txt_sbreath);
    $txt_sthroat = checkNo($txt_sthroat);
    $txt_cough = checkNo($txt_cough);
    $txt_headache = checkNo($txt_headache);
    $txt_mjpain = checkNo($txt_mjpain);
    $txt_diarrhea = checkNo($txt_diarrhea);
    $txt_vomit = checkNo($txt_vomit);
    $txt_rnose = checkNo($txt_rnose);

    $name = basename($_FILES['txt_image']['name']);
    $temp = $_FILES['txt_image']['tmp_name'];
    $imagetype = $_FILES['txt_image']['type'];
    $size = $_FILES['txt_image']['size'];

    $milliseconds = round(microtime(true) * 1000);
    $image = $milliseconds.'_'.$name;

    if(isset($_SESSION['role'])){
        $action = 'Added Resident named '.$txt_lname.', '.$txt_fname.' '.$txt_mname;
        $iquery = mysqli_query($con,"INSERT INTO tbl_logs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    

        if($name != ""){
            if(($imagetype=="image/jpeg" || $imagetype=="image/png" || $imagetype=="image/bmp") && $size<=2048000){
                    if(move_uploaded_file($temp, 'image/'.$image))
                    {
                    $txt_image = $image;
                    $query = mysqli_query($con,"INSERT INTO tbl_patients (
                                        last_name,
                                        first_name,
                                        middle_name,
                                        birthdate,
                                        age,
                                        gender,
                                        nationality,
                                        control_no,
                                        date_registered,
                                        image,
                                        email,
                                        contact,
                                        country,
                                        start_date,
                                        completion_date,
                                        required_days,
                                        status,
                                        address,
                                        facility_area,
                                        remarks,
                                        recorded_by,
                                        heart_rate,
                                        bp,
                                        oxygen_sat,
                                        temp,
                                        no_symptom,
                                        fever,
                                        shortness_breath,
                                        sore_throat,
                                        cough,
                                        headache,
                                        m_pain,
                                        diarrhea,
                                        vomit,
                                        runny_nose,
                                        others,
                                        classification
                                    ) 
                                    values (
                                        '$txt_lname', 
                                        '$txt_fname', 
                                        '$txt_mname',  
                                        '$txt_bdate', 
                                        '$txt_age',
                                        '$ddl_gender',
                                        '$txt_nationality',
                                        '$txt_control',
                                        '$txt_dreg',
                                        '$txt_image',
                                        '$txt_email',
                                        '$txt_contact',
                                        '$txt_country',
                                        '$txt_sdate',
                                        '$txt_cdate',
                                        '$txt_rdays',
                                        '$txt_status',
                                        '$txt_address',
                                        '$txt_facility',
                                        '$txt_remarks',
                                        '$txt_record',                                        
                                        '$txt_hrate', 
                                        '$txt_bpressure', 
                                        '$txt_osat', 
                                        '$txt_temp', 
                                        '$txt_nsymptom',
                                        '$txt_fever',
                                        '$txt_sbreath',
                                        '$txt_sthroat',
                                        '$txt_cough', 
                                        '$txt_headache', 
                                        '$txt_mjpain', 
                                        '$txt_diarrhea', 
                                        '$txt_vomit', 
                                        '$txt_rnose', 
                                        '$txt_others',
                                        '$txt_classification'
                                    )"
                            ) 
                            or die('Error: ' . mysqli_error($con));
                    }
            }
            else
            {
                $_SESSION['filesize'] = 1; 
                header ("location: ".$_SERVER['REQUEST_URI']);
            }
        }
        else
        {
             $txt_image = 'default.png';
             
        $query = mysqli_query($con,"INSERT INTO tbl_patients (
                                        last_name,
                                        first_name,
                                        middle_name,
                                        birthdate,
                                        age,
                                        gender,
                                        nationality,
                                        control_no,
                                        date_registered,
                                        image,
                                        email,
                                        contact,
                                        country,
                                        start_date,
                                        completion_date,
                                        required_days,
                                        status,
                                        address,
                                        facility_area,
                                        remarks,
                                        recorded_by,
                                        heart_rate,
                                        bp,
                                        oxygen_sat,
                                        temp,
                                        no_symptom,
                                        fever,
                                        shortness_breath,
                                        sore_throat,
                                        cough,
                                        headache,
                                        m_pain,
                                        diarrhea,
                                        vomit,
                                        runny_nose,
                                        others,
                                        classification
                                    ) 
                                    values (
                                        '$txt_lname', 
                                        '$txt_fname', 
                                        '$txt_mname',  
                                        '$txt_bdate', 
                                        '$txt_age',
                                        '$ddl_gender',
                                        '$txt_nationality',
                                        '$txt_control',
                                        '$txt_dreg',
                                        '$txt_image',
                                        '$txt_email',
                                        '$txt_contact',
                                        '$txt_country',
                                        '$txt_sdate',
                                        '$txt_cdate',
                                        '$txt_rdays',
                                        '$txt_status',
                                        '$txt_address',
                                        '$txt_facility',
                                        '$txt_remarks',
                                        '$txt_record',                                        
                                        '$txt_hrate', 
                                        '$txt_bpressure', 
                                        '$txt_osat', 
                                        '$txt_temp', 
                                        '$txt_nsymptom',
                                        '$txt_fever',
                                        '$txt_sbreath',
                                        '$txt_sthroat',
                                        '$txt_cough', 
                                        '$txt_headache', 
                                        '$txt_mjpain', 
                                        '$txt_diarrhea', 
                                        '$txt_vomit', 
                                        '$txt_rnose', 
                                        '$txt_others',
                                        '$txt_classification'
                                    )"
                            ) 
                            or die('Error: ' . mysqli_error($con));
             
        }

        
            if($query == true)
            {
                $_SESSION['added'] = 1;
                header ("location: ".$_SERVER['REQUEST_URI']);
            }
    }
        



if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_lname = $_POST['txt_edit_lname'];
    $txt_edit_fname = $_POST['txt_edit_fname'];
    $txt_edit_mname = $_POST['txt_edit_mname'];
    $txt_edit_bdate = $_POST['txt_edit_bdate'];

    //$txt_edit_age = $_POST['txt_edit_age'];
    $dateOfBirth = $txt_edit_bdate;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $txt_edit_age = $diff->format('%y');

    $ddl_edit_gender = $_POST['ddl_edit_gender'];

    $txt_edit_nationality = $_POST['txt_edit_nationality'];
    $txt_edit_control = $_POST['txt_edit_control'];
    $txt_edit_email = $_POST['txt_edit_email'];
    $txt_edit_contact = $_POST['txt_edit_contact'];
    $txt_edit_country = $_POST['txt_edit_country'];

    $txt_edit_sdate = $_POST['txt_edit_sdate'];
    $txt_edit_cdate = $_POST['txt_edit_cdate'];
    $rdays = date_diff(date_create($txt_edit_sdate), date_create($txt_edit_cdate));
    $txt_edit_rdays = $rdays->format('%d');

    $txt_edit_status = $_POST['txt_edit_status'];
    $txt_edit_address = $_POST['txt_edit_address'];
    $txt_edit_facility = $_POST['txt_edit_facility'];
    $txt_edit_remarks = $_POST['txt_edit_remarks'];
    $txt_edit_record = $_POST['txt_edit_record'];
    $txt_edit_hrate = $_POST['txt_edit_hrate'];
    $txt_edit_bpressure = $_POST['txt_edit_bpressure'];
    $txt_edit_temp = $_POST['txt_edit_temp'];
    $txt_edit_osat = $_POST['txt_edit_osat'];
    
    $txt_edit_fever = $_POST['txt_edit_fever'];
    $txt_edit_others = $_POST['txt_edit_others'];
    $txt_edit_classification = $_POST['txt_edit_classification'];
  
    
    //Check Null
    function checkAny($var){
        if(!isset($var)){
            $var = 'Any';
            return $var;
        }
        return $var;
    }

    function checkNo($var){
        if(!isset($var)){
            $var = 'No';
            return $var;
        }
        return $var;
    }

    //Vital Signs
    $txt_edit_hrate = checkAny($txt_edit_hrate);
    $txt_edit_bpressure = checkAny($txt_edit_bpressure);
    $txt_edit_temp = checkAny($txt_edit_temp);
    $txt_edit_osat = checkAny($txt_edit_osat);
    //Monitoring

    $name = basename($_FILES['txt_edit_image']['name']);
    $temp = $_FILES['txt_edit_image']['tmp_name'];
    $imagetype = $_FILES['txt_edit_image']['type'];
    $size = $_FILES['txt_edit_image']['size'];

    $milliseconds = round(microtime(true) * 1000);
    $image = $milliseconds.'_'.$name;

    if(isset($_SESSION['role'])){
        $action = 'Updated Patient named '.$txt_edit_lname.', '.$txt_edit_fname.' '.$txt_edit_mname;
        $iquery = mysqli_query($con,"INSERT INTO tbl_logs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }



    if($name != ""){
            if(($imagetype=="image/jpeg" || $imagetype=="image/png" || $imagetype=="image/bmp") && $size<=2048000){
                if(move_uploaded_file($temp, 'image/'.$image))
                {

                $txt_edit_image = $image;
                $update_query = mysqli_query($con,"UPDATE tbl_patients set 
                                        last_name = '".$txt_edit_lname."',
                                        first_name = '".$txt_edit_fname."',
                                        middle_name = '".$txt_edit_mname."',
                                        birthdate = '".$txt_edit_bdate."',
                                        age = '".$txt_edit_age."',
                                        gender = '".$ddl_edit_gender."',
                                        nationality = '".$txt_edit_nationality."',
                                        control_no = '".$txt_edit_control."',
                                        
                                        image = '".$txt_edit_image."',
                                        email = '".$txt_edit_email."',
                                        contact = '".$txt_edit_contact."',
                                        country = '".$txt_edit_country."',
                                        start_date = '".$txt_edit_sdate."',
                                        completion_date = '".$txt_edit_cdate."',
                                        required_days = '".$txt_edit_rdays."',
                                        status = '".$txt_edit_status."',
                                        address = '".$txt_edit_address."',
                                        facility_area = '".$txt_edit_facility."',
                                        remarks = '".$txt_edit_remarks."',
                                        recorded_by = '".$txt_edit_record."',
                                        heart_rate = '".$txt_edit_hrate."',
                                        bp = '".$txt_edit_bpressure."',
                                        oxygen_sat = '".$txt_edit_osat."',
                                        temp = '".$txt_edit_temp."'
                                        where id = '".$txt_id."'
                                ") or die('Error: ' . mysqli_error($con));
                }
            }
            else{
                $_SESSION['filesize'] = 1; 
                header ("location: ".$_SERVER['REQUEST_URI']);
            }
    }
    else{

        $chk_image = mysqli_query($con,"SELECT * from tbl_patients where id = '".$_POST['hidden_id']."' ");
        $rowimg = mysqli_fetch_array($chk_image);

        $txt_edit_image = $rowimg['image'];
        $update_query = mysqli_query($con,"UPDATE tbl_patients set 
                                        last_name = '".$txt_edit_lname."',
                                        first_name = '".$txt_edit_fname."',
                                        middle_name = '".$txt_edit_mname."',
                                        birthdate = '".$txt_edit_bdate."',
                                        age = '".$txt_edit_age."',
                                        gender = '".$ddl_edit_gender."',
                                        nationality = '".$txt_edit_nationality."',
                                        control_no = '".$txt_edit_control."',
                        
                                        image = '".$txt_edit_image."',
                                        email = '".$txt_edit_email."',
                                        contact = '".$txt_edit_contact."',
                                        country = '".$txt_edit_country."',
                                        start_date = '".$txt_edit_sdate."',
                                        completion_date = '".$txt_edit_cdate."',
                                        required_days = '".$txt_edit_rdays."',
                                        status = '".$txt_edit_status."',
                                        address = '".$txt_edit_address."',
                                        facility_area = '".$txt_edit_facility."',
                                        remarks = '".$txt_edit_remarks."',
                                        recorded_by = '".$txt_edit_record."',
                                        heart_rate = '".$txt_edit_hrate."',
                                        bp = '".$txt_edit_bpressure."',
                                        oxygen_sat = '".$txt_edit_osat."',
                                        temp = '".$txt_edit_temp."'
                                        where id = '".$txt_id."'
                                ") or die('Error: ' . mysqli_error($con));
    }
        
        if($update_query == true){
            $_SESSION['edited'] = 1;
            header("location: ".$_SERVER['REQUEST_URI']);
        }

    }
    

    


if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from tbl_patients where id = '$value' ") or die('Error: ' . mysqli_error($con));
                    
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


if(isset($_POST['btn_edit_symptom'])){
    $txt_id = $_POST['hidden_id'];
    $txt_edit_stat = $_POST['txt_edit_stat'];
    $txt_edit_lname = $_POST['txt_edit_lname'];
    $txt_edit_fname = $_POST['txt_edit_fname'];
    $txt_edit_mname = $_POST['txt_edit_mname'];
    $txt_edit_bdate = $_POST['txt_edit_bdate'];

    $dateOfBirth = $txt_edit_bdate;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $txt_edit_age = $diff->format('%y');

    $ddl_edit_gender = $_POST['ddl_edit_gender'];

    $txt_edit_nationality = $_POST['txt_edit_nationality'];
    $txt_edit_control = $_POST['txt_edit_control'];
    $txt_edit_dreg = $today;
    $txt_edit_email = $_POST['txt_edit_email'];
    $txt_edit_contact = $_POST['txt_edit_contact'];
    $txt_edit_country = $_POST['txt_edit_country'];

    $txt_edit_sdate = $_POST['txt_edit_sdate'];
    $txt_edit_cdate = $_POST['txt_edit_cdate'];
    $rdays = date_diff(date_create($txt_edit_sdate), date_create($txt_edit_cdate));
    $txt_edit_rdays = $rdays->format('%d');

    $txt_edit_status = $_POST['txt_edit_status'];
    $txt_edit_address = $_POST['txt_edit_address'];
    $txt_edit_facility = $_POST['txt_edit_facility'];
    $txt_edit_remarks = $_POST['txt_edit_remarks'];
    $txt_edit_record = $_POST['txt_edit_record'];
    $txt_edit_hrate = $_POST['txt_edit_hrate'];
    $txt_edit_bpressure = $_POST['txt_edit_bpressure'];
    $txt_edit_temp = $_POST['txt_edit_temp'];
    $txt_edit_osat = $_POST['txt_edit_osat'];

    $txt_edit_fever = $_POST['txt_edit_fever'];

    $txt_edit_others = $_POST['txt_edit_others'];
    $txt_edit_classification = $_POST['txt_edit_classification'];
    


    //Check Null
    function checkAny($var){
        if(!isset($var)){
            $var = 'Any';
            return $var;
        }
        return $var;
    }

    function checkNo($var){
        if(!isset($var)){
            $var = 'No';
            return $var;
        }
        return $var;
    }

    //Vital Signs
    $txt_edit_hrate = checkAny($txt_edit_hrate);
    $txt_edit_bpressure = checkAny($txt_edit_bpressure);
    $txt_edit_temp = checkAny($txt_edit_temp);
    $txt_edit_osat = checkAny($txt_edit_osat);
    //Monitoring

    $name = basename($_FILES['txt_edit_image']['name']);
    $temp = $_FILES['txt_edit_image']['tmp_name'];
    $imagetype = $_FILES['txt_edit_image']['type'];
    $size = $_FILES['txt_edit_image']['size'];

    $milliseconds = round(microtime(true) * 1000);
    $image = $milliseconds.'_'.$name;

    if(isset($_POST['txt_edit_nsymptom'])){
        $txt_edit_nsymptom = $_POST['txt_edit_nsymptom'];
    }
    else{
        $txt_edit_nsymptom = "No";
    }
    if(isset($_POST['txt_edit_sbreath'])){
        $txt_edit_sbreath = $_POST['txt_edit_sbreath'];
    }
    else{
        $txt_edit_sbreath = "No";
    }
    if(isset($_POST['txt_edit_sthroat'])){
        $txt_edit_sthroat = $_POST['txt_edit_sthroat'];
    }
    else{
        $txt_edit_sthroat = "No";
    }
    if(isset($_POST['txt_edit_cough'])){
        $txt_edit_cough = $_POST['txt_edit_cough'];
    }
    else{
        $txt_edit_cough = "No";
    }
    if(isset($_POST['txt_edit_headache'])){
        $txt_edit_headache = $_POST['txt_edit_headache'];
    }
    else{
        $txt_edit_headache = "No";
    }
    if(isset($_POST['txt_edit_mjpain'])){
        $txt_edit_mjpain = $_POST['txt_edit_mjpain'];
    }
    else{
        $txt_edit_mjpain = "No";
    }
    if(isset($_POST['txt_edit_diarrhea'])){
        $txt_edit_diarrhea = $_POST['txt_edit_diarrhea'];
    }
    else{
        $txt_edit_diarrhea = "No";
    }
    if(isset($_POST['txt_edit_vomit'])){
        $txt_edit_vomit = $_POST['txt_edit_vomit'];
    }
    else{
        $txt_edit_vomit = "No";
    }
    if(isset($_POST['txt_edit_rnose'])){
        $txt_edit_rnose = $_POST['txt_edit_rnose'];
    }
    else{
        $txt_edit_rnose = "No";
    }

    if(isset($_SESSION['role'])){
        $action = 'Updated Patient named '.$txt_edit_lname.', '.$txt_edit_fname.' '.$txt_edit_mname;
        $iquery = mysqli_query($con,"INSERT INTO tbl_logs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($name != ""){
        if(($imagetype=="image/jpeg" || $imagetype=="image/png" || $imagetype=="image/bmp") && $size<=2048000){
            if(move_uploaded_file($temp, 'image/'.$image))
            {

            $txt_edit_image = $image;
            $update_query = mysqli_query($con,"UPDATE tbl_patients set 
                                    last_name = '".$txt_edit_lname."',
                                    first_name = '".$txt_edit_fname."',
                                    middle_name = '".$txt_edit_mname."',
                                    birthdate = '".$txt_edit_bdate."',
                                    age = '".$txt_edit_age."',
                                    gender = '".$ddl_edit_gender."',
                                    nationality = '".$txt_edit_nationality."',
                                    control_no = '".$txt_edit_control."',
                                    image = '".$txt_edit_image."',
                                    email = '".$txt_edit_email."',
                                    contact = '".$txt_edit_contact."',
                                    country = '".$txt_edit_country."',
                                    start_date = '".$txt_edit_sdate."',
                                    completion_date = '".$txt_edit_cdate."',
                                    required_days = '".$txt_edit_rdays."',
                                    status = '".$txt_edit_status."',
                                    address = '".$txt_edit_address."',
                                    facility_area = '".$txt_edit_facility."',
                                    remarks = '".$txt_edit_remarks."',
                                    recorded_by = '".$txt_edit_record."',
                                    heart_rate = '".$txt_edit_hrate."',
                                    bp = '".$txt_edit_bpressure."',
                                    oxygen_sat = '".$txt_edit_osat."',
                                    temp = '".$txt_edit_temp."',
                                    no_symptom = '".$txt_edit_nsymptom."',
                                    shortness_breath = '".$txt_edit_sbreath."',
                                    sore_throat = '".$txt_edit_sthroat."',
                                    cough = '".$txt_edit_cough."',
                                    headache = '".$txt_edit_headache."',
                                    m_pain = '".$txt_edit_mjpain."',
                                    diarrhea = '".$txt_edit_diarrhea."',
                                    vomit = '".$txt_edit_vomit."',
                                    runny_nose = '".$txt_edit_rnose."',
                                    additional_status = '".$txt_edit_stat."',
                                    classification = '".$txt_edit_classification."'
                                    where id = '".$txt_id."'
                            ");
                            echo '<H1 style="text-align:center;">SAVED SUCESSFULLY!</H1>' ;
            }
            
        }
        else{
            echo '<H1 style="text-align:center;">File size is greater than 2mb or Invalid Format !</H1>' ;
        }
    }
    else{

        $chk_image = mysqli_query($con,"SELECT * from tbl_patients where id = '".$_POST['hidden_id']."' ");
        $rowimg = mysqli_fetch_array($chk_image);

        $txt_edit_image = $rowimg['image'];
        $update_query = mysqli_query($con,"UPDATE tbl_patients set 
                                        last_name = '".$txt_edit_lname."',
                                        first_name = '".$txt_edit_fname."',
                                        middle_name = '".$txt_edit_mname."',
                                        birthdate = '".$txt_edit_bdate."',
                                        age = '".$txt_edit_age."',
                                        gender = '".$ddl_edit_gender."',
                                        nationality = '".$txt_edit_nationality."',
                                        control_no = '".$txt_edit_control."',
                                        image = '".$txt_edit_image."',
                                        email = '".$txt_edit_email."',
                                        contact = '".$txt_edit_contact."',
                                        country = '".$txt_edit_country."',
                                        start_date = '".$txt_edit_sdate."',
                                        completion_date = '".$txt_edit_cdate."',
                                        required_days = '".$txt_edit_rdays."',
                                        status = '".$txt_edit_status."',
                                        address = '".$txt_edit_address."',
                                        facility_area = '".$txt_edit_facility."',
                                        remarks = '".$txt_edit_remarks."',
                                        recorded_by = '".$txt_edit_record."',
                                        heart_rate = '".$txt_edit_hrate."',
                                        bp = '".$txt_edit_bpressure."',
                                        oxygen_sat = '".$txt_edit_osat."',
                                        temp = '".$txt_edit_temp."',
                                        no_symptom = '".$txt_edit_nsymptom."',
                                        shortness_breath = '".$txt_edit_sbreath."',
                                        sore_throat = '".$txt_edit_sthroat."',
                                        cough = '".$txt_edit_cough."',
                                        headache = '".$txt_edit_headache."',
                                        m_pain = '".$txt_edit_mjpain."',
                                        diarrhea = '".$txt_edit_diarrhea."',
                                        vomit = '".$txt_edit_vomit."',
                                        runny_nose = '".$txt_edit_rnose."',
                                        additional_status = '".$txt_edit_stat."',
                                        classification = '".$txt_edit_classification."'
                                        where id = '".$txt_id."'
                                "); echo '<H1 style="text-align:center;">SAVED SUCESSFULLY!</H1>' ;
                                
    }
        
        
    }
    

?>