<!-- Addddddddddd Tttteeeeeeaaaaaaacccccchhhhhhhhheeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->
<?php require_once '../core/db_connect.php'; ?>
<?php 
       $assign_query = "SELECT * FROM `assign_lab` WHERE `status` = 1;";
       $a_lab = mysqli_query($con, $assign_query);
       $assign_lab = mysqli_fetch_all($a_lab, MYSQLI_ASSOC);
       $assign_result = $assign_lab;
       $labs = [];
      if(!empty($assign_lab)){
        $assign_lab = $assign_lab;
      }else{
        $assign_lab['lab_id'] = 0;
      }
        foreach($assign_lab as $as_lab){ 
          $lab_query = "SELECT * FROM `laboratory` WHERE `id` != '".$as_lab['lab_id']."';";
          $lab_data = mysqli_query($con, $lab_query);
          //if($lab->num_rows > 0){
          $labs = mysqli_fetch_all($lab_data, MYSQLI_ASSOC);
        }
      
      //print_r($labs);
      ?>
<div class="modal fade" id="addteacher" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form id="addTeacherForm">
        <div class="card-body">
          <div class="card-title">
            <h3 class="text-center title-2">Add Teacher Account</h3>
          </div>
          <hr>
          <br>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">Schoolyear & Semester:</label>
            </div>
            <div class="col-md-4 input-group">
              <input class="form-control" type="text" placeholder="started" name="yearStarted" id="yearStarted" required>
              <input class="form-control" type="text" placeholder="ended" name="yearEnded" id="yearEnded" required>
            </div><!--
              <div class="col-md-2">
              <input class="form-control" type="text" placeholder="ended" name="">
            </div> -->
            <div class="col-md-4">
              <select name="semester" id="select" class="form-control" required>
                <option value="">Select Semester</option>
                <option value="1st">1st Semester</option>
                <option value="2nd">2nd Semester</option>
                <option value="summer">Summer</option>
              </select>
            </div>
          </div>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">First & Last Name:</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" placeholder="First Name" name="firstname" id="firstname" required>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" placeholder="Last Name" name="lastname" id="lastname" required>
            </div>
          </div>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">Authorization:</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" placeholder="Id Number" name="authorization" id="authorization" required>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" placeholder="password" name="password" id="password" required>
            </div>
          </div>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">Department:</label>
            </div>
            <div class="col-md-4">
              <div class="">
                <select name="department" id="department" class="form-control" required>
                  <option value="">Select Department</option>
                  <option value="CICT">CICT</option>
                  <option value="HRM">HRM</option>
                  <option value="ArtSciences">Arts & Sciences</option>
                  <option value="Criminology">Criminology</option>
                  <option value="Education">Education</option>
                  <option value="Engineering">Engineering</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="">
                <select name="lab" id="lab" class="form-control" required>
                  <option value="">Select Lab</option>
                  <?php foreach($labs as $lab){ ?>
                  <option value="<?php print $lab['id']?>"><?php print $lab['lab_name']?></option>
                  <?php }?>
                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class="row col-md-12 justify-content-center">
            <div class="col-md-6">
              <button type="submit" class="btn btn-md btn-success btn-block">
                <i class="fa fa-plus fa-md"></i>&nbsp;
                <span id="payment-button-amount">Add Account</span>
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Lab Form -->
<div class="modal fade" id="addLab" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form id="addLabForm" method="POST" action="management/addLab.php">
        <div class="card-body">
          <div class="card-title">
            <h3 class="text-center title-2">Add Lab</h3>
          </div>
          <hr>
          <br>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">Lab Name:</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" placeholder="Lab Name" name="lab_name" id="lab_name" required>
            </div>
          </div>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">Location:</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" placeholder="Location" name="lab_location" id="lab_location" required>
            </div>
          </div>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              
            </div>
            <div class="col-md-4">
              <input class="" type="checkbox" name="status" checked>
              <label for="checkbox">Active</label>
            </div>
          </div>
          <hr>
          <div class="row col-md-12 justify-content-center">
            <div class="col-md-6">
              <button type="submit" class="btn btn-md btn-success btn-block">
                <i class="fa fa-plus fa-md"></i>&nbsp;
                <span id="payment-button-amount">Add Lab</span>
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>