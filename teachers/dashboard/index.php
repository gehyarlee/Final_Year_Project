<div class="container">

  <div class="row">
    <div class="col-lg-3">
      <div class="col-lg-12">
        <div class="au-card au-card--no-shadow au-card--no-pad">
          <div class="au-card-title">
            <div class="bg-overlay bg-overlay--blue"></div>
            <h3>
              <i class="zmdi zmdi-comment-text"></i>Logs  <a href="" id="<?php echo Input::get('lab'); ?>" class="clearLogs"><i class="zmdi zmdi-refresh-alt"></i></a>
            </h3>
          </div>
          <div class="au-inbox-wrap js-inbox-wrap" style="height: 500px;">
            <div class="au-message js-list-load">
              <div class="au-message-list">
                <?php foreach (Logs::getMax15(Session::get('teachers'),Input::get('lab')) as $log ): ?>
                <?php $teacher = Teachers::find_by_id($log->getTeacherId()); ?>
                <div class="message__item">
                  <div class="au-message__item-inner">
                      <div class="text">
                         <label><?php echo readableDate($log->getDate()); ?></label><br>
                        <label><?php echo $log->getTime(); ?></label>
                        <h6 class="name"><?php echo $teacher->teacherName(); ?></h6>
                        <small><?php echo $log->getMessage();?></small>
                      </div>
                  </div>
                </div>
                <hr>
              <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-9">
      <div class="row">
      <?php 
       require_once '../core/db_connect.php';
      $teacher_id = Session::get('teachers');
       $check_query =  "SELECT l.lab_name AS 'lab_name',l.lab_location AS 'lab_location' FROM `assign_lab` AS al INNER JOIN laboratory AS l ON l.id = al.lab_id WHERE al.teacher_id ='".$teacher_id."' AND al.status = 1;";
       $lab = mysqli_query($con, $check_query);
       //print_r($labs);
       //if($lab->num_rows > 0){
      $labs = mysqli_fetch_all($lab, MYSQLI_ASSOC);
        ?>
        <?php if(isset($labs) && !empty($labs)): ?>
        <div class="col-lg-4">
          <div class="statistic__item lab_status lab1 <?php echo LabStatus::check_active('lab1'); ?>">
            <h2 class="number"><?php print $labs[0]['lab_name'];?></h2>
            <span class="desc lab1_status text_status ">Status: <?php echo  LabStatus::status_name('lab1'); ?></span><br>
            <span class="desc"><small><small><?php print $labs[0]['lab_location'];?></small></small></span>
            <div class="icon">
              <i class="fas  fa-power-off"></i>
            </div>
          </div>
        </div>
        <?php endif ?>
      </div>
    </div>

  </div>
</div>



