
<!DOCTYPE html>
<html class=" ">
    <head>
        <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: B4-1.3
         * This file is part of Ultra Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Ultra Admin Bootstrap 4 : Data Tables</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/datatables/css/datatables.min.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
        <div class='page-topbar '>
            <div class='logo-area'>

            </div>
            <div class='quick-area'>
                <div class='float-left'>
                    <ul class="info-menu left-links list-inline list-unstyled">
                        <li class="sidebar-toggle-wrap list-inline-item">
                            <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li class="message-toggle-wrapper list-inline-item">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-pill badge-primary">7</span>
                            </a>
                            <ul class="dropdown-menu messages animated fadeIn">

                                <li class="list dropdown-item">

                                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                        <li class="unread status-available">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-1.png" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Clarine Vassar</strong>
                                                        <span class="time small">- 15 mins ago</span>
                                                        <span class="profile-status available float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-away">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-2.png" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Brooks Latshaw</strong>
                                                        <span class="time small">- 45 mins ago</span>
                                                        <span class="profile-status away float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-busy">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-3.png" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Clementina Brodeur</strong>
                                                        <span class="time small">- 1 hour ago</span>
                                                        <span class="profile-status busy float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-offline">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-4.png" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Carri Busey</strong>
                                                        <span class="time small">- 5 hours ago</span>
                                                        <span class="profile-status offline float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-offline">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-5.png" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Melissa Dock</strong>
                                                        <span class="time small">- Yesterday</span>
                                                        <span class="profile-status offline float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-available">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-1.png" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Verdell Rea</strong>
                                                        <span class="time small">- 14th Mar</span>
                                                        <span class="profile-status available float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-busy">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-2.png" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Linette Lheureux</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status busy float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-away">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-3.png" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Araceli Boatright</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status away float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </li>

                                <li class="external">
                                    <a href="javascript:;">
                                        <span>Read All Messages</span>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="notify-toggle-wrapper list-inline-item">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-pill badge-orange">3</span>
                            </a>
                            <ul class="dropdown-menu notifications animated fadeIn">
                                <li class="total dropdown-item">
                                    <span class="small">
                                        You have <strong>3</strong> new notifications.
                                        <a href="javascript:;" class="float-right">Mark all as Read</a>
                                    </span>
                                </li>
                                <li class="list dropdown-item">

                                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                        <li class="unread available"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Server needs to reboot</strong>
                                                        <span class="time small">15 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="unread away"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>45 new messages</strong>
                                                        <span class="time small">45 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" busy"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Server IP Blocked</strong>
                                                        <span class="time small">1 hour ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" offline"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>10 Orders Shipped</strong>
                                                        <span class="time small">5 hours ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" offline"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>New Comment on blog</strong>
                                                        <span class="time small">Yesterday</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" available"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Great Speed Notify</strong>
                                                        <span class="time small">14th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" busy"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Team Meeting at 6PM</strong>
                                                        <span class="time small">16th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </li>

                                <li class="external dropdown-item">
                                    <a href="javascript:;">
                                        <span>Read All Notifications</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="d-sm-none d-none searchform list-inline-item">
                            <div class="input-group">
                                <span class="input-group-addon input-focus">
                                    <i class="fa fa-search"></i>
                                </span>
                                <form action="search-page.html" method="post">
                                    <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                                    <input type='submit' value="">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>		
                <div class='float-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                        <li class="profile list-inline-item">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <img src="data/profile/profile.png" alt="user-image" class="rounded-circle img-inline">
                                <span>Jason Bourne <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu profile animated fadeIn">
                                <li class="dropdown-item">
                                    <a href="#settings">
                                        <i class="fa fa-wrench"></i>
                                        Settings
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#profile">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#help">
                                        <i class="fa fa-info"></i>
                                        Help
                                    </a>
                                </li>
                                <li class="last dropdown-item">
                                    <a href="ui-login.html">
                                        <i class="fa fa-lock"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="chat-toggle-wrapper list-inline-item">
                            <a href="#" data-toggle="chatbar" class="toggle_chat">
                                <i class="fa fa-comments"></i>
                                <span class="badge badge-pill badge-warning">9</span>
                                <i class="fa fa-times"></i>
                            </a>
                        </li>
                    </ul>			
                </div>		
            </div>

        </div>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <div class="page-sidebar ">

                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-lg-4 col-md-4 col-4">
                            <a href="ui-profile.html">
                                <img src="data/profile/profile.png" class="img-fluid rounded-circle">
                            </a>
                        </div>

                        <div class="profile-details col-lg-8 col-md-8 col-8">

                            <h3>
                                <a href="ui-profile.html">Jason Bourne</a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">Web Developer</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>	


                        <li class=""> 
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-suitcase"></i>
                                <span class="title">Multi Purpose</span>
                                <span class="arrow "></span><span class="badge badge-orange">NEW</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="general.html"  target = '_blank' >General Admin</a>
                                </li>
                                <li>
                                    <a class="" href="hospital.html"  target = '_blank' >Hospital Admin</a>
                                </li>
                                <li>
                                    <a class="" href="music.html"  target = '_blank' >Music Admin</a>
                                </li>
                                <li>
                                    <a class="" href="crm.html"  target = '_blank' >CRM Admin</a>
                                </li>
                                <li>
                                    <a class="" href="socialmedia.html"  target = '_blank' >Social Media Admin</a>
                                </li>
                                <li>
                                    <a class="" href="freelancing.html"  target = '_blank' >Freelancing Admin</a>
                                </li>
                                <li>
                                    <a class="" href="university.html"  target = '_blank' >University Admin</a>
                                </li>
                                <li>
                                    <a class="" href="ecommerce.html"  target = '_blank' >Ecommerce Admin</a>
                                </li>
                                <li>
                                    <a class="" href="blog.html"  target = '_blank' >Blog Admin</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-suitcase"></i>
                                <span class="title">APPS</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="widgets.html" >Widgets</a>
                                </li>
                                <li>
                                    <a class="" href="ui-calendar.html" >Calendar</a>
                                </li>
                                <li>
                                    <a class="" href="mail-inbox.html" >Mail</a>
                                </li>
                                <li>
                                    <a class="" href="inline-editing.html" >Inline Editing</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-suitcase"></i>
                                <span class="title">UI Elements</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-typography.html" >Typography</a>
                                </li>
                                <li>
                                    <a class="" href="ui-accordion.html" >Tabs &amp; Accordions</a>
                                </li>
                                <li>
                                    <a class="" href="ui-progress.html" >Progress Bars</a>
                                </li>
                                <li>
                                    <a class="" href="ui-icons.html" >Icons</a>
                                </li>
                                <li>
                                    <a class="" href="ui-buttons.html" >Buttons</a>
                                </li>
                                <li>
                                    <a class="" href="ui-modals.html" >Modals</a>
                                </li>
                                <li>
                                    <a class="" href="ui-notifications.html" >Alert &amp; Notifications</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tooltips.html" >Tooltips &amp; Popovers</a>
                                </li>
                                <li>
                                    <a class="" href="ui-sortable.html" >Sortable Group</a>
                                </li>
                                <li>
                                    <a class="" href="ui-navbars.html" >Navbars &amp; Dropdowns</a>
                                </li>
                                <li>
                                    <a class="" href="ui-extra.html" >Other Elements</a>
                                </li>
                                <li>
                                    <a class="" href="ui-carousel.html" >Carousel Slider</a>
                                </li>
                                <li>
                                    <a class="" href="ui-panels.html" >Draggable Panels</a>
                                </li>
                                <li>
                                    <a class="" href="ui-grids.html" >Grids</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tiles.html" >Tile Widgets</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-sliders"></i>
                                <span class="title">Forms</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="form-elements.html" >Form Elements</a>
                                </li>
                                <li>
                                    <a class="" href="form-components.html" >Form Components</a>
                                </li>
                                <li>
                                    <a class="" href="form-wizard.html" >Form Wizard</a>
                                </li>
                                <li>
                                    <a class="" href="form-validation.html" >Form Validations</a>
                                </li>
                                <li>
                                    <a class="" href="form-fileupload.html" >File Upload &amp; Dropzone</a>
                                </li>
                                <li>
                                    <a class="" href="form-editors.html" >Editors</a>
                                </li>
                                <li>
                                    <a class="" href="form-masks.html" >Input Masks</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-gift"></i>
                                <span class="title">Pages</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-pricing.html" >Pricing tables</a>
                                </li>
                                <li>
                                    <a class="" href="ui-profile.html" >Profile</a>
                                </li>
                                <li>
                                    <a class="" href="ui-timeline.html" >Timeline</a>
                                </li>
                                <li>
                                    <a class="" href="ui-invoice.html" >Invoice</a>
                                </li>
                                <li>
                                    <a class="" href="ui-members.html" >Members</a>
                                </li>
                                <li>
                                    <a class="" href="ui-gallery.html" >Gallery</a>
                                </li>
                                <li>
                                    <a class="" href="ui-search.html" >Search</a>
                                </li>
                                <li>
                                    <a class="" href="ui-blogs.html" >Blogs</a>
                                </li>
                                <li>
                                    <a class="" href="ui-blog-item.html" >Single Blog</a>
                                </li>
                                <li>
                                    <a class="" href="ui-imagecrop.html" >Image cropper</a>
                                </li>
                                <li>
                                    <a class="" href="ui-faq.html" >FAQ</a>
                                </li>
                                <li>
                                    <a class="" href="ui-404.html" >404</a>
                                </li>
                                <li>
                                    <a class="" href="ui-500.html" >500</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Charts</span>
                                <span class="arrow "></span><span class="badge badge-orange">HOT</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="charts-morris.html" >Morris Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-chartjs.html" >Chart JS</a>
                                </li>
                                <li>
                                    <a class="" href="charts-flot.html" >Flot Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-sparkline.html" >Sparkline Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-easypiechart.html" >PIE charts &amp; Knobs</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-lock"></i>
                                <span class="title">Access Pages</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-login.html" >Login</a>
                                </li>
                                <li>
                                    <a class="" href="ui-lockscreen.html" >Lock Screen</a>
                                </li>
                                <li>
                                    <a class="" href="ui-register.html" >Registration</a>
                                </li>
                            </ul>
                        </li>
                        <li class="open"> 
                            <a href="javascript:;">
                                <i class="fa fa-table"></i>
                                <span class="title">Tables</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu" style='display:block;'>
                                <li>
                                    <a class="" href="tables-basic.html" >Basic tables</a>
                                </li>
                                <li>
                                    <a class="active" href="tables-data.html" >Data Tables</a>
                                </li>
                                <li>
                                    <a class="" href="tables-responsive.html" >Responsive Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Mailbox</span>
                                <span class="arrow "></span><span class="badge badge-orange">4</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="mail-inbox.html" >Inbox</a>
                                </li>
                                <li>
                                    <a class="" href="mail-compose.html" >Compose</a>
                                </li>
                                <li>
                                    <a class="" href="mail-view.html" >View</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-map-marker"></i>
                                <span class="title">Maps</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-vectormaps.html" >Vector Maps</a>
                                </li>
                                <li>
                                    <a class="" href="ui-googlemaps.html" >Google Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-columns"></i>
                                <span class="title">Layouts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="layout-default.html" >Default Layout</a>
                                </li>
                                <li>
                                    <a class="" href="layout-collapsed.html" >Collapsed Menu</a>
                                </li>
                                <li>
                                    <a class="" href="layout-chat.html" >Chat Open</a>
                                </li>
                                <li>
                                    <a class="" href="layout-boxed.html" >Boxed Layout</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">Menu Levels</span> <span class="arrow "></span> </a>
                            <ul class="sub-menu">
                                <li > <a href="javascript:;"> <span class="title">Level 1.1</span> </a> </li>
                                <li > <a href="javascript:;"> <span class="title">Level 1.2</span> <span class="arrow "></span> </a>
                                    <ul class="sub-menu">
                                        <li > <a href="javascript:;"> <span class="title">Level 2.1</span> </a></li>
                                        <li > <a href="ujavascript:;"> <span class="title">Level 2.2</span> <span class="arrow "></span></a> 
                                            <ul class="sub-menu">
                                                <li > <a href="javascript:;"> <span class="title">Level 3.1</span> <span class="arrow "></span></a> 
                                                    <ul class="sub-menu">
                                                        <li > <a href="ujavascript:;"> <span class="title">Level 4.1</span> </a> </li>
                                                        <li > <a href="ujavascript:;"> <span class="title">Level 4.2</span> </a> </li>
                                                    </ul>
                                                </li>
                                                <li > <a href="ujavascript:;"> <span class="title">Level 3.2</span> </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                    </ul>

                </div>
                <!-- MAIN MENU - END -->



                <div class="project-info">

                    <div class="block1">
                        <div class="data">
                            <span class='title'>New&nbsp;Orders</span>
                            <span class='total'>2,345</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_orders">...</span>
                        </div>
                    </div>

                    <div class="block2">
                        <div class="data">
                            <span class='title'>Visitors</span>
                            <span class='total'>345</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_visitors">...</span>
                        </div>
                    </div>

                </div>



            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper main-wrapper" style=''>

                    <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
                        <div class="page-title">

                            <div class="float-left">
                                <h1 class="title">Data Tables</h1>                            </div>

                            <div class="float-right d-none">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="tables-basic.html">Tables</a>
                                    </li>
                                    <li class="active">
                                        <strong>Data Tables</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-xl-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left">Basic Data Table</h2>
                                <div class="actions panel_actions float-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 padding-0">

                                        <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </section></div>

                    <div class="col-xl-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left">File Export</h2>
                                <div class="actions panel_actions float-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 padding-0">

                                        <table id="example-11" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </section></div>


                    <!-- 
                    
                    <div class="col-xl-12">
                        <section class="box ">
                                <header class="panel_header">
                                    <h2 class="title float-left">Expand / Collapse Rows - Data Table</h2>
                                    <div class="actions panel_actions float-right">
                                            <i class="box_toggle fa fa-chevron-down"></i>
                                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                        <i class="box_close fa fa-times"></i>
                                    </div>
                                </header>
                                <div class="content-body">    <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                **********************************************
                    
                                <table class="table table-striped" id="example2" >
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td class="center"> 4</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.5</td>
                                            <td>Win 95+</td>
                                            <td class="center">5.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 6</td>
                                            <td>Win 98+</td>
                                            <td class="center">6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td class="center">7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td class="center">6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 3.0</td>
                                            <td>Win 2k+ / OSX.3+</td>
                                            <td class="center">1.9</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Camino 1.0</td>
                                            <td>OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape 7.2</td>
                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape Browser 8</td>
                                            <td>Win 98SE+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape Navigator 9</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.1</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.2</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.2</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.3</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.4</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.4</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.5</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.6</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.7</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.8</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Seamonkey 1.1</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Epiphany 2.20</td>
                                            <td>Gnome</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 1.2</td>
                                            <td>OSX.3</td>
                                            <td class="center">125.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 1.3</td>
                                            <td>OSX.3</td>
                                            <td class="center">312.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 2.0</td>
                                            <td>OSX.4+</td>
                                            <td class="center">419.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 3.0</td>
                                            <td>OSX.4+</td>
                                            <td class="center">522.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>OmniWeb 5.5</td>
                                            <td>OSX.4+</td>
                                            <td class="center">420</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>iPod Touch / iPhone</td>
                                            <td>iPod</td>
                                            <td class="center">420.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>S60</td>
                                            <td>S60</td>
                                            <td class="center">413</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 7.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 7.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 8.0</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 8.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.0</td>
                                            <td>Win 95+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.2</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.5</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera for Wii</td>
                                            <td>Wii</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Nokia N800</td>
                                            <td>N800</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Nintendo DS browser</td>
                                            <td>Nintendo DS</td>
                                            <td class="center">8.5</td>
                                            <td class="center">C/A<sup>1</sup></td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.1</td>
                                            <td>KDE 3.1</td>
                                            <td class="center">3.1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.3</td>
                                            <td>KDE 3.3</td>
                                            <td class="center">3.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.5</td>
                                            <td>KDE 3.5</td>
                                            <td class="center">3.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 4.5</td>
                                            <td>Mac OS 8-9</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.1</td>
                                            <td>Mac OS 7.6-9</td>
                                            <td class="center">1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.2</td>
                                            <td>Mac OS 8-X</td>
                                            <td class="center">1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Misc</td>
                                            <td>NetFront 3.1</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Misc</td>
                                            <td>NetFront 3.4</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Misc</td>
                                            <td>Dillo 0.8</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Misc</td>
                                            <td>Links</td>
                                            <td>Text only</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Misc</td>
                                            <td>Lynx</td>
                                            <td>Text only</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Misc</td>
                                            <td>IE Mobile</td>
                                            <td>Windows Mobile 6</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Misc</td>
                                            <td>PSP browser</td>
                                            <td>PSP</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td class="center">-</td>
                                            <td class="center">U</td>
                                        </tr>
                                    </tbody>
                                </table>
                    
                                ***********************************************
                    
                            </div>
                        </div>
                        </div>
                            </section></div> -->
                    <!-- 
                    <div class="col-xl-12">
                        <section class="box ">
                                <header class="panel_header">
                                    <h2 class="title float-left">Download Formats - Data Table</h2>
                                    <div class="actions panel_actions float-right">
                                            <i class="box_toggle fa fa-chevron-down"></i>
                                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                        <i class="box_close fa fa-times"></i>
                                    </div>
                                </header>
                                <div class="content-body">    <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                    
                    
                    
                                **********************************************
                    
                    
                                <table id="example" class="display table table-hover table-condensed" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                    
                                    <tbody>
                                        <tr>
                                            <td>Tiger</td>
                                            <td>Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett</td>
                                            <td>Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton</td>
                                            <td>Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric</td>
                                            <td>Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi</td>
                                            <td>Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle</td>
                                            <td>Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod</td>
                                            <td>Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona</td>
                                            <td>Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen</td>
                                            <td>Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya</td>
                                            <td>Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>$103,600</td>
                                        </tr>
                                        <tr>
                                            <td>Jena</td>
                                            <td>Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>$90,560</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn</td>
                                            <td>Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>$342,000</td>
                                        </tr>
                                        <tr>
                                            <td>Charde</td>
                                            <td>Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>$470,600</td>
                                        </tr>
                                        <tr>
                                            <td>Haley</td>
                                            <td>Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>$313,500</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana</td>
                                            <td>Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>$385,750</td>
                                        </tr>
                                        <tr>
                                            <td>Michael</td>
                                            <td>Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul</td>
                                            <td>Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>$725,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria</td>
                                            <td>Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>$237,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley</td>
                                            <td>Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td>Dai</td>
                                            <td>Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>$217,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jenette</td>
                                            <td>Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>$345,000</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri</td>
                                            <td>Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td>$675,000</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar</td>
                                            <td>Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td>Doris</td>
                                            <td>Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td>$85,600</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica</td>
                                            <td>Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin</td>
                                            <td>Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>$92,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer</td>
                                            <td>Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>$357,650</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden</td>
                                            <td>Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona</td>
                                            <td>Green</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>$850,000</td>
                                        </tr>
                                        <tr>
                                            <td>Shou</td>
                                            <td>Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>$163,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle</td>
                                            <td>House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sidney</td>
                                            <td>$95,400</td>
                                        </tr>
                                        <tr>
                                            <td>Suki</td>
                                            <td>Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>$114,500</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott</td>
                                            <td>Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>$145,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin</td>
                                            <td>Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena</td>
                                            <td>Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>$324,050</td>
                                        </tr>
                                        <tr>
                                            <td>Unity</td>
                                            <td>Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>$85,675</td>
                                        </tr>
                                        <tr>
                                            <td>Howard</td>
                                            <td>Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope</td>
                                            <td>Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian</td>
                                            <td>Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>$452,500</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy</td>
                                            <td>Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson</td>
                                            <td>Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia</td>
                                            <td>Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno</td>
                                            <td>Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura</td>
                                            <td>Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Thor</td>
                                            <td>Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>$98,540</td>
                                        </tr>
                                        <tr>
                                            <td>Finn</td>
                                            <td>Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge</td>
                                            <td>Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida</td>
                                            <td>Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>$125,250</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita</td>
                                            <td>Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer</td>
                                            <td>Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>$75,650</td>
                                        </tr>
                                        <tr>
                                            <td>Cara</td>
                                            <td>Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione</td>
                                            <td>Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>$356,250</td>
                                        </tr>
                                        <tr>
                                            <td>Lael</td>
                                            <td>Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>$103,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jonas</td>
                                            <td>Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>$86,500</td>
                                        </tr>
                                        <tr>
                                            <td>Shad</td>
                                            <td>Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael</td>
                                            <td>Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna</td>
                                            <td>Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                                **********************************************
                    
                    
                    
                    
                            </div>
                        </div>
                        </div>
                            </section></div>
                    
                    
                    -->
                    <div class="col-xl-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left">Complex Header - Data Table</h2>
                                <div class="actions panel_actions float-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 padding-0">
                                        <!-- ********************************************** -->

                                        <table id="example-4" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Name</th>
                                                    <th colspan="2">HR Information</th>
                                                    <th colspan="3">Contact</th>
                                                </tr>
                                                <tr>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                    <th>Office</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                    <th>Office</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>$320,800</td>
                                                    <td>Edinburgh</td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>$170,750</td>
                                                    <td>Tokyo</td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>$86,000</td>
                                                    <td>San Francisco</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>$433,060</td>
                                                    <td>Edinburgh</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>$162,700</td>
                                                    <td>Tokyo</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>$372,000</td>
                                                    <td>New York</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>$137,500</td>
                                                    <td>San Francisco</td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>$327,900</td>
                                                    <td>Tokyo</td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>$205,500</td>
                                                    <td>San Francisco</td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>$103,600</td>
                                                    <td>Edinburgh</td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>$90,560</td>
                                                    <td>London</td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>$342,000</td>
                                                    <td>Edinburgh</td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>$470,600</td>
                                                    <td>San Francisco</td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>$313,500</td>
                                                    <td>London</td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>$385,750</td>
                                                    <td>London</td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>$198,500</td>
                                                    <td>London</td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>$725,000</td>
                                                    <td>New York</td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>$237,500</td>
                                                    <td>New York</td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>$132,000</td>
                                                    <td>London</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>$217,500</td>
                                                    <td>Edinburgh</td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>$345,000</td>
                                                    <td>New York</td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>$675,000</td>
                                                    <td>New York</td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>$106,450</td>
                                                    <td>New York</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>$85,600</td>
                                                    <td>Sidney</td>
                                                    <td>3023</td>
                                                    <td>d.wilder@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>$1,200,000</td>
                                                    <td>London</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>$92,575</td>
                                                    <td>Edinburgh</td>
                                                    <td>8822</td>
                                                    <td>g.joyce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>$357,650</td>
                                                    <td>Singapore</td>
                                                    <td>9239</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>$206,850</td>
                                                    <td>San Francisco</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>$850,000</td>
                                                    <td>San Francisco</td>
                                                    <td>2947</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>$163,000</td>
                                                    <td>Tokyo</td>
                                                    <td>8899</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>$95,400</td>
                                                    <td>Sidney</td>
                                                    <td>2769</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>$114,500</td>
                                                    <td>London</td>
                                                    <td>6832</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>$145,000</td>
                                                    <td>London</td>
                                                    <td>3606</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>$235,500</td>
                                                    <td>San Francisco</td>
                                                    <td>2860</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>$324,050</td>
                                                    <td>Edinburgh</td>
                                                    <td>8240</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>$85,675</td>
                                                    <td>San Francisco</td>
                                                    <td>5384</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>$164,500</td>
                                                    <td>San Francisco</td>
                                                    <td>7031</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>$109,850</td>
                                                    <td>San Francisco</td>
                                                    <td>6318</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>$452,500</td>
                                                    <td>San Francisco</td>
                                                    <td>9422</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>$136,200</td>
                                                    <td>London</td>
                                                    <td>7580</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>$645,750</td>
                                                    <td>New York</td>
                                                    <td>1042</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>$234,500</td>
                                                    <td>Singapore</td>
                                                    <td>2120</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>$163,500</td>
                                                    <td>London</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>$139,575</td>
                                                    <td>Tokyo</td>
                                                    <td>9383</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>$98,540</td>
                                                    <td>New York</td>
                                                    <td>8327</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>$87,500</td>
                                                    <td>San Francisco</td>
                                                    <td>2927</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>$138,575</td>
                                                    <td>Singapore</td>
                                                    <td>8352</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>$125,250</td>
                                                    <td>New York</td>
                                                    <td>7439</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>$115,000</td>
                                                    <td>San Francisco</td>
                                                    <td>4389</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>$75,650</td>
                                                    <td>Edinburgh</td>
                                                    <td>3431</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>$145,600</td>
                                                    <td>New York</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>$356,250</td>
                                                    <td>London</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>$103,500</td>
                                                    <td>London</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>$86,500</td>
                                                    <td>San Francisco</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>$183,000</td>
                                                    <td>Edinburgh</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>$183,000</td>
                                                    <td>Singapore</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>$112,000</td>
                                                    <td>New York</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!--             <table id="example-4" class="display" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Name</th>
                                                    <th colspan="2">HR Information</th>
                                                    <th colspan="3">Contact</th>
                                                </tr>
                                                <tr>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                    <th>Office</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>
                                        
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                    <th>Office</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </tfoot>
                                        
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>$320,800</td>
                                                    <td>Edinburgh</td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>$170,750</td>
                                                    <td>Tokyo</td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>$86,000</td>
                                                    <td>San Francisco</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>$433,060</td>
                                                    <td>Edinburgh</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>$162,700</td>
                                                    <td>Tokyo</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>$372,000</td>
                                                    <td>New York</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>$137,500</td>
                                                    <td>San Francisco</td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>$327,900</td>
                                                    <td>Tokyo</td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>$205,500</td>
                                                    <td>San Francisco</td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>$103,600</td>
                                                    <td>Edinburgh</td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>$90,560</td>
                                                    <td>London</td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>$342,000</td>
                                                    <td>Edinburgh</td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>$470,600</td>
                                                    <td>San Francisco</td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>$313,500</td>
                                                    <td>London</td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>$385,750</td>
                                                    <td>London</td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>$198,500</td>
                                                    <td>London</td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>$725,000</td>
                                                    <td>New York</td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>$237,500</td>
                                                    <td>New York</td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>$132,000</td>
                                                    <td>London</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>$217,500</td>
                                                    <td>Edinburgh</td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>$345,000</td>
                                                    <td>New York</td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>$675,000</td>
                                                    <td>New York</td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>$106,450</td>
                                                    <td>New York</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>$85,600</td>
                                                    <td>Sidney</td>
                                                    <td>3023</td>
                                                    <td>d.wilder@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>$1,200,000</td>
                                                    <td>London</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>$92,575</td>
                                                    <td>Edinburgh</td>
                                                    <td>8822</td>
                                                    <td>g.joyce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>$357,650</td>
                                                    <td>Singapore</td>
                                                    <td>9239</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>$206,850</td>
                                                    <td>San Francisco</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>$850,000</td>
                                                    <td>San Francisco</td>
                                                    <td>2947</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>$163,000</td>
                                                    <td>Tokyo</td>
                                                    <td>8899</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>$95,400</td>
                                                    <td>Sidney</td>
                                                    <td>2769</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>$114,500</td>
                                                    <td>London</td>
                                                    <td>6832</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>$145,000</td>
                                                    <td>London</td>
                                                    <td>3606</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>$235,500</td>
                                                    <td>San Francisco</td>
                                                    <td>2860</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>$324,050</td>
                                                    <td>Edinburgh</td>
                                                    <td>8240</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>$85,675</td>
                                                    <td>San Francisco</td>
                                                    <td>5384</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>$164,500</td>
                                                    <td>San Francisco</td>
                                                    <td>7031</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>$109,850</td>
                                                    <td>San Francisco</td>
                                                    <td>6318</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>$452,500</td>
                                                    <td>San Francisco</td>
                                                    <td>9422</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>$136,200</td>
                                                    <td>London</td>
                                                    <td>7580</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>$645,750</td>
                                                    <td>New York</td>
                                                    <td>1042</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>$234,500</td>
                                                    <td>Singapore</td>
                                                    <td>2120</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>$163,500</td>
                                                    <td>London</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>$139,575</td>
                                                    <td>Tokyo</td>
                                                    <td>9383</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>$98,540</td>
                                                    <td>New York</td>
                                                    <td>8327</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>$87,500</td>
                                                    <td>San Francisco</td>
                                                    <td>2927</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>$138,575</td>
                                                    <td>Singapore</td>
                                                    <td>8352</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>$125,250</td>
                                                    <td>New York</td>
                                                    <td>7439</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>$115,000</td>
                                                    <td>San Francisco</td>
                                                    <td>4389</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>$75,650</td>
                                                    <td>Edinburgh</td>
                                                    <td>3431</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>$145,600</td>
                                                    <td>New York</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>$356,250</td>
                                                    <td>London</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>$103,500</td>
                                                    <td>London</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>$86,500</td>
                                                    <td>San Francisco</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>$183,000</td>
                                                    <td>Edinburgh</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>$183,000</td>
                                                    <td>Singapore</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>$112,000</td>
                                                    <td>New York</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table> -->
                                        <!-- ********************************************** -->
                                    </div>
                                </div>
                            </div>
                        </section></div>



                    <div class="col-xl-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left">Individual column searching (text inputs)</h2>
                                <div class="actions panel_actions float-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 padding-0">


                                        <table id="example-3" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section></div>




                    <div class="col-xl-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left">Highlighting rows and columns</h2>
                                <div class="actions panel_actions float-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 padding-0">

                                        <table id="example-2" class="table dt-responsive row-border hover order-column" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </section></div>





                    <div class="col-xl-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left">Form inputs</h2>
                                <div class="actions panel_actions float-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 padding-0">

                                        <button class="btn btn-primary example-5-submit" type="submit">Submit form</button>
                                        <div class="spacer"></div>
                                        <table id="example-5" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Age</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Age</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
                                                    <td><input type="text" id="row-1-position" name="row-1-position" value="System Architect"></td>
                                                    <td><select size="1" id="row-1-office" name="row-1-office">
                                                            <option value="Edinburgh" selected="selected">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td><input type="text" id="row-2-age" name="row-2-age" value="63"></td>
                                                    <td><input type="text" id="row-2-position" name="row-2-position" value="Accountant"></td>
                                                    <td><select size="1" id="row-2-office" name="row-2-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo" selected="selected">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td><input type="text" id="row-3-age" name="row-3-age" value="66"></td>
                                                    <td><input type="text" id="row-3-position" name="row-3-position" value="Junior Technical Author"></td>
                                                    <td><select size="1" id="row-3-office" name="row-3-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td><input type="text" id="row-4-age" name="row-4-age" value="22"></td>
                                                    <td><input type="text" id="row-4-position" name="row-4-position" value="Senior Javascript Developer"></td>
                                                    <td><select size="1" id="row-4-office" name="row-4-office">
                                                            <option value="Edinburgh" selected="selected">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td><input type="text" id="row-5-age" name="row-5-age" value="33"></td>
                                                    <td><input type="text" id="row-5-position" name="row-5-position" value="Accountant"></td>
                                                    <td><select size="1" id="row-5-office" name="row-5-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo" selected="selected">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td><input type="text" id="row-6-age" name="row-6-age" value="61"></td>
                                                    <td><input type="text" id="row-6-position" name="row-6-position" value="Integration Specialist"></td>
                                                    <td><select size="1" id="row-6-office" name="row-6-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td><input type="text" id="row-7-age" name="row-7-age" value="59"></td>
                                                    <td><input type="text" id="row-7-position" name="row-7-position" value="Sales Assistant"></td>
                                                    <td><select size="1" id="row-7-office" name="row-7-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td><input type="text" id="row-8-age" name="row-8-age" value="55"></td>
                                                    <td><input type="text" id="row-8-position" name="row-8-position" value="Integration Specialist"></td>
                                                    <td><select size="1" id="row-8-office" name="row-8-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo" selected="selected">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td><input type="text" id="row-9-age" name="row-9-age" value="39"></td>
                                                    <td><input type="text" id="row-9-position" name="row-9-position" value="Javascript Developer"></td>
                                                    <td><select size="1" id="row-9-office" name="row-9-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td><input type="text" id="row-10-age" name="row-10-age" value="23"></td>
                                                    <td><input type="text" id="row-10-position" name="row-10-position" value="Software Engineer"></td>
                                                    <td><select size="1" id="row-10-office" name="row-10-office">
                                                            <option value="Edinburgh" selected="selected">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td><input type="text" id="row-11-age" name="row-11-age" value="30"></td>
                                                    <td><input type="text" id="row-11-position" name="row-11-position" value="Office Manager"></td>
                                                    <td><select size="1" id="row-11-office" name="row-11-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td><input type="text" id="row-12-age" name="row-12-age" value="22"></td>
                                                    <td><input type="text" id="row-12-position" name="row-12-position" value="Support Lead"></td>
                                                    <td><select size="1" id="row-12-office" name="row-12-office">
                                                            <option value="Edinburgh" selected="selected">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td><input type="text" id="row-13-age" name="row-13-age" value="36"></td>
                                                    <td><input type="text" id="row-13-position" name="row-13-position" value="Regional Director"></td>
                                                    <td><select size="1" id="row-13-office" name="row-13-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td><input type="text" id="row-14-age" name="row-14-age" value="43"></td>
                                                    <td><input type="text" id="row-14-position" name="row-14-position" value="Senior Marketing Designer"></td>
                                                    <td><select size="1" id="row-14-office" name="row-14-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td><input type="text" id="row-15-age" name="row-15-age" value="19"></td>
                                                    <td><input type="text" id="row-15-position" name="row-15-position" value="Regional Director"></td>
                                                    <td><select size="1" id="row-15-office" name="row-15-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td><input type="text" id="row-16-age" name="row-16-age" value="66"></td>
                                                    <td><input type="text" id="row-16-position" name="row-16-position" value="Marketing Designer"></td>
                                                    <td><select size="1" id="row-16-office" name="row-16-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td><input type="text" id="row-17-age" name="row-17-age" value="64"></td>
                                                    <td><input type="text" id="row-17-position" name="row-17-position" value="Chief Financial Officer (CFO)"></td>
                                                    <td><select size="1" id="row-17-office" name="row-17-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td><input type="text" id="row-18-age" name="row-18-age" value="59"></td>
                                                    <td><input type="text" id="row-18-position" name="row-18-position" value="Systems Administrator"></td>
                                                    <td><select size="1" id="row-18-office" name="row-18-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td><input type="text" id="row-19-age" name="row-19-age" value="41"></td>
                                                    <td><input type="text" id="row-19-position" name="row-19-position" value="Software Engineer"></td>
                                                    <td><select size="1" id="row-19-office" name="row-19-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td><input type="text" id="row-20-age" name="row-20-age" value="35"></td>
                                                    <td><input type="text" id="row-20-position" name="row-20-position" value="Personnel Lead"></td>
                                                    <td><select size="1" id="row-20-office" name="row-20-office">
                                                            <option value="Edinburgh" selected="selected">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td><input type="text" id="row-21-age" name="row-21-age" value="30"></td>
                                                    <td><input type="text" id="row-21-position" name="row-21-position" value="Development Lead"></td>
                                                    <td><select size="1" id="row-21-office" name="row-21-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td><input type="text" id="row-22-age" name="row-22-age" value="40"></td>
                                                    <td><input type="text" id="row-22-position" name="row-22-position" value="Chief Marketing Officer (CMO)"></td>
                                                    <td><select size="1" id="row-22-office" name="row-22-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td><input type="text" id="row-23-age" name="row-23-age" value="21"></td>
                                                    <td><input type="text" id="row-23-position" name="row-23-position" value="Pre-Sales Support"></td>
                                                    <td><select size="1" id="row-23-office" name="row-23-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td><input type="text" id="row-24-age" name="row-24-age" value="23"></td>
                                                    <td><input type="text" id="row-24-position" name="row-24-position" value="Sales Assistant"></td>
                                                    <td><select size="1" id="row-24-office" name="row-24-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td><input type="text" id="row-25-age" name="row-25-age" value="47"></td>
                                                    <td><input type="text" id="row-25-position" name="row-25-position" value="Chief Executive Officer (CEO)"></td>
                                                    <td><select size="1" id="row-25-office" name="row-25-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td><input type="text" id="row-26-age" name="row-26-age" value="42"></td>
                                                    <td><input type="text" id="row-26-position" name="row-26-position" value="Developer"></td>
                                                    <td><select size="1" id="row-26-office" name="row-26-office">
                                                            <option value="Edinburgh" selected="selected">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td><input type="text" id="row-27-age" name="row-27-age" value="28"></td>
                                                    <td><input type="text" id="row-27-position" name="row-27-position" value="Regional Director"></td>
                                                    <td><select size="1" id="row-27-office" name="row-27-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td><input type="text" id="row-28-age" name="row-28-age" value="28"></td>
                                                    <td><input type="text" id="row-28-position" name="row-28-position" value="Software Engineer"></td>
                                                    <td><select size="1" id="row-28-office" name="row-28-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td><input type="text" id="row-29-age" name="row-29-age" value="48"></td>
                                                    <td><input type="text" id="row-29-position" name="row-29-position" value="Chief Operating Officer (COO)"></td>
                                                    <td><select size="1" id="row-29-office" name="row-29-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td><input type="text" id="row-30-age" name="row-30-age" value="20"></td>
                                                    <td><input type="text" id="row-30-position" name="row-30-position" value="Regional Marketing"></td>
                                                    <td><select size="1" id="row-30-office" name="row-30-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo" selected="selected">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td><input type="text" id="row-31-age" name="row-31-age" value="37"></td>
                                                    <td><input type="text" id="row-31-position" name="row-31-position" value="Integration Specialist"></td>
                                                    <td><select size="1" id="row-31-office" name="row-31-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td><input type="text" id="row-32-age" name="row-32-age" value="53"></td>
                                                    <td><input type="text" id="row-32-position" name="row-32-position" value="Developer"></td>
                                                    <td><select size="1" id="row-32-office" name="row-32-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td><input type="text" id="row-33-age" name="row-33-age" value="27"></td>
                                                    <td><input type="text" id="row-33-position" name="row-33-position" value="Technical Author"></td>
                                                    <td><select size="1" id="row-33-office" name="row-33-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td><input type="text" id="row-34-age" name="row-34-age" value="22"></td>
                                                    <td><input type="text" id="row-34-position" name="row-34-position" value="Team Leader"></td>
                                                    <td><select size="1" id="row-34-office" name="row-34-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td><input type="text" id="row-35-age" name="row-35-age" value="46"></td>
                                                    <td><input type="text" id="row-35-position" name="row-35-position" value="Post-Sales support"></td>
                                                    <td><select size="1" id="row-35-office" name="row-35-office">
                                                            <option value="Edinburgh" selected="selected">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td><input type="text" id="row-36-age" name="row-36-age" value="47"></td>
                                                    <td><input type="text" id="row-36-position" name="row-36-position" value="Marketing Designer"></td>
                                                    <td><select size="1" id="row-36-office" name="row-36-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td><input type="text" id="row-37-age" name="row-37-age" value="51"></td>
                                                    <td><input type="text" id="row-37-position" name="row-37-position" value="Office Manager"></td>
                                                    <td><select size="1" id="row-37-office" name="row-37-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td><input type="text" id="row-38-age" name="row-38-age" value="41"></td>
                                                    <td><input type="text" id="row-38-position" name="row-38-position" value="Secretary"></td>
                                                    <td><select size="1" id="row-38-office" name="row-38-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td><input type="text" id="row-39-age" name="row-39-age" value="62"></td>
                                                    <td><input type="text" id="row-39-position" name="row-39-position" value="Financial Controller"></td>
                                                    <td><select size="1" id="row-39-office" name="row-39-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td><input type="text" id="row-40-age" name="row-40-age" value="37"></td>
                                                    <td><input type="text" id="row-40-position" name="row-40-position" value="Office Manager"></td>
                                                    <td><select size="1" id="row-40-office" name="row-40-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td><input type="text" id="row-41-age" name="row-41-age" value="65"></td>
                                                    <td><input type="text" id="row-41-position" name="row-41-position" value="Director"></td>
                                                    <td><select size="1" id="row-41-office" name="row-41-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td><input type="text" id="row-42-age" name="row-42-age" value="64"></td>
                                                    <td><input type="text" id="row-42-position" name="row-42-position" value="Support Engineer"></td>
                                                    <td><select size="1" id="row-42-office" name="row-42-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td><input type="text" id="row-43-age" name="row-43-age" value="38"></td>
                                                    <td><input type="text" id="row-43-position" name="row-43-position" value="Software Engineer"></td>
                                                    <td><select size="1" id="row-43-office" name="row-43-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td><input type="text" id="row-44-age" name="row-44-age" value="37"></td>
                                                    <td><input type="text" id="row-44-position" name="row-44-position" value="Support Engineer"></td>
                                                    <td><select size="1" id="row-44-office" name="row-44-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo" selected="selected">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td><input type="text" id="row-45-age" name="row-45-age" value="61"></td>
                                                    <td><input type="text" id="row-45-position" name="row-45-position" value="Developer"></td>
                                                    <td><select size="1" id="row-45-office" name="row-45-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td><input type="text" id="row-46-age" name="row-46-age" value="47"></td>
                                                    <td><input type="text" id="row-46-position" name="row-46-position" value="Support Engineer"></td>
                                                    <td><select size="1" id="row-46-office" name="row-46-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td><input type="text" id="row-47-age" name="row-47-age" value="64"></td>
                                                    <td><input type="text" id="row-47-position" name="row-47-position" value="Data Coordinator"></td>
                                                    <td><select size="1" id="row-47-office" name="row-47-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td><input type="text" id="row-48-age" name="row-48-age" value="63"></td>
                                                    <td><input type="text" id="row-48-position" name="row-48-position" value="Software Engineer"></td>
                                                    <td><select size="1" id="row-48-office" name="row-48-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td><input type="text" id="row-49-age" name="row-49-age" value="56"></td>
                                                    <td><input type="text" id="row-49-position" name="row-49-position" value="Software Engineer"></td>
                                                    <td><select size="1" id="row-49-office" name="row-49-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td><input type="text" id="row-50-age" name="row-50-age" value="43"></td>
                                                    <td><input type="text" id="row-50-position" name="row-50-position" value="Junior Javascript Developer"></td>
                                                    <td><select size="1" id="row-50-office" name="row-50-office">
                                                            <option value="Edinburgh" selected="selected">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td><input type="text" id="row-51-age" name="row-51-age" value="46"></td>
                                                    <td><input type="text" id="row-51-position" name="row-51-position" value="Sales Assistant"></td>
                                                    <td><select size="1" id="row-51-office" name="row-51-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td><input type="text" id="row-52-age" name="row-52-age" value="47"></td>
                                                    <td><input type="text" id="row-52-position" name="row-52-position" value="Regional Director"></td>
                                                    <td><select size="1" id="row-52-office" name="row-52-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td><input type="text" id="row-53-age" name="row-53-age" value="21"></td>
                                                    <td><input type="text" id="row-53-position" name="row-53-position" value="Systems Administrator"></td>
                                                    <td><select size="1" id="row-53-office" name="row-53-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London" selected="selected">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td><input type="text" id="row-54-age" name="row-54-age" value="30"></td>
                                                    <td><input type="text" id="row-54-position" name="row-54-position" value="Developer"></td>
                                                    <td><select size="1" id="row-54-office" name="row-54-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco" selected="selected">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td><input type="text" id="row-55-age" name="row-55-age" value="51"></td>
                                                    <td><input type="text" id="row-55-position" name="row-55-position" value="Regional Director"></td>
                                                    <td><select size="1" id="row-55-office" name="row-55-office">
                                                            <option value="Edinburgh" selected="selected">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td><input type="text" id="row-56-age" name="row-56-age" value="29"></td>
                                                    <td><input type="text" id="row-56-position" name="row-56-position" value="Javascript Developer"></td>
                                                    <td><select size="1" id="row-56-office" name="row-56-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td><input type="text" id="row-57-age" name="row-57-age" value="27"></td>
                                                    <td><input type="text" id="row-57-position" name="row-57-position" value="Customer Support"></td>
                                                    <td><select size="1" id="row-57-office" name="row-57-office">
                                                            <option value="Edinburgh">
                                                                Edinburgh
                                                            </option>
                                                            <option value="London">
                                                                London
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                New York
                                                            </option>
                                                            <option value="San Francisco">
                                                                San Francisco
                                                            </option>
                                                            <option value="Tokyo">
                                                                Tokyo
                                                            </option>
                                                        </select></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="spacer"></div>
                                        <button class="btn btn-primary example-5-submit" type="submit">Submit form</button>


                                    </div>
                                </div>
                            </div>
                        </section></div>










                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                    <ul class="group-list list-unstyled">
                        <li class="group-row">
                            <div class="group-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Work</a></h4>
                            </div>
                        </li>
                        <li class="group-row">
                            <div class="group-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Friends</a></h4>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">Favourites</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_1' data-user-id='1'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clarine Vassar</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_2' data-user-id='2'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Brooks Latshaw</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_3' data-user-id='3'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clementina Brodeur</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">More Contacts</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_4' data-user-id='4'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Carri Busey</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_5' data-user-id='5'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Melissa Dock</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_6' data-user-id='6'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Verdell Rea</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_7' data-user-id='7'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Linette Lheureux</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_8' data-user-id='8'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Araceli Boatright</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_9' data-user-id='9'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clay Peskin</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_10' data-user-id='10'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Loni Tindall</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_11' data-user-id='11'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Tanisha Kimbro</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_12' data-user-id='12'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Jovita Tisdale</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-3.4.1.min.js" type="text/javascript"></script> 
        <script src="assets/js/popper.min.js" type="text/javascript"></script> 
        <!-- <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>  -->
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  

        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/datatables/js/dataTables.min.js" type="text/javascript"></script> <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js">
        </script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js">
        </script>
        <script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
        </script>
        <script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
        </script>
        <script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js">
        </script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js">
        </script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js">
        </script> <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
</html>



