<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>CLAMS</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="units.css">
    <link rel="stylesheet" type="text/css" href="monitorstatus.css">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

<!----------------------- HEADER DESKTOP----------------------------------------------------------->

<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo"><h2>
                <a href="index.php" class="text-info">
                <img src="images/icon/logo-mini.png" alt="CoolAdmin"/>&nbsp;L&nbsp;A&nbsp;M&nbsp;S
                </a></h2>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">
                <li>
                <a href="management.php">
                <i class="fas fa-trophy"></i>
                <span class="bot-line"></span>Management</a>
                </li>
                <li class="has-sub">
                <a href="#">
                <i class="fa fa-file-text"></i>SA Schedules
                <span class="bot-line"></span>
                </a>
                <ul class="header3-sub-list list-unstyled">
                <li>
                <a href="sasched.php">Alexander</a>
                </li>
                </ul>
                </li>
                <li class="has-sub">
                <a href="#">
                <i class="fa fa-file-text"></i>ComLab Reports
                <span class="bot-line"></span>
                </a>
                <ul class="header3-sub-list list-unstyled">
                <li>
                <a href="maintereports.php">Maintenance Reports <span class="badge badge-warning">5</span></a>
                </li>
                <li>
                <a href="compreports.php">Complaint Reports <span class="badge badge-warning">5</span></a>
                </li>
                <li>
                <a href="sourcereports.php">Source Request Reports <span class="badge badge-warning">5</span></a>
                </li>
                </ul>
                </li>
                <li>
                <a href="#">
                <i class="fas fa-users"></i>
                <span class="bot-line"></span>User Logs</a>
                </li>
                </ul>
            </div>
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                        <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                            <div class="notifi__title">
                            <p>You have 3 Notifications</p>
                            </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                            <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                            <p>You got a email notification</p>
                            <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                            <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                            <p>Your account has been blocked</p>
                            <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c3 img-cir img-40">
                            <i class="zmdi zmdi-file-text"></i>
                            </div>
                            <div class="content">
                            <p>You got a new file</p>
                            <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item defaultcursor account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                    <div class="content">
                        <a class="js-acc-btn" href="#">john doe</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                            <div class="image">
                                <a href="#">
                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="name">
                                <a href="#">Administrator</a>
                                </h5>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                            <a href="#">
                            <i class="fa fa-group"></i>Accounts</a>
                            </div>
                        </div>
                        <div class="account-dropdown__footer">
                            <a href="#">
                            <i class="fa fa-share"></i>Logout</a>
                        </div>
                        <div class="account-dropdown__footer">
                            <a href="shutdown.php">
                            <i class="zmdi zmdi-power"></i>Shutdown</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!----------------------- END HEADER DESKTOP---------------------------------------------------------->

        <!-- HEADER MOBILE-->
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

<!-- Laboratory COMLAB 4PC-->
            <section class="statistic statistic2">
              <div class="container">
                <div class="row" style="height: 100%;">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-9">
                    <div class="row">
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;" data-toggle="modal" data-target="#unitmodal1">
                        <div class="card-body">
                          <h5 class="card-title">PC 46</h5>
                        </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 45</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 44</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 43</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 42</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 41</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 40</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 39</h5>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;" data-toggle="modal" data-target="#unitmodal1">
                        <div class="card-body">
                          <h5 class="card-title">PC 31</h5>
                        </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 32</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 33</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 34</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 35</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 36</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 37</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 38</h5>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;" data-toggle="modal" data-target="#unitmodal1">
                        <div class="card-body">
                          <h5 class="card-title">PC 30</h5>
                        </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 29</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 28</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 27</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 26</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 25</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 24</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 23</h5>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;" data-toggle="modal" data-target="#unitmodal1">
                        <div class="card-body">
                          <h5 class="card-title">PC 15</h5>
                        </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 16</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 17</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 18</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 19</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 20</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 21</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 22</h5>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;" data-toggle="modal" data-target="#unitmodal1">
                        <div class="card-body">
                          <h5 class="card-title">PC 14</h5>
                        </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 13</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 12</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 11</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 10</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 9</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 8</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 7</h5>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;" data-toggle="modal" data-target="#unitmodal1">
                        <div class="card-body">
                          <h5 class="card-title">PC 6</h5>
                        </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 5</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 4</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 3</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 2</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2 lab1" style="height: 60px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">PC 1</h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2" style="height: 60px; width: 100px; opacity: 0.0">
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2" style="height: 60px; width: 100px; opacity: 0.0">
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="card text-center mr-2" style="height: 50px; width: 100px;" data-toggle="modal" data-target="#unitmodal1">
                        <div class="card-body">
                          <h5 class="card-title">Door</h5>
                        </div>
                      </div>
                      <div class="card text-center mr-2" style="height: 60px; width: 100px; opacity: 0.0">
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2" style="height: 60px; width: 100px; opacity: 0.0">
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2" style="height: 60px; width: 100px; opacity: 0.0">
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2" style="height: 60px; width: 100px; opacity: 0.0">
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2" style="height: 60px; width: 100px; opacity: 0.0">
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2" style="height: 60px; width: 100px; opacity: 0.0">
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                          </div>
                      </div>
                      <div class="card text-center mr-2" style="height: 50px; width: 100px;">
                            <div class="card-body">
                              <h5 class="card-title">Door</h5>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                      <div class="card text-center mr-2 lab1" style="height: 80px; width: 100px;">
                            <div class="card-body">
                              <h6 class="card-title">Teacher PC</h6>
                          </div>
                      </div>
                      <div class="card text-center" style="height: 50px; width: 250px; transform: rotate(90deg); margin-top: 100%; margin-bottom: 0px;">
                      <div class="card-body w-100">
                        <h6 class="card-title">White Board</h6>
                      </div>
                    </div>
                  </div>
                </div>
            </section>
            <!-- END Laboratory PC-->
            <section>
                <div class="container">
                    <div class="row col-lg-12">
                    <label class="col-lg-3">Teacher:</label>
                    <label class="col-lg-2">Subject:</label>
                    <label class="col-lg-2">Section:</label>
                    <label class="col-lg-1">Time In:</label>
                    <label class="col-lg-2">Time Out:</label>
                    <label class="col-lg-2">Day:</label>
                    </div>
                </div>
            </section>
<!-- END Laboratory PC-->

<!-------------------- COPYRIGHT---------------------------------------------->
<section class="p-t-60 p-b-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2023 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------------------- END COPYRIGHT---------------------------------------------->
        </div>

    </div>
</body>
<!---------------------------------- This is script ---------------------------------->
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
<!---------------------------------- This is script ---------------------------------->

</html>