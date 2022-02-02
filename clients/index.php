<?php
include_once 'header.php';
?>

<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-80 img-radius" src="../assets/images/avatar-4.jpg" alt="User-Profile-Image">
                        <div class="user-details">
                            <span id="more-details">John Doe<i class="fa fa-caret-down"></i></span>
                        </div>
                    </div>

                    <!-- <div class="main-menu-content">
                        <ul>
                            <li class="more-details">
                                <a href="user-profile.php"><i class="ti-user"></i>View Profile</a>
                                <a href="#!"><i class="ti-settings"></i>Settings</a>
                                <a href="auth-normal-sign-in.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
                <div class="p-15 p-b-0">
                    <form class="form-material">
                        <div class="form-group form-primary">
                            <input type="text" name="footer-email" class="form-control" required="">
                            <span class="form-bar"></span>
                            <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                        </div>
                    </form>
                </div>
                <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Accueil</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="active">
                        <a href="index.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="index.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Components</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="accordion.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Accordion</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Breadcrumbs</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="button.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Button</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="tabs.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Tabs</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="color.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Color</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="label-badge.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Label Badge</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="tooltip.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tooltip</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="typography.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Typography</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="notification.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Notification</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="icon-themify.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Themify</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
                <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Forms &amp; Tables</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li>
                        <a href="form-elements-component.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Form Components</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="bs-basic-table.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Basic Table</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>

                <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Chart &amp; Maps</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li>
                        <a href="chart.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Chart</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="map-google.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Maps</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>


                </ul>

                <div class="pcoded-navigation-label" data-i18n="nav.category.other">Other</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Menu Levels</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="pcoded-content">
            <!-- Page-header start -->
            <!-- <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">Dashboard</h5>
                                          <p class="m-b-0">Welcome to Mega Able</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="index.php"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div> -->
            <!-- Page-header end -->
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="row">
                                <!-- task, page, download counter  start -->
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="text-c-purple">$30200</h4>
                                                    <h6 class="text-muted m-b-0">All Earnings</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="fa fa-bar-chart f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-c-purple">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">% change</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <i class="fa fa-line-chart text-white f-16"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="text-c-green">290+</h4>
                                                    <h6 class="text-muted m-b-0">Page Views</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="fa fa-file-text-o f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-c-green">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">% change</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <i class="fa fa-line-chart text-white f-16"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="text-c-red">145</h4>
                                                    <h6 class="text-muted m-b-0">Task Completed</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="fa fa-calendar-check-o f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-c-red">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">% change</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <i class="fa fa-line-chart text-white f-16"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="text-c-blue">500</h4>
                                                    <h6 class="text-muted m-b-0">Downloads</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="fa fa-hand-o-down f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-c-blue">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">% change</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <i class="fa fa-line-chart text-white f-16"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- task, page, download counter  end -->

                                <!--  sale analytics start -->
                                <div class="col-xl-8 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Sales Analytics</h5>
                                            <span class="text-muted">Get 15% Off on <a href="https://www.amcharts.com/" target="_blank">amCharts</a> licences. Use code "codedthemes" and get the discount.</span>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                    <li><i class="fa fa-trash close-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div id="sales-analytics" style="height: 400px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col">
                                                    <h4>$256.23</h4>
                                                    <p class="text-muted">This Month</p>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="label label-success">+20%</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <canvas id="this-month" style="height: 150px;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card quater-card">
                                        <div class="card-block">
                                            <h6 class="text-muted m-b-15">This Quarter</h6>
                                            <h4>$3,9452.50</h4>
                                            <p class="text-muted">$3,9452.50</p>
                                            <h5>87</h5>
                                            <p class="text-muted">Online Revenue<span class="f-right">80%</span></p>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-blue" style="width: 80%"></div>
                                            </div>
                                            <h5 class="m-t-15">68</h5>
                                            <p class="text-muted">Offline Revenue<span class="f-right">50%</span></p>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-green" style="width: 50%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  sale analytics end -->

                                <!--  project and team member start -->
                                <div class="col-xl-8 col-md-12">
                                    <div class="card table-card">
                                        <div class="card-header">
                                            <h5>Projects</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                    <li><i class="fa fa-trash close-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <div class="chk-option">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label class="check-task">
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                Assigned
                                                            </th>
                                                            <th>Name</th>
                                                            <th>Due Date</th>
                                                            <th class="text-right">Priority</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="chk-option">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label class="check-task">
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-inline-block align-middle">
                                                                    <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h6>John Deo</h6>
                                                                        <p class="text-muted m-b-0">Graphics Designer</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Able Pro</td>
                                                            <td>Jun, 26</td>
                                                            <td class="text-right"><label class="label label-danger">Low</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="chk-option">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label class="check-task">
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-inline-block align-middle">
                                                                    <img src="assets/images/avatar-5.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h6>Jenifer Vintage</h6>
                                                                        <p class="text-muted m-b-0">Web Designer</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Mashable</td>
                                                            <td>March, 31</td>
                                                            <td class="text-right"><label class="label label-primary">high</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="chk-option">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label class="check-task">
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-inline-block align-middle">
                                                                    <img src="assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h6>William Jem</h6>
                                                                        <p class="text-muted m-b-0">Developer</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Flatable</td>
                                                            <td>Aug, 02</td>
                                                            <td class="text-right"><label class="label label-success">medium</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="chk-option">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label class="check-task">
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-inline-block align-middle">
                                                                    <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h6>David Jones</h6>
                                                                        <p class="text-muted m-b-0">Developer</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Guruable</td>
                                                            <td>Sep, 22</td>
                                                            <td class="text-right"><label class="label label-primary">high</label></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="text-right m-r-20">
                                                    <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h5>Team Members</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                    <li><i class="fa fa-trash close-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="align-middle m-b-30">
                                                <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>David Jones</h6>
                                                    <p class="text-muted m-b-0">Developer</p>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-30">
                                                <img src="assets/images/avatar-1.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>David Jones</h6>
                                                    <p class="text-muted m-b-0">Developer</p>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-30">
                                                <img src="assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>David Jones</h6>
                                                    <p class="text-muted m-b-0">Developer</p>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-30">
                                                <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>David Jones</h6>
                                                    <p class="text-muted m-b-0">Developer</p>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-10">
                                                <img src="assets/images/avatar-5.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>David Jones</h6>
                                                    <p class="text-muted m-b-0">Developer</p>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  project and team member end -->
                            </div>
                        </div>
                        <!-- Page-body end -->
                    </div>
                    <div id="styleSelector"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
<!-- Warning Section Ends -->

<!-- Required Jquery -->
<?php include_once "footer.php"; ?>
</body>

</html>