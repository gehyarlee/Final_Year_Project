<?php  require_once '../core/init.php'; ?>
<?php ob_clean(); ?>
<?php

$teacher  = Teachers::findByAuthoPassword(Input::get('authorizationId'),md5(Input::get('password')));


if ($teacher) {
	Session::put('teachers',$teacher->getId());
	//$lab = new LabStatus();
	//$lab->setTeacherId($teacher->getId());
	//$lab->setLab(Input::get('select'));
	//$lab->setStatus('online');

	//if ($lab->beingUse() || $lab->youLoginOtherComputer()) {
		//echo -1;
	//}
	//else {
		//$lab->create();
		// Update the lab online status when the teacher logs in
		require_once '../core/db_connect.php';
		$teacher_id = $teacher->getId();
		$get_assigned_lab = "SELECT * FROM `assign_lab` WHERE `teacher_id` = '".$teacher_id."' AND `status`= 1 ;";
       	$assigned_lab = mysqli_query($con, $get_assigned_lab);
       	if($assigned_lab->num_rows > 0){
        	$lab_data = mysqli_fetch_all($assigned_lab, MYSQLI_ASSOC);
			$lab_id = $lab_data[0]['lab_id'];
			$update_query = "UPDATE `laboratory` SET `login_status`=1 WHERE `id` = '".$lab_id."' ;";
			if(!mysqli_query($con, $update_query)){
				print "ERROR: ". mysqli_error($con);die;
			}
		}
		echo 1;
	}
	else {
		echo 0;
	}


?>
