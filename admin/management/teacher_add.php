<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 
	

if ( Teachers::find_by('Authorization',Input::get('authorization')) ) {
	echo -1;
die();
} else {

$teacher = new Teachers();
$teacher->setId(Input::get('Id'));
$teacher->setAuthorization(Input::get('authorization'));
$teacher->setFirstname(Input::get('firstname'));
$teacher->setLastname(Input::get('lastname'));
$teacher->setPassword(md5(Input::get('password')));
$teacher->setYearStarted(Input::get('yearStarted'));
$teacher->setYearEnded(Input::get('yearEnded'));
$teacher->setSemester(Input::get('semester'));
$teacher->setDepartment(Input::get('department'));
$teacher->save();

// Assign Lab to teacher
require_once '../../core/db_connect.php';
$teacher_query = "SELECT * FROM `teachers` ORDER BY `Id` DESC LIMIT 1;";
$teacher_result = mysqli_query($con, $teacher_query);
$teacher_data = mysqli_fetch_all($teacher_result, MYSQLI_ASSOC);

if($teacher_result->num_rows > 0){
	$teacher_id = $teacher_data[0]['Id'];
	$lab_id = Input::get('lab');
	$status = 1;
    $assign_lab = "INSERT INTO `assign_lab`(`teacher_id`, `lab_id`, `status`) VALUES ('$teacher_id','$lab_id','$status');";
    if(!mysqli_query($con, $assign_lab)){
        print "ERROR: ". mysqli_error($con);die;
    }
}
echo 1;

$complete_name = Input::get('firstname')." ". Input::get('lastname');

$logs = new LogsAdmin();
$logs->generate('Admin added new teacher account: ' . $complete_name);
$logs->create();


}
 ?>
