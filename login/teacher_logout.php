<?php  require_once '../core/init.php'; ?>
<?php ob_clean(); ?>
<?php
$lab = new LabStatus();
$lab->setTeacherId(Session::get('teachers'));
// Update the lab online status when the teacher logs out
require_once '../core/db_connect.php';
$teacher_id = Session::get('teachers');
$get_assigned_lab = "SELECT * FROM `assign_lab` WHERE `teacher_id` = '".$teacher_id."' AND `status`= 1 ;";
   $assigned_lab = mysqli_query($con, $get_assigned_lab);
   if($assigned_lab->num_rows > 0){
    $lab_data = mysqli_fetch_all($assigned_lab, MYSQLI_ASSOC);
    $lab_id = $lab_data[0]['lab_id'];
    $update_query = "UPDATE `laboratory` SET `login_status`=0 WHERE `id` = '".$lab_id."' ;";
    if(!mysqli_query($con, $update_query)){
        print "ERROR: ". mysqli_error($con);die;
    }
}
//$lab->LogoutLaboratory();
Session::delete('teachers');
session_destroy();
Redirect::to('login.php');
?>
