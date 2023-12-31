<?php require_once '../core/db_connect.php'; ?>

<div class="container">
  <div class="row">
      <?php 
       $check_query = "SELECT * FROM `laboratory`;";
       $lab = mysqli_query($con, $check_query);
       //if($lab->num_rows > 0){
       $labs = mysqli_fetch_all($lab, MYSQLI_ASSOC);
       $result = $labs ;
      foreach($result as $key => $laboratory){ 
        $assign_teacher = "SELECT t.Firstname AS 'teacher_fname', t.Lastname AS 'teacher_lname' FROM `assign_lab` AS al INNER JOIN teachers AS t ON t.Id = al.teacher_id WHERE al.lab_id ='".$laboratory['id']."' AND al.status = 1;";
        $assign_result = mysqli_query($con, $assign_teacher);
        $assign_data = mysqli_fetch_all($assign_result, MYSQLI_ASSOC);
        $teacher_fname = (isset($assign_data[0])) ? $assign_data[0]['teacher_fname'] : '';
        $teacher_lname = (isset($assign_data[0])) ? $assign_data[0]['teacher_lname'] : '';
        $teacher_fullname = $teacher_fname.' '.$teacher_lname;
        ?>
        <?php if(isset($laboratory['login_status']) && $laboratory['login_status'] == 1){?>
          <div class="col-lg-3">
            <div class="col-lg-12 statistic__item statistic__item--green" style="padding: 0;">
              <span class="icon">
                <i class="fas fa-power-off"></i>
              </span>
              <div class="row">
                <div class="col-9 lab_status lab1 bg-success" style="height: 180px; padding-left: 13%; padding-top: 4%; cursor: pointer;" onclick="window.location.href = '?page=lab1'">
                  <h2 class="number"><?php print $laboratory['lab_name'];?></h2>
                  <!-- <span class="desc text_status lab1_status"></span><br> -->
                  <span class="desc"><small><small>Teacher: &nbsp;<span class="teacher-lab" id='teacher-lab1'><?php print $teacher_fullname;?></span></small> </small></span><br>
                  <span class="desc"><small><small>Location:&nbsp;<?php print $laboratory['lab_location'];?></small></small></span>
                </div>
                <div class="col-3 bg-success">
                  <div lab="lab1" class="lab1-notif-bell notif-bell pt-2 pb-2 pr-3 justify-content-center row" style="height: 33.3%; background-color: #9effc6; border: 1px solid #595959;"><i class="zmdi zmdi-notifications-active" style="cursor: pointer; font-size: 2.5em;"></i></div>
                  <div lab="lab1" class="notif-socket notif-socket-lab1 pt-2 pb-2 pr-3 justify-content-center row" style="height: 33.3%; background-color: #9effc6; border: 1px solid #595959;"><i class="zmdi zmdi-input-composite" style="cursor: pointer; font-size: 2.5em;"></i></div>
                  <div lab="lab1" class="notif-paper notif-paper-lab1 pt-2 pb-2 pr-3 justify-content-center row" style="height: 33.3%; background-color: #9effc6; border: 1px solid #595959;"><i class="zmdi zmdi-collection-text" style="cursor: pointer; font-size: 2.5em;"></i></div>
                </div>
              </div>
            </div>
          </div>
        <?php }else{?>
          <div class="col-lg-3">
            <div class="col-lg-12 statistic__item statistic__item--green" style="padding: 0;">
              <span class="icon">
                <i class="fas fa-power-off"></i>
              </span>
              <div class="row">
                <div class="col-9 lab_status lab1 bg-secondary" style="height: 180px; padding-left: 13%; padding-top: 4%; cursor: pointer;" onclick="window.location.href = '?page=lab1'">
                  <h2 class="number"><?php print $laboratory['lab_name']?></h2>
                  <!-- <span class="desc text_status lab1_status"></span><br> -->
                  <span class="desc"><small><small>Teacher: &nbsp;<span class="teacher-lab" id='teacher-lab1'><?php print $teacher_fullname;?></span></small> </small></span><br>
                  <span class="desc"><small><small>Location:&nbsp;<?php print $laboratory['lab_location']?></small></small></span>
                </div>
                <div class="col-3 bg-secondary">
                  <div lab="lab1" class="lab1-notif-bell notif-bell pt-2 pb-2 pr-3 justify-content-center row" style="height: 33.3%; background-color: #9effc6; border: 1px solid #595959;"><i class="zmdi zmdi-notifications-active" style="cursor: pointer; font-size: 2.5em;"></i></div>
                  <div lab="lab1" class="notif-socket notif-socket-lab1 pt-2 pb-2 pr-3 justify-content-center row" style="height: 33.3%; background-color: #9effc6; border: 1px solid #595959;"><i class="zmdi zmdi-input-composite" style="cursor: pointer; font-size: 2.5em;"></i></div>
                  <div lab="lab1" class="notif-paper notif-paper-lab1 pt-2 pb-2 pr-3 justify-content-center row" style="height: 33.3%; background-color: #9effc6; border: 1px solid #595959;"><i class="zmdi zmdi-collection-text" style="cursor: pointer; font-size: 2.5em;"></i></div>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      <?php }?>
    
    



<div class="modal fade" id="assistanceModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">

      <form id="request_assistance_form">
        <div class="card-body">
          <div class="card-title">
            <h3 class="text-center title-2">Request Assistance</h3>
          </div>
          <hr>
          <div class="col-12 col-md-12">
            <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Message..." class="form-control"></textarea>
          </div>
          <br>
          <div><hr>
            <input type="hidden" name="lab" value="<?php echo Input::get('lab'); ?>">
            <!-- <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
            <i class="fa fa-bell fa-lg"></i>&nbsp;
            <span id="payment-button-amount">Notify</span>
          </button> -->
        </div>
      </div>
    </form>
  </div>
</div>
</div>

<input type="hidden" id="request_assistance_value" value="0">
<input type="hidden"  id="resources_value" value="0">
<input type="hidden"  id="complaint_value" value="0" >

<audio id="myAudio">

  <source src="../assets/audio/smb_coin.wav" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>

  <?php require_once 'requestAssistanceModal.php'; ?>
  <?php require_once 'requestResourcesModal.php'; ?>

  <!--<script src="dashboard/script.js"></script>-->


  <script type="text/javascript">
  var audio = document.getElementById("myAudio");

  $(document).ready(function () {
    var count_assistance = 0, count_resources = 0, count_complaint = 0


    setInterval(function () {
      check_notif();
    }, 1000);

    function check_notif() {
      $.ajax({
        url: 'dashboard/notif.php',
        method: 'POST',
        dataType: 'json',
        success: function (res) {

          check_online(res.online);

          sound_requestAssistance(res.assistance);
          sound_resources(res.resources);
          sound_complaint(res.complaint);

          if (res.assistance.length >= 1) {
            $.map(res.assistance, function (assist) {
              hasNoti_requestAssistance(assist);
            })
          }


          if (res.resources.length >= 1) {
            $.map(res.resources, function (resources) {
              hasNoti_resources(resources);
            })
          }


          if (res.complaint.length >= 1) {
            $.map(res.complaint, function (complaint) {
              hasNoti_complaint(complaint);
            })
          }

        }
      });
    }

    function check_online(status) {
      // $('.teacher-lab').text('OFFLINE');
      // if (status.length !== 0 ) {
      //   $.map(status,function(get){
      //     $('.'+get.lab+'').removeClass('bg-secondary').addClass('bg-success');
      //     $('#teacher-'+get.lab+'').html('').html(get.teacher);
      //   });
      // } else {

      //   $('.lab_status').addClass('bg-secondary').removeClass('bg-success');

      // }

    }

    function display_status() {

    }


    function sound_requestAssistance(assistance) {
      if (assistance.length > count_assistance) {
        audio.play();
      }

      count_assistance = assistance.length;
    }

    function sound_resources(resources) {
      if (resources.length > count_resources) {
        audio.play();
      }
      count_resources = resources.length;
    }

    function sound_complaint(complaint) {
      if (complaint.length > count_complaint) {
        audio.play();
      }
      count_complaint = complaint.length;
    }


    function hasNoti_requestAssistance(assists) {
      $.map(assists, function (lab) {
        $('.' + lab + '-notif-bell').addClass('has-noti');
      });

    }

    function hasNoti_resources(resources) {
      $.map(resources, function (lab) {
        $('.notif-socket-' + lab + '').addClass('has-noti');
      });
    }

    function hasNoti_complaint(complaint) {
      $.map(complaint, function (lab) {
        $('.notif-paper-' + lab + '').addClass('has-noti');
      });
    }



    $(document).on('click', '.notif-bell', function () {
      var lab = $(this).attr('lab');
      if ($(this).hasClass('has-noti')) {
        $('#lab_id').val(lab);
        $.ajax({
          url: 'dashboard/requestAssistancegetInfo.php',
          method: 'POST',
          dataType: 'json',
          data: {lab: lab},
          success: function (data) {
            if (data == null || data == "") {
              $('.respondBtn').attr('disabled', 'true');
            } else {
              $('.respondBtn').removeAttr('disabled');
              $('#requestTeacherName').text(data.teachername);
              $('#requestMessage').html(data.message);
              $('#request_assistanceId').val(data.requestId);
            }
          }
        });
        $('#requestAssistanceModal').modal('show');
      }
    });



    $(document).on('click', '.notif-socket', function () {
      if ($(this).hasClass('has-noti')) {
        $.ajax({
          url: 'dashboard/getResourceInfo.php',
          method: 'POST',
          data: {lab: $(this).attr('lab')},
          dataType: 'json',
          success: function (data) {

            // clearRequestResourcesModal();
            $('#requestResourcesId').val(data.id);
            $('#requestResourcesLab').val(data.lab);
            $('#requestResourcesTeacher').html(data.teacher);
            $('#requestResourcesNote').html(data.note);
            $('#requestResourcesNeed').html(data.peripherals);
            $('#resources').modal('show');
          }
        });

      }
    });


    $(document).on('submit', '#request_assistance_form', function () {
      $.ajax({
        url: 'dashboard/requestAssistanceReply.php',
        data: $(this).serialize(),
        success: function (res) {
          if (res == 1) {
            alert("Message sent!");
            $('#requestAssistanceModal').modal('hide');
            location.reload();
          }
        }
      });
      return false;
    });



    $(document).on('submit', '#requestReplyModalForm', function () {
      $.ajax({
        url: 'dashboard/requestAssistanceReplyAdd.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function (res) {
          if (res == 1) {
            alert("Request has been sent!");
            $('#resources').modal('hide');
            location.reload();
          }
        }
      });
      return false;
    });

    $('.notif-paper').click(function () {
      if ($(this).hasClass('has-noti')) {
        var lab = $(this).attr('lab');
        window.location = '?page=complaint&lab=' + lab;
      }

    });








  });

  </script>
