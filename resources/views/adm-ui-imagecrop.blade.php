
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
        <title>Ultra Admin Bootstrap 4 : Image Cropper</title>
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
        <link href="assets/plugins/image-cropper/css/cropper.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/image-cropper/css/main.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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
                        <li class="open"> 
                            <a href="javascript:;">
                                <i class="fa fa-gift"></i>
                                <span class="title">Pages</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu" style='display:block;'>
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
                                    <a class="active" href="ui-imagecrop.html" >Image cropper</a>
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
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-table"></i>
                                <span class="title">Tables</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="tables-basic.html" >Basic tables</a>
                                </li>
                                <li>
                                    <a class="" href="tables-data.html" >Data Tables</a>
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
                                <h1 class="title">Image Cropper</h1>                            </div>

                            <div class="float-right d-none">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="ui-pricing.html">Pages</a>
                                    </li>
                                    <li class="active">
                                        <strong>Image cropper</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-xl-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left">Image Cropper</h2>
                                <div class="actions panel_actions float-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">





                                        <!-- start -->

                                        <div class="row">
                                            <div class="col-md-9">
                                                <!-- <h3>Demo:</h3> -->
                                                <div class="img-container">
                                                    <img id="image" src="data/image-cropper-1.jpg" alt="Picture">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <!-- <h3>Preview:</h3> -->
                                                <div class="docs-preview clearfix">
                                                    <div class="img-preview preview-lg"></div>
                                                    <div class="img-preview preview-md"></div>
                                                    <div class="img-preview preview-sm"></div>
                                                    <div class="img-preview preview-xs"></div>
                                                </div>

                                                <!-- <h3>Data:</h3> -->
                                                <div class="docs-data">
                                                    <div class="input-group input-group-sm">
                                                        <label class="input-group-addon" for="dataX">X</label>
                                                        <input type="text" class="form-control" id="dataX" placeholder="x">
                                                        <span class="input-group-addon">px</span>
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <label class="input-group-addon" for="dataY">Y</label>
                                                        <input type="text" class="form-control" id="dataY" placeholder="y">
                                                        <span class="input-group-addon">px</span>
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <label class="input-group-addon" for="dataWidth">Width</label>
                                                        <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                                        <span class="input-group-addon">px</span>
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <label class="input-group-addon" for="dataHeight">Height</label>
                                                        <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                                        <span class="input-group-addon">px</span>
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <label class="input-group-addon" for="dataRotate">Rotate</label>
                                                        <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                                        <span class="input-group-addon">deg</span>
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <label class="input-group-addon" for="dataScaleX">ScaleX</label>
                                                        <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <label class="input-group-addon" for="dataScaleY">ScaleY</label>
                                                        <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 docs-buttons">
                                                <!-- <h3>Toolbar:</h3> -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                                                            <span class="fa fa-arrows"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                                                            <span class="fa fa-crop"></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, 0.1)">
                                                            <span class="fa fa-search-plus"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, -0.1)">
                                                            <span class="fa fa-search-minus"></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, -10, 0)">
                                                            <span class="fa fa-arrow-left"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 10, 0)">
                                                            <span class="fa fa-arrow-right"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, -10)">
                                                            <span class="fa fa-arrow-up"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, 10)">
                                                            <span class="fa fa-arrow-down"></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, -45)">
                                                            <span class="fa fa-rotate-left"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, 45)">
                                                            <span class="fa fa-rotate-right"></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleX&quot;, -1)">
                                                            <span class="fa fa-arrows-h"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleY&quot;, -1)">
                                                            <span class="fa fa-arrows-v"></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;crop&quot;)">
                                                            <span class="fa fa-check"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;clear&quot;)">
                                                            <span class="fa fa-remove"></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;disable&quot;)">
                                                            <span class="fa fa-lock"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;enable&quot;)">
                                                            <span class="fa fa-unlock"></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;reset&quot;)">
                                                            <span class="fa fa-refresh"></span>
                                                        </span>
                                                    </button>
                                                    <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                                                        <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Import image with Blob URLs">
                                                            <span class="fa fa-upload"></span>
                                                        </span>
                                                    </label>
                                                    <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;destroy&quot;)">
                                                            <span class="fa fa-power-off"></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="btn-group btn-group-crop">
                                                    <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { maxWidth: 4096, maxHeight: 4096 })">
                                                            Get Cropped Canvas
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                                                            160&times;90
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                                                            320&times;180
                                                        </span>
                                                    </button>
                                                </div>

                                                <!-- Show the cropped image in modal -->
                                                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body"></div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal -->

                                                <button type="button" class="btn btn-secondary" data-method="getData" data-option data-target="#putData">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getData&quot;)">
                                                        Get Data
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-method="setData" data-target="#putData">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setData&quot;, data)">
                                                        Set Data
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-method="getContainerData" data-option data-target="#putData">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getContainerData&quot;)">
                                                        Get Container Data
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-method="getImageData" data-option data-target="#putData">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getImageData&quot;)">
                                                        Get Image Data
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-method="getCanvasData" data-option data-target="#putData">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCanvasData&quot;)">
                                                        Get Canvas Data
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-method="setCanvasData" data-target="#putData">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setCanvasData&quot;, data)">
                                                        Set Canvas Data
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-method="getCropBoxData" data-option data-target="#putData">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCropBoxData&quot;)">
                                                        Get Crop Box Data
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-method="setCropBoxData" data-target="#putData">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setCropBoxData&quot;, data)">
                                                        Set Crop Box Data
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-method="moveTo" data-option="0">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="cropper.moveTo(0)">
                                                        Move to [0,0]
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-method="zoomTo" data-option="1">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="cropper.zoomTo(1)">
                                                        Zoom to 100%
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-method="rotateTo" data-option="180">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="cropper.rotateTo(180)">
                                                        Rotate 180°
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-method="scale" data-option="-2" data-second-option="-1">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scale(-2, -1)">
                                                        Scale (-2, -1)
                                                    </span>
                                                </button>
                                                <textarea type="text" class="form-control" id="putData" rows="1" placeholder="Get data to here or set data with this value" style="height: 100px;"></textarea>
                                            </div><!-- /.docs-buttons -->

                                            <div class="col-md-3 docs-toggles">
                                                <!-- <h3>Toggles:</h3> -->
                                                <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                                                    <label class="btn btn-primary active">
                                                        <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 16 / 9">
                                                            16:9
                                                        </span>
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 4 / 3">
                                                            4:3
                                                        </span>
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 1 / 1">
                                                            1:1
                                                        </span>
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 2 / 3">
                                                            2:3
                                                        </span>
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: NaN">
                                                            Free
                                                        </span>
                                                    </label>
                                                </div>

                                                <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                                                    <label class="btn btn-primary active">
                                                        <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 0">
                                                            VM0
                                                        </span>
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 1">
                                                            VM1
                                                        </span>
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 2">
                                                            VM2
                                                        </span>
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 3">
                                                            VM3
                                                        </span>
                                                    </label>
                                                </div>

                                                <div class="dropdown dropup docs-options">
                                                    <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                                                        Toggle Options
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="responsive" checked>
                                                                responsive
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="restore" checked>
                                                                restore
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="checkCrossOrigin" checked>
                                                                checkCrossOrigin
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="checkOrientation" checked>
                                                                checkOrientation
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="modal" checked>
                                                                modal
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="guides" checked>
                                                                guides
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="center" checked>
                                                                center
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="highlight" checked>
                                                                highlight
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="background" checked>
                                                                background
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="autoCrop" checked>
                                                                autoCrop
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="movable" checked>
                                                                movable
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="rotatable" checked>
                                                                rotatable
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="scalable" checked>
                                                                scalable
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="zoomable" checked>
                                                                zoomable
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="zoomOnTouch" checked>
                                                                zoomOnTouch
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="zoomOnWheel" checked>
                                                                zoomOnWheel
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="cropBoxMovable" checked>
                                                                cropBoxMovable
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="cropBoxResizable" checked>
                                                                cropBoxResizable
                                                            </label>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="toggleDragModeOnDblclick" checked>
                                                                toggleDragModeOnDblclick
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.dropdown -->

                                                <a class="btn btn-success btn-block" data-toggle="tooltip" data-animation="false" href="https://fengyuanchen.github.io/cropperjs" title="The non-jQuery version of Cropper (recommended)">Cropper.js</a>

                                            </div><!-- /.docs-toggles -->
                                        </div>


                                        <!-- end -->







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
        <script src="assets/plugins/image-cropper/js/cropper.js" type="text/javascript"></script><script src="assets/plugins/image-cropper/js/main.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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



