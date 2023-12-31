<section class="statistic statistic2">
  <div class="container">
    <div class="row col-lg-12">
      
      <?php if (Session::exists('admin')) : ?>
      <div class="col-md-6 col-lg-3">
        <div class="statistic__item bg-info" style="cursor: pointer;" data-toggle="modal" data-target="#studentAssistance">
          <h2 class="number">ADD<br>Student Assistant(SA)</h2>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
        </div>
      </div>
    <?php endif; ?>

 <?php if (Session::exists('admin')) : ?>
      <div class="col-md-6 col-lg-3">
        <a href="?page=studentAssistance">
          <div class="statistic__item bg-info" style="cursor: pointer;">
            <h2 class="number">Student Assistant<br>List</h2>
            <div class="icon">
              <i class="fa fa-list-alt"></i>
            </div>
          </div>
        </a>
      </div>
    <?php endif; ?>
      <div class="col-md-6 col-lg-3">
        <div class="statistic__item bg-info" style="cursor: pointer;" data-toggle="modal" data-target="#addteacher">
          <h2 class="number">ADD<br>Teacher</h2>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="statistic__item bg-info" style="cursor: pointer;" onclick="window.location.href='?page=teacher'">
          <h2 class="number">Teacher Accounts<br>List</h2>
          <div class="icon">
            <i class="fa fa-list-alt"></i>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="statistic__item bg-info" style="cursor: pointer;" data-toggle="modal" data-target="#addLab">
          <h2 class="number">ADD<br>Lab</h2>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="statistic__item bg-info" style="cursor: pointer;" onclick="window.location.href='?page=labs-list'">
          <h2 class="number">Labs<br>List</h2>
          <div class="icon">
            <i class="fa fa-list-alt"></i>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="statistic__item bg-info" style="cursor: pointer;" onclick="window.location.href='?page=parts'">
          <h2 class="number">Peripheral<br>Brands</h2>
          <div class="icon">
            <i class="fa fa-gears (alias)"></i>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="statistic__item bg-info" style="cursor: pointer;" onclick="window.location.href='?page=resources'">
          <h2 class="number">Laboratory<br>Resources</h2>
          <div class="icon">
            <i class="fa fa-gears (alias)"></i>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="statistic__item bg-info" style="cursor: pointer;" onclick="window.location.href='?page=Maintenance_log'">
          <h2 class="number">Maintenance<br>Log</h2>
          <div class="icon">
            <i class="fa fa-gears (alias)"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'management/addteachmodal.php'; ?>
<?php include 'management/studentAssistanceModal.php'; ?>



<script type="text/javascript" src="management/teachers.js"></script>

<?php
if(isset($_GET['addLabErr']) && $_GET['addLabErr'] == 1){
?>
<script>
  alert("Oops! Laboratory already exist, try again");
</script>
<?php }elseif(isset($_GET['addLabErr']) && $_GET['addLabErr'] == 0){?>
  <script>
  alert("Success! Laboratory created successfully");
</script>
<?php }?>