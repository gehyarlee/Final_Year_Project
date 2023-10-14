<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="title-5 m-b-35">Labs List</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-12">
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Lab Name</th>
                            <th>Lab Location</th>
                            <th>Assigned</th>
                            <th>Assigned To</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
<?php $count =1; ?>
<?php require_once '../core/db_connect.php'; ?>
<?php 
    $check_query = "SELECT * FROM `laboratory`;";
    $lab = mysqli_query($con, $check_query);
    //if($lab->num_rows > 0){
    $labs = mysqli_fetch_all($lab, MYSQLI_ASSOC);
    $result = $labs ;
    if(!empty($result)){
    foreach($result as $key => $laboratory){ 
        $assign_teacher = "SELECT t.Firstname AS 'teacher_fname', t.Lastname AS 'teacher_lname' FROM `assign_lab` AS al INNER JOIN teachers AS t ON t.Id = al.teacher_id WHERE al.lab_id ='".$laboratory['id']."' AND al.status = 1;";
        $assign_result = mysqli_query($con, $assign_teacher);
        $assign_data = mysqli_fetch_all($assign_result, MYSQLI_ASSOC);
        $teacher_fname = (isset($assign_data[0])) ? $assign_data[0]['teacher_fname'] : '';
        $teacher_lname = (isset($assign_data[0])) ? $assign_data[0]['teacher_lname'] : '';
        $teacher_fullname = $teacher_fname.' '.$teacher_lname;
        $lab_status = (isset($laboratory['status']) && $laboratory['status'] == 1 ) ? 'Active' : 'Inactive';
         
        if(isset($assign_data) && !empty($assign_data) ){
            $assign_status = 'Yes';
            $assign_text = '<button class="btn btn-danger btn-sm" id="">Unassign</button>'; 
        }else{
            $assign_status = 'No';
            $assign_text = '<button class="btn btn-success btn-sm" id="">Assign</button>';
        }
        ?>

        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $laboratory['lab_name']; ?></td>
            <td><?php echo $laboratory['lab_location']; ?></td>
            <td><?php echo $assign_status; ?></td>
            <td><?php echo $teacher_fullname; ?></td>
            <td><?php echo $lab_status; ?></td>
            <td>
                <?php echo $assign_text; ?>
                <button class="btn btn-info btn-sm btn_teacherEdit" on="<?php echo ''; ?>">Edit</button>
                <?php if (Session::exists('admin')): ?>
                    <button class="btn btn-danger btn-sm btn_teacherDelete" id="<?php echo ''; ?>">Delete</button>
                <?php endif; ?>
            </td>
        </tr>
        <?php $count++; ?>
    <?php } }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once 'lab_edit.php'; ?>
<?php //require_once 'teacher/modal_edit.php'; ?>

<script type="text/javascript" src="teacher/script.js"></script>
