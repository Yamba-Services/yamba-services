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
                                    <li class="active">
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
                                        <h5 class="m-b-10">Animated Tooltip</h5>
                                        <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.php"> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Basic Components</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Animated Tooltip</a>
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
                                <!-- Page-body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <!-- Tooltip style 1 card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip Style 1</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-1</code> to use this
                                                        <span class="mytooltip tooltip-effect-1">
                                                  <span class="tooltip-item">Show Effect</span>
                                                  <span class="tooltip-content clearfix">
                                                    <img src="assets/images/tooltip/Euclid.png" alt="Ecluid.png">
                                                    <span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.</span>
                                                </span>
                                            </span>
                                                        current effect.</p>
                                                </div>
                                            </div>
                                            <!-- Tooltip style 1 card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Tooltip style 2 card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip Style 2</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-2</code> to use this
                                                        <span class="mytooltip tooltip-effect-2">
                                                    <span class="tooltip-item">Show Effect</span>
                                                    <span class="tooltip-content clearfix">
                                                      <img src="assets/images/tooltip/Euclid.png" alt="Ecluid.png">
                                                      <span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.</span>
                                                  </span>
                                              </span>
                                                        current effect.</p>
                                                </div>
                                            </div>
                                            <!-- Tooltip style 2 card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Tooltip style 4 card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip Style 4</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-4</code> to use this
                                                        <span class="mytooltip tooltip-effect-4">
                                                    <span class="tooltip-item">Show Effect</span>
                                                    <span class="tooltip-content clearfix">
                                                      <img src="assets/images/tooltip/Euclid.png" alt="Ecluid.png">
                                                      <span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.</span>
                                                  </span>
                                              </span>
                                                        current effect.</p>
                                                </div>
                                            </div>
                                            <!-- Tooltip style 4 card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Tooltip style 5 card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip Style 5</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-5</code> to use this
                                                        <span class="mytooltip tooltip-effect-5">
                                                    <span class="tooltip-item">Show Effect</span>
                                                    <span class="tooltip-content clearfix">
                                                      <span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.</span>
                                                  </span>
                                              </span>
                                                        current effect.</p>
                                                </div>
                                            </div>
                                            <!-- Tooltip style 5 card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Tooltip style 6 card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip Style 6</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-6 tooltip-content-2 </code> to use this <a class="mytooltip tooltip-effect-6" href="#">Home<span class="tooltip-content2"><i class="icofont icofont-home"></i></span></a> current effect. </p>
                                                </div>
                                            </div>
                                            <!-- Tooltip style 6 card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Tooltip style 7 card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip Style 7</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-7 tooltip-content-2</code> to use this <a class="mytooltip tooltip-effect-7" href="#">About me<span class="tooltip-content2"><i class="icofont icofont-user-alt-3"></i></span></a> current effect. </p>
                                                </div>
                                            </div>
                                            <!-- Tooltip style 7 card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Tooltip style 8 card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip Style 8</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-8 tooltip-content-2</code> to use this <a class="mytooltip tooltip-effect-8" href="#">Photography<span class="tooltip-content2"><i class="icofont icofont-ui-camera"></i></span></a> current effect. </p>
                                                </div>
                                            </div>
                                            <!-- Tooltip style 8 card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Tooltip style 9 card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip Style 9</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-9 tooltip-content-2</code> to use this <a class="mytooltip tooltip-effect-9" href="#">Work<span class="tooltip-content2"><i class="icofont icofont-bag-alt"></i></span></a> current effect. </p>
                                                </div>
                                            </div>
                                            <!-- Tooltip style 9 card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Tooltip style 10 card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Bloated Tooltip</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-9 tooltip-content-3</code> to use this <a class="mytooltip tooltip-effect-9" href="#">Car<span class="tooltip-content3">You can easily navigate the city by car.</span></a> current effect. </p>
                                                </div>
                                            </div>
                                            <!-- Tooltip style 10 card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Bloated tooltip card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Bloated Tooltip</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-9 tooltip-content-3</code> to use this <a class="mytooltip tooltip-effect-9" href="#">Cycle<span class="tooltip-content3">You can easily navigate the city by car.</span></a> current effect. </p>
                                                </div>
                                            </div>
                                            <!-- Bloated tooltip card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Bloated tooltip card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Bloated Tooltip</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-9 tooltip-content-3</code> to use this <a class="mytooltip tooltip-effect-9" href="#">Car<span class="tooltip-content3">You can easily navigate the city by car.</span></a> current effect. </p>
                                                </div>
                                            </div>
                                            <!-- Bloated tooltip card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Bloated tooltip card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Bloated Tooltip</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-9 tooltip-content-3</code> to use this <a class="mytooltip tooltip-effect-9" href="#">Cycle<span class="tooltip-content3">You can easily navigate the city by car.</span></a> current effect. </p>
                                                </div>
                                            </div>
                                            <!-- Bloated tooltip card end -->
                                        </div>
                                        <div class="col-sm-12">
                                            <!-- Box tooltip card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Box Tooltip</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-effect-1 tooltip-content4</code> to use this
                                                        <span class="mytooltip tooltip-effect-1">
                                                  <span class="tooltip-item2">Euclid</span>
                                                  <span class="tooltip-content4 clearfix">
                                                      <span class="tooltip-text2">
                                                        <strong>Euclid</strong>, also known as Euclid of Alexandria, was a Greek mathematician, often referred to as the "Father of Geometry". He was active in Alexandria during the reign of Ptolemy I.
                                                        <a href="#">Wikipedia</a>
                                                    </span>
                                                </span>
                                            </span>
                                                        current effect. rogue laws of physics, star stuff harvesting star light, <span class="mytooltip tooltip-effect-2"><span class="tooltip-item2">quasar</span><span class="tooltip-content4 clearfix"><span class="tooltip-text2"><strong>Quasars</strong> are believed to be powered by accretion of material into supermassive black holes in the nuclei of distant galaxies, making these luminous versions of the general... <a href="#">Wikipedia</a></span></span>
                                        </span> encyclopaedia galactica are creatures of the cosmos the only home we've ever known ship of the imagination prime number courage of our questions.
                                                    </p>
                                                    <p>Colonies. Jean-François Champollion, billions upon billions descended from astronomers the sky calls to us! Made in the interiors of collapsing stars, billions upon billions radio telescope paroxysm of global death not a sunrise but a galaxyrise, gathered by gravity permanence of the stars?</p>
                                                </div>
                                            </div>
                                            <!-- Box tooltip card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Tooltip on button card start -->
                                            <div class="card button-page o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip On Button</h5>
                                                </div>
                                                <div class="card-block">
                                                    <ul>
                                                        <li>
                                                            <button type="button" class="btn btn-default waves-effect" data-toggle="tooltip" data-placement="top" title="tooltip on top">Top
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="tooltip on left">Left
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="right" title="tooltip on right">right
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="tooltip on bottom">bottom
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">Html Tooltip
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Tooltip on button card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Line Tooltip card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Line Tooltip</h5>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-content4</code> to use this <a class="mytooltip" href="javascript:void(0)"> Line tooltip<span class="tooltip-content5"><span class="tooltip-text3"><span class="tooltip-inner2">Howdy, Ben!<br> There are 13 unread messages in your inbox.</span></span></span></a> current effect. harvesting star light.Colonies. Jean-François Champollion.</p>
                                                </div>
                                            </div>
                                            <!-- Line Tooltip card end -->
                                        </div>
                                        
                                        <div class="col-xl-4">
                                            <!-- Tooltip with link card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip With Link</h5>
                                                </div>
                                                <div class="card-block tooltip-link">
                                                    <a href="#!" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="top!">Top</a>
                                                    <a href="#!" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" title="bottom!">Bottom</a>
                                                    <a href="#!" data-placement="left" data-trigger="hover" data-toggle="tooltip" title="left!">Left</a>
                                                    <a href="#!" data-placement="right" data-trigger="hover" data-toggle="tooltip" title="right!">Right</a>
                                                </div>
                                            </div>
                                            <!-- Tooltip with link card end -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Tooltip on icon card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip On Icon</h5>
                                                </div>
                                                <div class="card-block tooltip-icon button-list">
                                                    <p>use code in button for tooltip <code>data-toggle="tooltip" data-placement="left" data-original-title=".icofont-home"</code></p>
                                                    <button type="button" class="btn btn-primary btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="left" title=".icofont-home">
                                                        <i class="icofont icofont-home"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".icofont icofont-search-alt-2">
                                                        <i class="icofont icofont-search-alt-2"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="right" title=".icofont-refresh">
                                                        <i class="icofont icofont-refresh"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".icofont-print">
                                                        <i class="icofont icofont-print"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title=".icofont-paper-plane">
                                                        <i class="icofont icofont-paper-plane"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Tooltip on icon card end -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Tooltip on popover card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltip On Popover</h5>
                                                </div>
                                                <div class="card-block tooltip-pop button-list">
                                                    <p>use code in button for tooltip <code>data-toggle="popover" data-placement="left" data-original-title=".icofont-home"</code></p>
                                                    <button type="button" class="btn btn-default waves-effect" data-toggle="popover" data-placement="top" title="" data-content="top by popover" data-original-title="tooltip on top">Top
                                                    </button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="popover" data-placement="left" title="tooltip on left" data-content="left by popover">Left
                                                    </button>
                                                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="popover" data-placement="right" title="tooltip on right" data-content="right by popover">right
                                                    </button>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="popover" data-placement="bottom" title="tooltip on bottom" data-content="bottom by popover">bottom
                                                    </button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="popover" data-html="true" data-placement="top" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>" data-content="tooltip by HTML">Html Tooltip
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Tooltip on popover card end -->
                                        </div>
                                        <div class="col-sm-12">
                                            <!-- Tooltips on textbox card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Tooltips On Textbox</h5>
                                                </div>
                                                <div class="card-block tooltip-icon button-list">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="name"><i class="icofont icofont-user-alt-3"></i></span>
                                                        <input type="text" class="form-control" placeholder="Enter your name" title="Enter your name" data-toggle="tooltip">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="email"><i class="icofont icofont-ui-email"></i></span>
                                                        <input type="text" class="form-control" placeholder="Enter email" title="Enter email" data-toggle="tooltip">
                                                    </div>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right" title="submit">Submit
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Tooltips on textbox card end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-body end -->
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

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover({
            html: true,
            content: function() {
                return $('#primary-popover-content').php();
            }
        });
    });

</script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>

</body>

</html>
