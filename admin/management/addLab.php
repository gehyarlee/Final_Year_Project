<?php  require_once '../../core/db_connect.php'; ?>
<?php ob_clean(); ?>
<?php
if(isset($_POST)){
    $lab_name = $_POST['lab_name'];
    $lab_location = $_POST['lab_location'];
    $status = (isset($_POST['status']) && $_POST['status'] == 'on') ? 1 : 0;
    $lab_name = strtolower($lab_name);
    // check if lab name exists
    $check_query = "SELECT * FROM `laboratory` WHERE `lab_name` = '".$lab_name."';";
    $unique_lab = mysqli_query($con, $check_query);
    if($unique_lab->num_rows > 0){
        // send error status to header
        header("Location:/clams/admin/index.php?page=management&addLabErr=1");
        exit;
    }
    else{
        // insert lab details
       // print $status; die;
        //print_r($_POST);die;
        $login_status = 0;
        $created_date = time();
        $insert_lab = "INSERT INTO `laboratory`(`lab_name`, `lab_location`,`status`,`login_status`,`created_date`) VALUES ('$lab_name','$lab_location','$status','$login_status','$created_date');";
        if(mysqli_query($con, $insert_lab)){
            header("Location:/clams/admin/index.php?page=management&addLabErr=0");
        }
        else{
            print "ERROR: ". mysqli_error($con);die;
        }
    }
    
}









?>