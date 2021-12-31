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
                                <img class="img-80 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                <div class="user-details">
                                    <span id="more-details">John Doe<i class="fa fa-caret-down"></i></span>
                                </div>
                            </div>
                        
                            <div class="main-menu-content">
                                <ul>
                                    <li class="more-details">
                                        <a href="user-profile.php"><i class="ti-user"></i>View Profile</a>
                                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                                        <a href="auth-normal-sign-in.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
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
                        <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="">
                                <a href="index.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Components</span>
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
                                    <li class="active">
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
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Pages</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="auth-normal-sign-in.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Login</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="auth-sign-up.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Register</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="sample-page.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Sample Page</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
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
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Notification</h5>
                                        <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.php"> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Advance Components</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Notification</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page body start -->
                                <div class="page-body button-page">
                                    <div class="row">
                                        <!-- bootstrap modal start -->
                                        <div class="col-sm-12">
                                            <!-- Notification card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Notifications</h5>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="sub-title">Notification Position</div>
                                                            <p>This plugin has layout options where you can display it in any corner of the screen, simply click one layout corners and press the buttons on the other section to see the magic</p>
                                                            <div class="location-selector">
                                                                <div class="bit top left" data-position="top left"></div>
                                                                <div class="bit top right" data-position="top right"></div>
                                                                <div class="bit top" data-position="top"></div>
                                                                <div class="bit bottom left" data-position="bottom left"></div>
                                                                <div class="bit bottom right" data-position="bottom right"></div>
                                                                <div class="bit bottom" data-position="bottom"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="sub-title">Notification Alert</div>
                                                            <p>Notification color : <code> data-type="inverse"</code> Notification position : <code> data-align="left" </code></p>
                                                            <ul class="notifications">
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="left" data-icon="fa fa-check">Top Left</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="right" data-icon="fa fa-comments">Top Right</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="center" data-icon="fa fa-comments">Top Center</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="left">Bottom Left</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="right">Bottom Right</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="center">Bottom Center</button>
                                                                </li>
                                                            </ul>
                                                            <div class="sub-title">Notification Position</div>
                                                            <p>Change data-type : <code> data-type="primary"</code> to change notification color</p>
                                                            <ul class="notifications">
                                                                <li>
                                                                    <button class="btn btn-inverse waves-effect" data-type="inverse" data-from="top" data-align="right" data-icon="fa fa-check">Inverse</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="primary" data-from="top" data-align="right" data-icon="fa fa-comments">Primary</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-info waves-effect" data-type="info" data-from="top" data-align="right" data-icon="fa fa-comments">Info</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-success waves-effect" data-type="success" data-from="top" data-align="right">success</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-warning waves-effect" data-type="warning" data-from="top" data-align="right">Warning</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-danger waves-effect" data-type="danger" data-from="top" data-align="right">Danger</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="sub-title">Notification Behaviour</div>
                                                            <p>use code <code>data-animation-in="animated fadeIn"  data-animation-out="animated fadeOut"</code> notification animation effect</p>
                                                            <ul class="notifications">
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeIn" data-animation-out="animated fadeOut">Fade In</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInLeft" data-animation-out="animated fadeOutLeft">Fade In Left</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInRight" data-animation-out="animated fadeOutRight">Fade In Right</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInUp" data-animation-out="animated fadeOutUp">Fade In Up</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInDown" data-animation-out="animated fadeOutDown">Fade In Down</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated bounceIn" data-animation-out="animated bounceOut">Bounce In</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated bounceInLeft" data-animation-out="animated bounceOutLeft">Bounce In Left</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated bounceInRight" data-animation-out="animated bounceOutRight">Bounce In Right</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated rotateInDownRight" data-animation-out="animated rotateOutUpRight">Fall In Right</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated rotateIn" data-animation-out="animated rotateOut">Rotate In</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated flipInX" data-animation-out="animated flipOutX">Flip In X</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated flipInY" data-animation-out="animated flipOutY">Flip In Y</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Notification card end -->
                                        </div>
                                        <!-- Bootstrap modal end -->
                                    </div>
                                </div>
                                <!-- Page body end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main-body end -->
                
                <div id="styleSelector">
                
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
<?php
 include_once 'footer.php';
?>

</body>

</html>
