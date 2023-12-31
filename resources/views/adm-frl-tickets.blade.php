
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
        <title>Ultra Admin Bootstrap 4 : Tickets</title>
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
        <link href="assets/plugins/datatables/css/dataTables.min.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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
                                <img src="data/profile/profile-freelancing.jpg" alt="user-image" class="rounded-circle img-inline">
                                <span>John Doug <i class="fa fa-angle-down"></i></span>
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
                                <img src="data/profile/profile-freelancing.jpg" class="img-fluid rounded-circle">
                            </a>
                        </div>

                        <div class="profile-details col-lg-8 col-md-8 col-8">

                            <h3>
                                <a href="ui-profile.html">John Doug</a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">Administrator</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>	


                        <li class=""> 
                            <a href="index-freelancing.html">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span class="title">Buyers</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="frl-buyers.html" >All Buyers</a>
                                </li>
                                <li>
                                    <a class="" href="frl-buyer-add.html" >Add Buyer</a>
                                </li>
                                <li>
                                    <a class="" href="frl-buyer-edit.html" >Edit Buyer</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span class="title">Sellers</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="frl-sellers.html" >All Sellers</a>
                                </li>
                                <li>
                                    <a class="" href="frl-seller-add.html" >Add Seller</a>
                                </li>
                                <li>
                                    <a class="" href="frl-seller-edit.html" >Edit Seller</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-dollar "></i>
                                <span class="title">Billing</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="frl-invoices.html" >All Invoices</a>
                                </li>
                                <li>
                                    <a class="" href="frl-invoice-add.html" >Add Invoice</a>
                                </li>
                                <li>
                                    <a class="" href="frl-invoice-edit.html" >Edit Invoice</a>
                                </li>
                                <li>
                                    <a class="" href="frl-invoice-view.html" >View Invoice</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="title">Bids</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="frl-bids.html" >All Bids</a>
                                </li>
                                <li>
                                    <a class="" href="frl-bid-add.html" >Add Bid</a>
                                </li>
                                <li>
                                    <a class="" href="frl-bid-edit.html" >Edit Bid</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Reports</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="frl-report-sales.html" >Sales</a>
                                </li>
                                <li>
                                    <a class="" href="frl-report-buyers.html" >Buyers</a>
                                </li>
                                <li>
                                    <a class="" href="frl-report-targets.html" >Targets</a>
                                </li>
                            </ul>
                        </li>
                        <li class="open"> 
                            <a href="javascript:;">
                                <i class="fa fa-question-circle"></i>
                                <span class="title">Tickets</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu" style='display:block;'>
                                <li>
                                    <a class="active" href="frl-tickets.html" >All Tickets</a>
                                </li>
                                <li>
                                    <a class="" href="frl-ticket-add.html" >Add Ticket</a>
                                </li>
                                <li>
                                    <a class="" href="frl-ticket-edit.html" >Edit Ticket</a>
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
                                    <a class="" href="frl-mail-inbox.html" >Inbox</a>
                                </li>
                                <li>
                                    <a class="" href="frl-mail-compose.html" >Compose</a>
                                </li>
                                <li>
                                    <a class="" href="frl-mail-view.html" >View</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-user"></i>
                                <span class="title">Users</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="frl-users.html" >All Users</a>
                                </li>
                                <li>
                                    <a class="" href="frl-user-add.html" >Add User</a>
                                </li>
                                <li>
                                    <a class="" href="frl-user-edit.html" >Edit User</a>
                                </li>
                            </ul>
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

                    </ul>

                </div>
                <!-- MAIN MENU - END -->



                <div class="project-info">

                    <div class="block1">
                        <div class="data">
                            <span class='title'>Buyers</span>
                            <span class='total'>745</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_orders">...</span>
                        </div>
                    </div>

                    <div class="block2">
                        <div class="data">
                            <span class='title'>Projects</span>
                            <span class='total'>6142</span>
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
                                <h1 class="title">Tickets</h1>                            </div>

                            <div class="float-right d-none">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="frl-tickets.html">Tickets</a>
                                    </li>
                                    <li class="active">
                                        <strong>All Tickets</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left">All Tickets</h2>
                                <div class="actions panel_actions float-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">



                                        <!-- ********************************************** -->


                                        <table id="example-11" class="display table table-hover table-condensed" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Ticket Number</th><th>Type</th><th>Name</th><th>Email</th><th>Date</th><th>Status</th>                    </tr>
                                            </thead>

                                            <tbody>
                                                <tr><td>76354-106</td><td>logo design</td><td>Roger Howard</td><td>rhoward0@forbes.com</td><td>7/7/2015</td><td>Completed</td></tr><tr><td>49035-339</td><td>SEO and SEM</td><td>Jessica Berry</td><td>jberry1@163.com</td><td>12/13/2014</td><td>Completed</td></tr><tr><td>63323-542</td><td>programming</td><td>Deborah Fernandez</td><td>dfernandez2@guardian.co.uk</td><td>8/21/2015</td><td>New</td></tr><tr><td>68016-187</td><td>programming</td><td>Julie James</td><td>jjames3@twitter.com</td><td>4/26/2015</td><td>Completed</td></tr><tr><td>21130-374</td><td>graphic design</td><td>Carol Burns</td><td>cburns4@usgs.gov</td><td>5/21/2015</td><td>Completed</td></tr><tr><td>55714-4466</td><td>marketing</td><td>Ann Thomas</td><td>athomas5@posterous.com</td><td>2/20/2015</td><td>New</td></tr><tr><td>0023-9232</td><td>social media marketing</td><td>Martha Griffin</td><td>mgriffin6@feedburner.com</td><td>5/1/2015</td><td>New</td></tr><tr><td>51263-3126</td><td>social media marketing</td><td>Louis Ford</td><td>lford7@stumbleupon.com</td><td>9/13/2015</td><td>Completed</td></tr><tr><td>61727-340</td><td>crm service</td><td>Walter Gibson</td><td>wgibson8@earthlink.net</td><td>12/19/2014</td><td>Completed</td></tr><tr><td>35356-873</td><td>social media marketing</td><td>Patricia Parker</td><td>pparker9@alexa.com</td><td>7/17/2015</td><td>New</td></tr><tr><td>49349-983</td><td>graphic design</td><td>Roy Fowler</td><td>rfowlera@sina.com.cn</td><td>6/13/2015</td><td>Completed</td></tr><tr><td>48951-5065</td><td>programming</td><td>Joe Daniels</td><td>jdanielsb@nyu.edu</td><td>4/4/2015</td><td>Completed</td></tr><tr><td>49288-0110</td><td>branding</td><td>Joseph Ford</td><td>jfordc@naver.com</td><td>9/26/2015</td><td>Completed</td></tr><tr><td>0378-5522</td><td>crm service</td><td>Jose Sullivan</td><td>jsullivand@timesonline.co.uk</td><td>10/27/2015</td><td>Completed</td></tr><tr><td>61727-302</td><td>php website</td><td>Evelyn Dixon</td><td>edixone@jimdo.com</td><td>8/14/2015</td><td>New</td></tr><tr><td>36987-3057</td><td>branding</td><td>Harry Wells</td><td>hwellsf@goo.gl</td><td>3/6/2015</td><td>Completed</td></tr><tr><td>59779-807</td><td>SEO and SEM</td><td>Daniel Mccoy</td><td>dmccoyg@cornell.edu</td><td>11/21/2015</td><td>Completed</td></tr><tr><td>68645-474</td><td>wordpress website</td><td>Diana Hunt</td><td>dhunth@mediafire.com</td><td>4/2/2015</td><td>New</td></tr><tr><td>0023-3416</td><td>web design</td><td>Justin Nguyen</td><td>jnguyeni@4shared.com</td><td>1/21/2015</td><td>Completed</td></tr><tr><td>66715-9741</td><td>photoshop</td><td>Patrick Adams</td><td>padamsj@diigo.com</td><td>4/10/2015</td><td>New</td></tr><tr><td>0363-0906</td><td>logo design</td><td>Arthur Turner</td><td>aturnerk@dailymotion.com</td><td>8/13/2015</td><td>New</td></tr><tr><td>0781-2020</td><td>graphic design</td><td>Sarah Black</td><td>sblackl@github.com</td><td>4/21/2015</td><td>Completed</td></tr><tr><td>18527-120</td><td>SEO and SEM</td><td>Angela Shaw</td><td>ashawm@elpais.com</td><td>9/10/2015</td><td>New</td></tr><tr><td>41163-679</td><td>photoshop</td><td>Robin Castillo</td><td>rcastillon@ftc.gov</td><td>6/8/2015</td><td>Completed</td></tr><tr><td>0555-0926</td><td>graphic design</td><td>Annie Hayes</td><td>ahayeso@sina.com.cn</td><td>5/23/2015</td><td>Completed</td></tr><tr><td>67296-0544</td><td>graphic design</td><td>Rebecca Reed</td><td>rreedp@seattletimes.com</td><td>3/8/2015</td><td>Completed</td></tr><tr><td>60681-0801</td><td>branding</td><td>Charles Henderson</td><td>chendersonq@icio.us</td><td>12/31/2014</td><td>New</td></tr><tr><td>37000-556</td><td>SEO and SEM</td><td>Larry Foster</td><td>lfosterr@zimbio.com</td><td>6/26/2015</td><td>New</td></tr><tr><td>67239-0203</td><td>SEO and SEM</td><td>Brenda Ramos</td><td>bramoss@rambler.ru</td><td>6/8/2015</td><td>New</td></tr><tr><td>49349-988</td><td>php website</td><td>Walter Garrett</td><td>wgarrettt@yahoo.com</td><td>12/30/2014</td><td>Completed</td></tr><tr><td>55154-3728</td><td>programming</td><td>Roy Fowler</td><td>rfowleru@wordpress.com</td><td>1/23/2015</td><td>Completed</td></tr><tr><td>41163-911</td><td>marketing</td><td>Julia Carr</td><td>jcarrv@icq.com</td><td>3/2/2015</td><td>Completed</td></tr><tr><td>59970-053</td><td>programming</td><td>Cheryl Williamson</td><td>cwilliamsonw@bizjournals.com</td><td>12/25/2014</td><td>New</td></tr><tr><td>35000-716</td><td>photoshop</td><td>Teresa Daniels</td><td>tdanielsx@twitpic.com</td><td>3/24/2015</td><td>New</td></tr><tr><td>51386-711</td><td>marketing</td><td>Denise Thomas</td><td>dthomasy@behance.net</td><td>8/4/2015</td><td>New</td></tr><tr><td>68152-103</td><td>logo design</td><td>Craig Mcdonald</td><td>cmcdonaldz@biblegateway.com</td><td>7/17/2015</td><td>New</td></tr><tr><td>60512-6473</td><td>SEO and SEM</td><td>Norma Ross</td><td>nross10@fema.gov</td><td>5/28/2015</td><td>New</td></tr><tr><td>35356-662</td><td>branding</td><td>Pamela Crawford</td><td>pcrawford11@sbwire.com</td><td>4/28/2015</td><td>Completed</td></tr><tr><td>61703-319</td><td>php website</td><td>Doris Hernandez</td><td>dhernandez12@histats.com</td><td>8/22/2015</td><td>Completed</td></tr><tr><td>28691-0838</td><td>graphic design</td><td>Mary Reynolds</td><td>mreynolds13@surveymonkey.com</td><td>8/24/2015</td><td>New</td></tr><tr><td>0206-2100</td><td>logo design</td><td>Billy Young</td><td>byoung14@forbes.com</td><td>5/29/2015</td><td>New</td></tr><tr><td>86227-000</td><td>marketing</td><td>Betty Burns</td><td>bburns15@tripod.com</td><td>10/16/2015</td><td>Completed</td></tr><tr><td>49999-059</td><td>photoshop</td><td>Lori West</td><td>lwest16@typepad.com</td><td>3/12/2015</td><td>Completed</td></tr><tr><td>52544-238</td><td>php website</td><td>Norma King</td><td>nking17@exblog.jp</td><td>10/20/2015</td><td>New</td></tr><tr><td>60429-372</td><td>SEO and SEM</td><td>Harry Cooper</td><td>hcooper18@examiner.com</td><td>3/16/2015</td><td>Completed</td></tr><tr><td>63354-001</td><td>web design</td><td>Lori Stone</td><td>lstone19@mapquest.com</td><td>7/1/2015</td><td>New</td></tr><tr><td>65217-0001</td><td>branding</td><td>Susan Dean</td><td>sdean1a@multiply.com</td><td>7/19/2015</td><td>Completed</td></tr><tr><td>0143-9729</td><td>photoshop</td><td>Evelyn Garcia</td><td>egarcia1b@blog.com</td><td>4/29/2015</td><td>Completed</td></tr><tr><td>62080-8002</td><td>branding</td><td>Julie Alvarez</td><td>jalvarez1c@4shared.com</td><td>3/14/2015</td><td>Completed</td></tr><tr><td>11819-351</td><td>branding</td><td>Jeremy Bailey</td><td>jbailey1d@artisteer.com</td><td>12/21/2014</td><td>New</td></tr><tr><td>50021-243</td><td>SEO and SEM</td><td>Paul Bennett</td><td>pbennett1e@dyndns.org</td><td>5/18/2015</td><td>Completed</td></tr><tr><td>48102-101</td><td>marketing</td><td>Laura Griffin</td><td>lgriffin1f@java.com</td><td>11/14/2015</td><td>New</td></tr><tr><td>51389-210</td><td>branding</td><td>Victor Romero</td><td>vromero1g@last.fm</td><td>2/28/2015</td><td>New</td></tr><tr><td>61722-081</td><td>SEO and SEM</td><td>Christina Turner</td><td>cturner1h@51.la</td><td>3/19/2015</td><td>Completed</td></tr><tr><td>64117-248</td><td>crm service</td><td>Doris Freeman</td><td>dfreeman1i@skype.com</td><td>9/9/2015</td><td>Completed</td></tr><tr><td>41250-946</td><td>photoshop</td><td>Irene Lee</td><td>ilee1j@jalbum.net</td><td>8/9/2015</td><td>Completed</td></tr><tr><td>0591-1117</td><td>crm service</td><td>Gerald Powell</td><td>gpowell1k@printfriendly.com</td><td>6/23/2015</td><td>New</td></tr><tr><td>43772-0021</td><td>web design</td><td>Richard Alexander</td><td>ralexander1l@epa.gov</td><td>8/22/2015</td><td>Completed</td></tr><tr><td>43269-796</td><td>logo design</td><td>Victor Harris</td><td>vharris1m@last.fm</td><td>3/9/2015</td><td>Completed</td></tr><tr><td>63736-203</td><td>web design</td><td>Cynthia Burke</td><td>cburke1n@hc360.com</td><td>4/29/2015</td><td>New</td></tr><tr><td>66336-059</td><td>web design</td><td>Daniel Williams</td><td>dwilliams1o@edublogs.org</td><td>8/22/2015</td><td>Completed</td></tr><tr><td>63779-056</td><td>graphic design</td><td>Kimberly Peters</td><td>kpeters1p@usda.gov</td><td>1/9/2015</td><td>Completed</td></tr><tr><td>68788-9078</td><td>photoshop</td><td>Nicholas Garza</td><td>ngarza1q@princeton.edu</td><td>2/20/2015</td><td>New</td></tr><tr><td>0409-1255</td><td>logo design</td><td>George Campbell</td><td>gcampbell1r@delicious.com</td><td>12/4/2014</td><td>Completed</td></tr><tr><td>25021-827</td><td>graphic design</td><td>Lisa Mitchell</td><td>lmitchell1s@google.com.au</td><td>12/30/2014</td><td>Completed</td></tr><tr><td>32909-121</td><td>logo design</td><td>Carolyn Robertson</td><td>crobertson1t@csmonitor.com</td><td>7/1/2015</td><td>New</td></tr><tr><td>58232-0748</td><td>marketing</td><td>Thomas Diaz</td><td>tdiaz1u@psu.edu</td><td>8/23/2015</td><td>New</td></tr><tr><td>0169-7704</td><td>photoshop</td><td>Harry Barnes</td><td>hbarnes1v@amazon.com</td><td>11/25/2015</td><td>Completed</td></tr><tr><td>11822-0250</td><td>photoshop</td><td>Kathleen Walker</td><td>kwalker1w@slideshare.net</td><td>8/4/2015</td><td>Completed</td></tr><tr><td>51660-143</td><td>web design</td><td>Carlos Grant</td><td>cgrant1x@yolasite.com</td><td>3/5/2015</td><td>New</td></tr><tr><td>13537-274</td><td>php website</td><td>Mildred Flores</td><td>mflores1y@squarespace.com</td><td>1/23/2015</td><td>New</td></tr><tr><td>68084-072</td><td>web design</td><td>Donald Garza</td><td>dgarza1z@vkontakte.ru</td><td>1/25/2015</td><td>Completed</td></tr><tr><td>13537-190</td><td>logo design</td><td>Teresa Shaw</td><td>tshaw20@cbslocal.com</td><td>9/5/2015</td><td>Completed</td></tr><tr><td>35356-546</td><td>logo design</td><td>Eugene Watson</td><td>ewatson21@alexa.com</td><td>5/26/2015</td><td>Completed</td></tr><tr><td>68382-796</td><td>photoshop</td><td>Timothy Knight</td><td>tknight22@skype.com</td><td>3/31/2015</td><td>Completed</td></tr><tr><td>55154-2395</td><td>marketing</td><td>Willie Ray</td><td>wray23@creativecommons.org</td><td>2/2/2015</td><td>Completed</td></tr><tr><td>54575-114</td><td>graphic design</td><td>Kathryn Armstrong</td><td>karmstrong24@soundcloud.com</td><td>4/14/2015</td><td>Completed</td></tr><tr><td>64616-039</td><td>branding</td><td>Debra Andrews</td><td>dandrews25@gnu.org</td><td>6/3/2015</td><td>New</td></tr><tr><td>42549-693</td><td>web design</td><td>Julie Hall</td><td>jhall26@dell.com</td><td>11/16/2015</td><td>Completed</td></tr><tr><td>58503-009</td><td>graphic design</td><td>Aaron Stone</td><td>astone27@clickbank.net</td><td>11/24/2015</td><td>Completed</td></tr><tr><td>43269-850</td><td>SEO and SEM</td><td>Christopher Hernandez</td><td>chernandez28@photobucket.com</td><td>8/30/2015</td><td>Completed</td></tr><tr><td>52609-0006</td><td>social media marketing</td><td>Craig Robertson</td><td>crobertson29@elpais.com</td><td>2/23/2015</td><td>Completed</td></tr><tr><td>41520-916</td><td>wordpress website</td><td>Jessica Roberts</td><td>jroberts2a@godaddy.com</td><td>8/21/2015</td><td>New</td></tr><tr><td>0187-1613</td><td>branding</td><td>Maria Wallace</td><td>mwallace2b@rediff.com</td><td>1/18/2015</td><td>Completed</td></tr><tr><td>59387-001</td><td>php website</td><td>Helen Miller</td><td>hmiller2c@weibo.com</td><td>2/23/2015</td><td>Completed</td></tr><tr><td>63323-377</td><td>SEO and SEM</td><td>Carlos Warren</td><td>cwarren2d@howstuffworks.com</td><td>1/17/2015</td><td>Completed</td></tr><tr><td>10812-337</td><td>web design</td><td>Kathleen Evans</td><td>kevans2e@msu.edu</td><td>6/23/2015</td><td>New</td></tr><tr><td>0591-2790</td><td>crm service</td><td>Brian Howell</td><td>bhowell2f@smugmug.com</td><td>7/6/2015</td><td>New</td></tr><tr><td>0409-7118</td><td>programming</td><td>Mary Boyd</td><td>mboyd2g@admin.ch</td><td>3/31/2015</td><td>Completed</td></tr><tr><td>0378-0018</td><td>SEO and SEM</td><td>Kevin Powell</td><td>kpowell2h@about.com</td><td>4/8/2015</td><td>Completed</td></tr><tr><td>36987-2475</td><td>photoshop</td><td>Diane Ramos</td><td>dramos2i@nba.com</td><td>7/20/2015</td><td>Completed</td></tr><tr><td>67510-0005</td><td>graphic design</td><td>Cheryl Lopez</td><td>clopez2j@google.com.hk</td><td>11/11/2015</td><td>New</td></tr><tr><td>23155-030</td><td>logo design</td><td>Todd Hernandez</td><td>thernandez2k@gizmodo.com</td><td>11/17/2015</td><td>New</td></tr><tr><td>28595-905</td><td>php website</td><td>Kathy Brooks</td><td>kbrooks2l@walmart.com</td><td>2/25/2015</td><td>Completed</td></tr><tr><td>0574-4022</td><td>branding</td><td>Maria Hansen</td><td>mhansen2m@mediafire.com</td><td>3/1/2015</td><td>Completed</td></tr><tr><td>42002-423</td><td>marketing</td><td>Ruth Fields</td><td>rfields2n@blogtalkradio.com</td><td>5/14/2015</td><td>New</td></tr><tr><td>43074-108</td><td>SEO and SEM</td><td>Sarah Torres</td><td>storres2o@vimeo.com</td><td>7/19/2015</td><td>New</td></tr><tr><td>62037-696</td><td>graphic design</td><td>George Mendoza</td><td>gmendoza2p@t-online.de</td><td>1/30/2015</td><td>Completed</td></tr><tr><td>23155-006</td><td>programming</td><td>Carl Fuller</td><td>cfuller2q@fda.gov</td><td>2/22/2015</td><td>Completed</td></tr><tr><td>59667-0034</td><td>marketing</td><td>Adam Ruiz</td><td>aruiz2r@tinyurl.com</td><td>5/4/2015</td><td>Completed</td></tr><tr><td>22700-138</td><td>social media marketing</td><td>Alan Murphy</td><td>amurphy2s@google.nl</td><td>5/24/2015</td><td>Completed</td></tr><tr><td>52125-749</td><td>crm service</td><td>Robert Hawkins</td><td>rhawkins2t@t-online.de</td><td>1/1/2015</td><td>New</td></tr><tr><td>54868-3004</td><td>branding</td><td>Susan Gonzales</td><td>sgonzales2u@netlog.com</td><td>7/26/2015</td><td>New</td></tr><tr><td>30142-913</td><td>photoshop</td><td>Juan Patterson</td><td>jpatterson2v@squarespace.com</td><td>1/21/2015</td><td>New</td></tr><tr><td>57664-124</td><td>branding</td><td>Harold Murray</td><td>hmurray2w@feedburner.com</td><td>1/14/2015</td><td>Completed</td></tr><tr><td>68437-011</td><td>logo design</td><td>Pamela Richards</td><td>prichards2x@kickstarter.com</td><td>12/26/2014</td><td>Completed</td></tr><tr><td>53510-000</td><td>crm service</td><td>Beverly Alexander</td><td>balexander2y@nps.gov</td><td>5/21/2015</td><td>New</td></tr><tr><td>54868-4803</td><td>logo design</td><td>Kenneth Hansen</td><td>khansen2z@slideshare.net</td><td>9/18/2015</td><td>New</td></tr><tr><td>36987-1067</td><td>crm service</td><td>Sara Anderson</td><td>sanderson30@samsung.com</td><td>7/9/2015</td><td>Completed</td></tr><tr><td>54868-0117</td><td>web design</td><td>Russell Cox</td><td>rcox31@house.gov</td><td>6/14/2015</td><td>New</td></tr><tr><td>0268-1396</td><td>SEO and SEM</td><td>Cynthia Cox</td><td>ccox32@bloomberg.com</td><td>5/18/2015</td><td>Completed</td></tr><tr><td>75848-0300</td><td>photoshop</td><td>Jacqueline Stone</td><td>jstone33@joomla.org</td><td>5/20/2015</td><td>Completed</td></tr><tr><td>43742-0236</td><td>php website</td><td>Jonathan Bishop</td><td>jbishop34@earthlink.net</td><td>7/5/2015</td><td>New</td></tr><tr><td>54569-3121</td><td>crm service</td><td>Margaret Walker</td><td>mwalker35@shareasale.com</td><td>10/9/2015</td><td>New</td></tr><tr><td>0591-2880</td><td>marketing</td><td>Louis Reed</td><td>lreed36@bbc.co.uk</td><td>7/19/2015</td><td>Completed</td></tr><tr><td>16714-071</td><td>web design</td><td>Andrea Matthews</td><td>amatthews37@imageshack.us</td><td>11/22/2015</td><td>New</td></tr><tr><td>36987-1773</td><td>social media marketing</td><td>Steve Weaver</td><td>sweaver38@symantec.com</td><td>1/22/2015</td><td>Completed</td></tr><tr><td>16837-855</td><td>SEO and SEM</td><td>Carlos Mason</td><td>cmason39@home.pl</td><td>1/22/2015</td><td>New</td></tr><tr><td>54868-4928</td><td>crm service</td><td>Justin Reyes</td><td>jreyes3a@ca.gov</td><td>9/20/2015</td><td>Completed</td></tr><tr><td>0615-7690</td><td>marketing</td><td>Janice Cole</td><td>jcole3b@hp.com</td><td>4/21/2015</td><td>New</td></tr><tr><td>68788-9522</td><td>php website</td><td>Michelle Myers</td><td>mmyers3c@army.mil</td><td>8/3/2015</td><td>New</td></tr><tr><td>43598-319</td><td>branding</td><td>Terry Bowman</td><td>tbowman3d@4shared.com</td><td>2/24/2015</td><td>Completed</td></tr><tr><td>68472-160</td><td>crm service</td><td>Peter Gray</td><td>pgray3e@lycos.com</td><td>9/28/2015</td><td>Completed</td></tr><tr><td>59779-426</td><td>marketing</td><td>Ronald Ford</td><td>rford3f@tripod.com</td><td>3/26/2015</td><td>Completed</td></tr><tr><td>62007-001</td><td>wordpress website</td><td>Stephen Payne</td><td>spayne3g@un.org</td><td>11/2/2015</td><td>New</td></tr><tr><td>36987-3449</td><td>graphic design</td><td>Albert Welch</td><td>awelch3h@nytimes.com</td><td>9/9/2015</td><td>Completed</td></tr><tr><td>63256-100</td><td>web design</td><td>Edward Reynolds</td><td>ereynolds3i@woothemes.com</td><td>5/12/2015</td><td>Completed</td></tr><tr><td>53045-107</td><td>crm service</td><td>Michael Robinson</td><td>mrobinson3j@sitemeter.com</td><td>4/19/2015</td><td>Completed</td></tr><tr><td>36987-1106</td><td>branding</td><td>Jennifer Reyes</td><td>jreyes3k@example.com</td><td>6/28/2015</td><td>New</td></tr><tr><td>69129-010</td><td>logo design</td><td>Christina Hart</td><td>chart3l@tuttocitta.it</td><td>1/20/2015</td><td>Completed</td></tr><tr><td>16590-211</td><td>graphic design</td><td>Norma Lawson</td><td>nlawson3m@twitter.com</td><td>2/6/2015</td><td>New</td></tr><tr><td>41616-759</td><td>programming</td><td>Aaron Gardner</td><td>agardner3n@senate.gov</td><td>10/12/2015</td><td>New</td></tr><tr><td>43376-240</td><td>social media marketing</td><td>Jason Young</td><td>jyoung3o@state.gov</td><td>3/26/2015</td><td>Completed</td></tr><tr><td>63874-413</td><td>crm service</td><td>Mark Turner</td><td>mturner3p@over-blog.com</td><td>8/7/2015</td><td>New</td></tr><tr><td>54868-2440</td><td>social media marketing</td><td>Carolyn Chapman</td><td>cchapman3q@huffingtonpost.com</td><td>5/21/2015</td><td>Completed</td></tr><tr><td>43772-0042</td><td>web design</td><td>Dennis Matthews</td><td>dmatthews3r@goo.ne.jp</td><td>5/31/2015</td><td>Completed</td></tr><tr><td>0268-1418</td><td>social media marketing</td><td>Victor Cook</td><td>vcook3s@upenn.edu</td><td>7/16/2015</td><td>Completed</td></tr><tr><td>64117-577</td><td>programming</td><td>Lisa Coleman</td><td>lcoleman3t@ox.ac.uk</td><td>7/18/2015</td><td>Completed</td></tr><tr><td>53329-875</td><td>social media marketing</td><td>Judith Stone</td><td>jstone3u@ning.com</td><td>11/18/2015</td><td>New</td></tr><tr><td>0781-1496</td><td>logo design</td><td>Louis Montgomery</td><td>lmontgomery3v@zdnet.com</td><td>2/2/2015</td><td>Completed</td></tr><tr><td>55758-003</td><td>wordpress website</td><td>Bruce Stewart</td><td>bstewart3w@google.com.au</td><td>7/29/2015</td><td>New</td></tr><tr><td>10812-101</td><td>social media marketing</td><td>Judy Hansen</td><td>jhansen3x@ucla.edu</td><td>12/5/2014</td><td>New</td></tr><tr><td>52685-354</td><td>branding</td><td>Diana Kelley</td><td>dkelley3y@de.vu</td><td>2/21/2015</td><td>New</td></tr><tr><td>58118-1638</td><td>social media marketing</td><td>Christine Mccoy</td><td>cmccoy3z@paginegialle.it</td><td>7/25/2015</td><td>New</td></tr><tr><td>36987-2181</td><td>marketing</td><td>Annie Jones</td><td>ajones40@example.com</td><td>3/5/2015</td><td>New</td></tr><tr><td>0603-3842</td><td>SEO and SEM</td><td>Douglas Carr</td><td>dcarr41@feedburner.com</td><td>7/11/2015</td><td>Completed</td></tr><tr><td>59535-8601</td><td>php website</td><td>James Murray</td><td>jmurray42@ucsd.edu</td><td>10/21/2015</td><td>New</td></tr><tr><td>36987-2084</td><td>photoshop</td><td>Debra Richardson</td><td>drichardson43@berkeley.edu</td><td>7/12/2015</td><td>Completed</td></tr><tr><td>51285-446</td><td>web design</td><td>Shirley Ferguson</td><td>sferguson44@reuters.com</td><td>3/14/2015</td><td>Completed</td></tr><tr><td>55758-007</td><td>wordpress website</td><td>Jean Wells</td><td>jwells45@squidoo.com</td><td>10/13/2015</td><td>Completed</td></tr><tr><td>24385-316</td><td>branding</td><td>Stephen Morrison</td><td>smorrison46@webs.com</td><td>12/25/2014</td><td>New</td></tr><tr><td>49738-551</td><td>web design</td><td>Fred Ford</td><td>fford47@mapy.cz</td><td>9/24/2015</td><td>New</td></tr><tr><td>63187-006</td><td>logo design</td><td>Diane Andrews</td><td>dandrews48@buzzfeed.com</td><td>5/3/2015</td><td>New</td></tr><tr><td>0591-2464</td><td>graphic design</td><td>Michelle Stephens</td><td>mstephens49@bloomberg.com</td><td>8/22/2015</td><td>Completed</td></tr><tr><td>76250-123</td><td>SEO and SEM</td><td>Justin Thompson</td><td>jthompson4a@cisco.com</td><td>7/28/2015</td><td>New</td></tr><tr><td>0603-4383</td><td>photoshop</td><td>Paul Shaw</td><td>pshaw4b@bloglines.com</td><td>1/1/2015</td><td>Completed</td></tr><tr><td>60681-1802</td><td>logo design</td><td>Juan Rodriguez</td><td>jrodriguez4c@facebook.com</td><td>8/5/2015</td><td>New</td></tr><tr><td>51672-2062</td><td>social media marketing</td><td>Lori Davis</td><td>ldavis4d@nbcnews.com</td><td>4/27/2015</td><td>New</td></tr><tr><td>37205-861</td><td>SEO and SEM</td><td>John Peters</td><td>jpeters4e@theatlantic.com</td><td>2/20/2015</td><td>Completed</td></tr><tr><td>63629-1676</td><td>php website</td><td>Emily Rodriguez</td><td>erodriguez4f@symantec.com</td><td>1/19/2015</td><td>Completed</td></tr><tr><td>55289-881</td><td>wordpress website</td><td>Alice Peters</td><td>apeters4g@epa.gov</td><td>11/3/2015</td><td>New</td></tr><tr><td>0268-1056</td><td>photoshop</td><td>Brenda Reed</td><td>breed4h@prweb.com</td><td>8/22/2015</td><td>New</td></tr><tr><td>68472-028</td><td>web design</td><td>Helen Ellis</td><td>hellis4i@addtoany.com</td><td>9/8/2015</td><td>New</td></tr><tr><td>63629-1346</td><td>logo design</td><td>Richard Harvey</td><td>rharvey4j@cloudflare.com</td><td>4/2/2015</td><td>Completed</td></tr><tr><td>60512-0018</td><td>branding</td><td>Joyce Thomas</td><td>jthomas4k@dropbox.com</td><td>11/28/2015</td><td>New</td></tr><tr><td>0409-4203</td><td>marketing</td><td>Nancy Jackson</td><td>njackson4l@soup.io</td><td>8/8/2015</td><td>New</td></tr><tr><td>43353-769</td><td>wordpress website</td><td>Randy Romero</td><td>rromero4m@senate.gov</td><td>11/23/2015</td><td>New</td></tr><tr><td>54575-230</td><td>social media marketing</td><td>Stephanie Richards</td><td>srichards4n@google.ru</td><td>5/6/2015</td><td>New</td></tr><tr><td>50387-300</td><td>social media marketing</td><td>Brian Sullivan</td><td>bsullivan4o@zimbio.com</td><td>4/4/2015</td><td>Completed</td></tr><tr><td>50845-0125</td><td>crm service</td><td>Betty Mcdonald</td><td>bmcdonald4p@sohu.com</td><td>3/16/2015</td><td>New</td></tr><tr><td>62932-145</td><td>crm service</td><td>Jesse Evans</td><td>jevans4q@friendfeed.com</td><td>2/11/2015</td><td>New</td></tr><tr><td>10967-100</td><td>php website</td><td>Lawrence Cox</td><td>lcox4r@twitter.com</td><td>3/18/2015</td><td>New</td></tr><tr><td>47682-302</td><td>crm service</td><td>Sean Hansen</td><td>shansen4s@istockphoto.com</td><td>11/28/2015</td><td>Completed</td></tr><tr><td>0268-6694</td><td>web design</td><td>Douglas Sanchez</td><td>dsanchez4t@army.mil</td><td>8/17/2015</td><td>Completed</td></tr><tr><td>55648-715</td><td>SEO and SEM</td><td>Louis Peters</td><td>lpeters4u@cmu.edu</td><td>8/13/2015</td><td>New</td></tr><tr><td>0268-0202</td><td>branding</td><td>Charles Kelly</td><td>ckelly4v@cdbaby.com</td><td>12/4/2014</td><td>Completed</td></tr><tr><td>67760-001</td><td>logo design</td><td>John Foster</td><td>jfoster4w@foxnews.com</td><td>7/1/2015</td><td>New</td></tr><tr><td>49035-190</td><td>photoshop</td><td>Kimberly Elliott</td><td>kelliott4x@joomla.org</td><td>1/26/2015</td><td>New</td></tr><tr><td>49230-209</td><td>crm service</td><td>Fred Bennett</td><td>fbennett4y@wiley.com</td><td>5/9/2015</td><td>Completed</td></tr><tr><td>0006-0117</td><td>logo design</td><td>Emily Webb</td><td>ewebb4z@jimdo.com</td><td>6/2/2015</td><td>New</td></tr><tr><td>14783-013</td><td>crm service</td><td>Peter Medina</td><td>pmedina50@wikispaces.com</td><td>9/10/2015</td><td>New</td></tr><tr><td>68462-302</td><td>branding</td><td>Harry Spencer</td><td>hspencer51@mozilla.com</td><td>7/5/2015</td><td>New</td></tr><tr><td>50346-002</td><td>logo design</td><td>Mary Holmes</td><td>mholmes52@prweb.com</td><td>6/6/2015</td><td>Completed</td></tr><tr><td>49349-349</td><td>SEO and SEM</td><td>Michelle Fernandez</td><td>mfernandez53@fda.gov</td><td>6/14/2015</td><td>Completed</td></tr><tr><td>51672-1259</td><td>wordpress website</td><td>Carl Berry</td><td>cberry54@meetup.com</td><td>3/26/2015</td><td>New</td></tr><tr><td>68572-4004</td><td>web design</td><td>Nicole Fisher</td><td>nfisher55@cnet.com</td><td>7/9/2015</td><td>New</td></tr><tr><td>0145-0020</td><td>social media marketing</td><td>Jerry Tucker</td><td>jtucker56@time.com</td><td>7/31/2015</td><td>New</td></tr><tr><td>21695-154</td><td>photoshop</td><td>Kevin Graham</td><td>kgraham57@state.tx.us</td><td>10/26/2015</td><td>Completed</td></tr><tr><td>54868-6238</td><td>php website</td><td>Albert Perkins</td><td>aperkins58@surveymonkey.com</td><td>10/24/2015</td><td>New</td></tr><tr><td>52125-750</td><td>programming</td><td>Susan Morris</td><td>smorris59@sitemeter.com</td><td>2/7/2015</td><td>Completed</td></tr><tr><td>41163-190</td><td>SEO and SEM</td><td>Randy Alexander</td><td>ralexander5a@google.com.br</td><td>6/21/2015</td><td>New</td></tr><tr><td>61957-1203</td><td>branding</td><td>Teresa Sullivan</td><td>tsullivan5b@oracle.com</td><td>2/14/2015</td><td>New</td></tr><tr><td>49349-847</td><td>php website</td><td>Catherine Kelly</td><td>ckelly5c@bloomberg.com</td><td>9/9/2015</td><td>New</td></tr><tr><td>10565-013</td><td>social media marketing</td><td>Donald Castillo</td><td>dcastillo5d@weather.com</td><td>11/10/2015</td><td>Completed</td></tr><tr><td>43063-267</td><td>php website</td><td>Joyce Reid</td><td>jreid5e@cocolog-nifty.com</td><td>6/13/2015</td><td>New</td></tr><tr><td>51079-519</td><td>marketing</td><td>Ralph Howard</td><td>rhoward5f@printfriendly.com</td><td>7/20/2015</td><td>Completed</td></tr><tr><td>10096-0318</td><td>SEO and SEM</td><td>Diane Woods</td><td>dwoods5g@howstuffworks.com</td><td>7/1/2015</td><td>New</td></tr><tr><td>59779-129</td><td>php website</td><td>Steven Alexander</td><td>salexander5h@buzzfeed.com</td><td>10/21/2015</td><td>New</td></tr><tr><td>0078-0510</td><td>wordpress website</td><td>Timothy Shaw</td><td>tshaw5i@amazon.com</td><td>10/16/2015</td><td>Completed</td></tr><tr><td>46287-006</td><td>web design</td><td>Susan Perez</td><td>sperez5j@prweb.com</td><td>6/23/2015</td><td>New</td></tr><tr><td>55312-075</td><td>marketing</td><td>Pamela Cook</td><td>pcook5k@biblegateway.com</td><td>8/14/2015</td><td>Completed</td></tr><tr><td>57915-003</td><td>crm service</td><td>Michelle Fisher</td><td>mfisher5l@hexun.com</td><td>6/5/2015</td><td>Completed</td></tr><tr><td>63187-096</td><td>marketing</td><td>Jacqueline Wood</td><td>jwood5m@sciencedaily.com</td><td>4/12/2015</td><td>Completed</td></tr><tr><td>68229-300</td><td>wordpress website</td><td>Bobby Castillo</td><td>bcastillo5n@addtoany.com</td><td>6/1/2015</td><td>Completed</td></tr><tr><td>51785-514</td><td>programming</td><td>Gary Snyder</td><td>gsnyder5o@istockphoto.com</td><td>5/26/2015</td><td>Completed</td></tr><tr><td>36987-3145</td><td>photoshop</td><td>Eugene Burton</td><td>eburton5p@tripod.com</td><td>11/7/2015</td><td>New</td></tr><tr><td>49288-0795</td><td>graphic design</td><td>Gary Campbell</td><td>gcampbell5q@vistaprint.com</td><td>12/9/2014</td><td>Completed</td></tr><tr><td>55111-154</td><td>branding</td><td>Roger Harper</td><td>rharper5r@timesonline.co.uk</td><td>12/22/2014</td><td>Completed</td></tr><tr><td>37808-259</td><td>social media marketing</td><td>Arthur Stone</td><td>astone5s@printfriendly.com</td><td>4/3/2015</td><td>Completed</td></tr><tr><td>11822-0503</td><td>web design</td><td>Rebecca West</td><td>rwest5t@nih.gov</td><td>12/24/2014</td><td>New</td></tr><tr><td>68405-110</td><td>crm service</td><td>James Fernandez</td><td>jfernandez5u@independent.co.uk</td><td>4/27/2015</td><td>Completed</td></tr><tr><td>41250-572</td><td>graphic design</td><td>Craig Young</td><td>cyoung5v@symantec.com</td><td>5/26/2015</td><td>Completed</td></tr><tr><td>10424-154</td><td>photoshop</td><td>Elizabeth Jones</td><td>ejones5w@acquirethisname.com</td><td>11/11/2015</td><td>New</td></tr><tr><td>17518-026</td><td>php website</td><td>Amanda Harper</td><td>aharper5x@sbwire.com</td><td>3/16/2015</td><td>Completed</td></tr><tr><td>12830-816</td><td>logo design</td><td>Stephen Willis</td><td>swillis5y@blogspot.com</td><td>4/22/2015</td><td>New</td></tr><tr><td>0054-0176</td><td>photoshop</td><td>Diane Cook</td><td>dcook5z@ucsd.edu</td><td>3/26/2015</td><td>New</td></tr><tr><td>48951-9085</td><td>marketing</td><td>Matthew Moreno</td><td>mmoreno60@washingtonpost.com</td><td>4/28/2015</td><td>New</td></tr><tr><td>43063-537</td><td>programming</td><td>Billy Ross</td><td>bross61@wsj.com</td><td>7/15/2015</td><td>Completed</td></tr><tr><td>10544-278</td><td>logo design</td><td>Stephen Oliver</td><td>soliver62@rambler.ru</td><td>4/8/2015</td><td>Completed</td></tr><tr><td>0168-0016</td><td>wordpress website</td><td>Mary Hudson</td><td>mhudson63@alibaba.com</td><td>7/5/2015</td><td>Completed</td></tr><tr><td>0548-9090</td><td>graphic design</td><td>Carlos Washington</td><td>cwashington64@google.cn</td><td>10/19/2015</td><td>Completed</td></tr><tr><td>0527-1462</td><td>crm service</td><td>Carol Rivera</td><td>crivera65@patch.com</td><td>11/22/2015</td><td>New</td></tr><tr><td>50322-003</td><td>logo design</td><td>Lori Martin</td><td>lmartin66@about.com</td><td>7/14/2015</td><td>New</td></tr><tr><td>68084-150</td><td>logo design</td><td>Ernest Rogers</td><td>erogers67@opensource.org</td><td>9/30/2015</td><td>New</td></tr><tr><td>21130-063</td><td>SEO and SEM</td><td>Lillian Gonzalez</td><td>lgonzalez68@yahoo.com</td><td>1/16/2015</td><td>New</td></tr><tr><td>49230-206</td><td>graphic design</td><td>Nicole Hanson</td><td>nhanson69@gravatar.com</td><td>5/18/2015</td><td>Completed</td></tr><tr><td>10565-040</td><td>photoshop</td><td>Jean Graham</td><td>jgraham6a@mediafire.com</td><td>4/11/2015</td><td>New</td></tr><tr><td>52125-434</td><td>logo design</td><td>Christine Martin</td><td>cmartin6b@ftc.gov</td><td>7/19/2015</td><td>Completed</td></tr><tr><td>36800-258</td><td>photoshop</td><td>Tammy Fields</td><td>tfields6c@boston.com</td><td>8/16/2015</td><td>Completed</td></tr><tr><td>36987-1986</td><td>graphic design</td><td>Phillip Mendoza</td><td>pmendoza6d@paginegialle.it</td><td>4/6/2015</td><td>New</td></tr><tr><td>66116-527</td><td>graphic design</td><td>Annie Sanders</td><td>asanders6e@sciencedirect.com</td><td>10/29/2015</td><td>Completed</td></tr><tr><td>67046-024</td><td>web design</td><td>Mildred Jordan</td><td>mjordan6f@photobucket.com</td><td>4/4/2015</td><td>New</td></tr><tr><td>42068-002</td><td>graphic design</td><td>Louis Henderson</td><td>lhenderson6g@uiuc.edu</td><td>4/6/2015</td><td>New</td></tr><tr><td>30142-422</td><td>branding</td><td>Christopher Gomez</td><td>cgomez6h@google.ca</td><td>12/19/2014</td><td>Completed</td></tr><tr><td>64725-2164</td><td>php website</td><td>Brenda Simmons</td><td>bsimmons6i@merriam-webster.com</td><td>1/27/2015</td><td>New</td></tr><tr><td>0904-5847</td><td>SEO and SEM</td><td>Evelyn Reid</td><td>ereid6j@google.co.uk</td><td>2/15/2015</td><td>Completed</td></tr><tr><td>68382-078</td><td>crm service</td><td>Keith Russell</td><td>krussell6k@upenn.edu</td><td>3/4/2015</td><td>New</td></tr><tr><td>53808-0689</td><td>marketing</td><td>Richard Harvey</td><td>rharvey6l@webs.com</td><td>12/27/2014</td><td>New</td></tr><tr><td>53942-318</td><td>crm service</td><td>Ann Kim</td><td>akim6m@go.com</td><td>1/11/2015</td><td>New</td></tr><tr><td>55312-187</td><td>programming</td><td>Janet Vasquez</td><td>jvasquez6n@slideshare.net</td><td>2/1/2015</td><td>New</td></tr><tr><td>61919-009</td><td>logo design</td><td>Cynthia Foster</td><td>cfoster6o@sfgate.com</td><td>5/23/2015</td><td>Completed</td></tr><tr><td>57344-091</td><td>wordpress website</td><td>Barbara Johnson</td><td>bjohnson6p@amazonaws.com</td><td>2/23/2015</td><td>Completed</td></tr><tr><td>50436-6810</td><td>php website</td><td>Evelyn Dean</td><td>edean6q@techcrunch.com</td><td>1/19/2015</td><td>Completed</td></tr><tr><td>67684-1901</td><td>programming</td><td>Cheryl Diaz</td><td>cdiaz6r@blogtalkradio.com</td><td>7/2/2015</td><td>Completed</td></tr><tr><td>41167-0032</td><td>social media marketing</td><td>Christopher Scott</td><td>cscott6s@si.edu</td><td>5/23/2015</td><td>New</td></tr><tr><td>10578-013</td><td>wordpress website</td><td>Anthony Mills</td><td>amills6t@washingtonpost.com</td><td>1/31/2015</td><td>Completed</td></tr><tr><td>55714-4613</td><td>SEO and SEM</td><td>Andrea Lane</td><td>alane6u@ow.ly</td><td>5/10/2015</td><td>Completed</td></tr><tr><td>43857-0294</td><td>logo design</td><td>Carolyn Austin</td><td>caustin6v@slideshare.net</td><td>11/23/2015</td><td>Completed</td></tr><tr><td>0264-2302</td><td>programming</td><td>Terry Peters</td><td>tpeters6w@latimes.com</td><td>12/20/2014</td><td>New</td></tr><tr><td>62699-1123</td><td>SEO and SEM</td><td>Sara Willis</td><td>swillis6x@instagram.com</td><td>6/13/2015</td><td>Completed</td></tr><tr><td>0496-0732</td><td>php website</td><td>Barbara Price</td><td>bprice6y@vimeo.com</td><td>12/27/2014</td><td>Completed</td></tr><tr><td>54569-5813</td><td>php website</td><td>Kathy Hunt</td><td>khunt6z@wired.com</td><td>5/10/2015</td><td>Completed</td></tr><tr><td>59148-003</td><td>logo design</td><td>Catherine Flores</td><td>cflores70@blogger.com</td><td>5/19/2015</td><td>Completed</td></tr><tr><td>67691-101</td><td>marketing</td><td>Virginia Flores</td><td>vflores71@taobao.com</td><td>10/28/2015</td><td>Completed</td></tr><tr><td>49260-716</td><td>social media marketing</td><td>Adam Roberts</td><td>aroberts72@cloudflare.com</td><td>10/2/2015</td><td>Completed</td></tr><tr><td>34645-2608</td><td>marketing</td><td>Debra Warren</td><td>dwarren73@msn.com</td><td>10/31/2015</td><td>Completed</td></tr><tr><td>64205-536</td><td>php website</td><td>Craig Martinez</td><td>cmartinez74@kickstarter.com</td><td>12/18/2014</td><td>New</td></tr><tr><td>0074-3333</td><td>social media marketing</td><td>Jennifer Fox</td><td>jfox75@macromedia.com</td><td>9/28/2015</td><td>Completed</td></tr><tr><td>55154-3026</td><td>php website</td><td>Nancy Howell</td><td>nhowell76@paypal.com</td><td>9/13/2015</td><td>New</td></tr><tr><td>60505-2546</td><td>photoshop</td><td>Kelly Washington</td><td>kwashington77@nba.com</td><td>12/5/2014</td><td>New</td></tr><tr><td>42254-029</td><td>branding</td><td>Lawrence Burns</td><td>lburns78@umn.edu</td><td>10/6/2015</td><td>Completed</td></tr><tr><td>17856-0668</td><td>logo design</td><td>Donald Ryan</td><td>dryan79@yahoo.com</td><td>7/19/2015</td><td>Completed</td></tr><tr><td>60512-8020</td><td>graphic design</td><td>Diane Parker</td><td>dparker7a@nba.com</td><td>9/19/2015</td><td>Completed</td></tr><tr><td>57237-066</td><td>photoshop</td><td>William Thompson</td><td>wthompson7b@state.tx.us</td><td>12/2/2014</td><td>Completed</td></tr><tr><td>58466-016</td><td>crm service</td><td>Amy Stewart</td><td>astewart7c@indiatimes.com</td><td>7/13/2015</td><td>Completed</td></tr><tr><td>0310-7820</td><td>marketing</td><td>Kathryn Martin</td><td>kmartin7d@ocn.ne.jp</td><td>9/4/2015</td><td>Completed</td></tr><tr><td>50563-137</td><td>marketing</td><td>Patrick Fields</td><td>pfields7e@webnode.com</td><td>4/26/2015</td><td>New</td></tr><tr><td>65483-894</td><td>php website</td><td>Jessica Hunt</td><td>jhunt7f@unesco.org</td><td>4/4/2015</td><td>New</td></tr><tr><td>17478-762</td><td>crm service</td><td>Carol Sanchez</td><td>csanchez7g@de.vu</td><td>8/31/2015</td><td>Completed</td></tr><tr><td>64117-183</td><td>web design</td><td>Carolyn Franklin</td><td>cfranklin7h@washingtonpost.com</td><td>12/8/2014</td><td>Completed</td></tr><tr><td>0536-1962</td><td>web design</td><td>Steven Ross</td><td>sross7i@naver.com</td><td>9/25/2015</td><td>Completed</td></tr><tr><td>0641-6021</td><td>wordpress website</td><td>Elizabeth Jordan</td><td>ejordan7j@goo.gl</td><td>10/29/2015</td><td>New</td></tr><tr><td>68016-381</td><td>graphic design</td><td>Ryan Jones</td><td>rjones7k@abc.net.au</td><td>7/29/2015</td><td>New</td></tr><tr><td>64725-0772</td><td>wordpress website</td><td>Justin Gordon</td><td>jgordon7l@reddit.com</td><td>1/14/2015</td><td>Completed</td></tr><tr><td>0135-0145</td><td>programming</td><td>Susan George</td><td>sgeorge7m@theglobeandmail.com</td><td>6/30/2015</td><td>New</td></tr><tr><td>43378-106</td><td>graphic design</td><td>Adam Perkins</td><td>aperkins7n@google.de</td><td>5/12/2015</td><td>Completed</td></tr><tr><td>54868-3765</td><td>graphic design</td><td>Russell Taylor</td><td>rtaylor7o@taobao.com</td><td>9/12/2015</td><td>New</td></tr><tr><td>55154-3185</td><td>logo design</td><td>Pamela Grant</td><td>pgrant7p@accuweather.com</td><td>5/11/2015</td><td>New</td></tr><tr><td>62011-0152</td><td>branding</td><td>Michael Mendoza</td><td>mmendoza7q@baidu.com</td><td>1/8/2015</td><td>Completed</td></tr><tr><td>36987-2008</td><td>SEO and SEM</td><td>Fred James</td><td>fjames7r@odnoklassniki.ru</td><td>12/14/2014</td><td>Completed</td></tr><tr><td>0603-4662</td><td>marketing</td><td>Fred Bell</td><td>fbell7s@theguardian.com</td><td>9/14/2015</td><td>Completed</td></tr><tr><td>53113-688</td><td>marketing</td><td>Bonnie Murphy</td><td>bmurphy7t@bigcartel.com</td><td>5/27/2015</td><td>Completed</td></tr><tr><td>68745-1038</td><td>wordpress website</td><td>Jose Jordan</td><td>jjordan7u@delicious.com</td><td>6/15/2015</td><td>Completed</td></tr><tr><td>44911-0042</td><td>wordpress website</td><td>Helen Diaz</td><td>hdiaz7v@aol.com</td><td>11/15/2015</td><td>New</td></tr><tr><td>10738-301</td><td>crm service</td><td>Eric Henderson</td><td>ehenderson7w@about.com</td><td>3/30/2015</td><td>New</td></tr><tr><td>44924-002</td><td>logo design</td><td>Jessica Sullivan</td><td>jsullivan7x@sohu.com</td><td>10/13/2015</td><td>New</td></tr><tr><td>59630-992</td><td>crm service</td><td>David Ryan</td><td>dryan7y@i2i.jp</td><td>7/29/2015</td><td>New</td></tr><tr><td>11523-1159</td><td>crm service</td><td>Mark Brooks</td><td>mbrooks7z@google.it</td><td>3/6/2015</td><td>Completed</td></tr><tr><td>66184-529</td><td>web design</td><td>Ruby Berry</td><td>rberry80@yellowbook.com</td><td>6/27/2015</td><td>Completed</td></tr><tr><td>63029-603</td><td>photoshop</td><td>Michael George</td><td>mgeorge81@washingtonpost.com</td><td>5/10/2015</td><td>New</td></tr><tr><td>0409-2347</td><td>logo design</td><td>Susan Duncan</td><td>sduncan82@alibaba.com</td><td>1/16/2015</td><td>New</td></tr><tr><td>66184-529</td><td>photoshop</td><td>Andrew Collins</td><td>acollins83@ucoz.ru</td><td>6/20/2015</td><td>New</td></tr><tr><td>43857-0119</td><td>branding</td><td>Joyce Dunn</td><td>jdunn84@scribd.com</td><td>12/26/2014</td><td>New</td></tr><tr><td>68025-058</td><td>SEO and SEM</td><td>Nicholas Williams</td><td>nwilliams85@google.co.uk</td><td>4/29/2015</td><td>New</td></tr><tr><td>51285-538</td><td>branding</td><td>Donald Brown</td><td>dbrown86@surveymonkey.com</td><td>11/9/2015</td><td>New</td></tr><tr><td>59667-0033</td><td>social media marketing</td><td>Frank Hall</td><td>fhall87@desdev.cn</td><td>3/10/2015</td><td>Completed</td></tr><tr><td>49715-012</td><td>web design</td><td>Steven Richards</td><td>srichards88@cisco.com</td><td>6/30/2015</td><td>Completed</td></tr><tr><td>67457-444</td><td>marketing</td><td>Fred Carr</td><td>fcarr89@plala.or.jp</td><td>11/30/2014</td><td>New</td></tr><tr><td>54118-7978</td><td>php website</td><td>Kenneth Willis</td><td>kwillis8a@zdnet.com</td><td>9/24/2015</td><td>New</td></tr><tr><td>65044-1438</td><td>crm service</td><td>Robert Harrison</td><td>rharrison8b@nsw.gov.au</td><td>11/11/2015</td><td>New</td></tr><tr><td>49349-953</td><td>web design</td><td>Roger Watkins</td><td>rwatkins8c@reference.com</td><td>9/3/2015</td><td>Completed</td></tr><tr><td>54136-030</td><td>web design</td><td>Jane Garcia</td><td>jgarcia8d@netvibes.com</td><td>6/22/2015</td><td>New</td></tr><tr><td>49999-599</td><td>branding</td><td>Kelly Nguyen</td><td>knguyen8e@youtu.be</td><td>6/10/2015</td><td>Completed</td></tr><tr><td>65365-001</td><td>SEO and SEM</td><td>Virginia Bryant</td><td>vbryant8f@tamu.edu</td><td>1/12/2015</td><td>Completed</td></tr><tr><td>13734-127</td><td>php website</td><td>Carolyn Lewis</td><td>clewis8g@uol.com.br</td><td>8/28/2015</td><td>Completed</td></tr><tr><td>61543-7782</td><td>photoshop</td><td>Nancy Rodriguez</td><td>nrodriguez8h@123-reg.co.uk</td><td>9/17/2015</td><td>Completed</td></tr><tr><td>53808-0979</td><td>logo design</td><td>Doris Patterson</td><td>dpatterson8i@facebook.com</td><td>5/9/2015</td><td>New</td></tr><tr><td>65224-721</td><td>php website</td><td>Donald Price</td><td>dprice8j@oracle.com</td><td>1/31/2015</td><td>New</td></tr><tr><td>0832-0708</td><td>marketing</td><td>Susan Mendoza</td><td>smendoza8k@howstuffworks.com</td><td>4/27/2015</td><td>New</td></tr><tr><td>49738-300</td><td>crm service</td><td>Joyce Bell</td><td>jbell8l@ox.ac.uk</td><td>5/11/2015</td><td>Completed</td></tr><tr><td>0781-3305</td><td>php website</td><td>Willie Romero</td><td>wromero8m@google.co.jp</td><td>10/3/2015</td><td>Completed</td></tr><tr><td>68703-042</td><td>branding</td><td>Bruce Garrett</td><td>bgarrett8n@dagondesign.com</td><td>5/8/2015</td><td>Completed</td></tr><tr><td>53808-0701</td><td>programming</td><td>Jack Armstrong</td><td>jarmstrong8o@fotki.com</td><td>2/10/2015</td><td>Completed</td></tr><tr><td>0041-0350</td><td>wordpress website</td><td>Donna Cruz</td><td>dcruz8p@pcworld.com</td><td>8/19/2015</td><td>New</td></tr><tr><td>42002-442</td><td>logo design</td><td>Susan Elliott</td><td>selliott8q@dell.com</td><td>9/3/2015</td><td>Completed</td></tr><tr><td>52533-059</td><td>crm service</td><td>Gregory Garcia</td><td>ggarcia8r@creativecommons.org</td><td>2/19/2015</td><td>Completed</td></tr><tr><td>55154-2427</td><td>web design</td><td>Donna Stewart</td><td>dstewart8s@goodreads.com</td><td>1/22/2015</td><td>Completed</td></tr><tr><td>49349-845</td><td>photoshop</td><td>Nancy Owens</td><td>nowens8t@unblog.fr</td><td>10/25/2015</td><td>New</td></tr><tr><td>16571-160</td><td>wordpress website</td><td>Eric Lewis</td><td>elewis8u@mayoclinic.com</td><td>4/1/2015</td><td>New</td></tr><tr><td>43742-0194</td><td>SEO and SEM</td><td>Anna Bailey</td><td>abailey8v@ebay.co.uk</td><td>8/22/2015</td><td>Completed</td></tr><tr><td>63941-120</td><td>crm service</td><td>Juan Thompson</td><td>jthompson8w@bravesites.com</td><td>4/22/2015</td><td>New</td></tr><tr><td>51991-632</td><td>photoshop</td><td>Susan Harvey</td><td>sharvey8x@taobao.com</td><td>11/1/2015</td><td>Completed</td></tr><tr><td>61786-043</td><td>programming</td><td>Kathy Brown</td><td>kbrown8y@behance.net</td><td>5/23/2015</td><td>New</td></tr><tr><td>53345-011</td><td>social media marketing</td><td>Clarence Morgan</td><td>cmorgan8z@creativecommons.org</td><td>4/18/2015</td><td>New</td></tr><tr><td>64117-921</td><td>wordpress website</td><td>Andrew Carpenter</td><td>acarpenter90@samsung.com</td><td>7/11/2015</td><td>New</td></tr><tr><td>65044-2361</td><td>social media marketing</td><td>Karen Jordan</td><td>kjordan91@foxnews.com</td><td>5/3/2015</td><td>New</td></tr><tr><td>48951-1126</td><td>photoshop</td><td>Bobby Ellis</td><td>bellis92@seattletimes.com</td><td>6/28/2015</td><td>New</td></tr><tr><td>24385-157</td><td>photoshop</td><td>Richard Butler</td><td>rbutler93@noaa.gov</td><td>1/30/2015</td><td>New</td></tr><tr><td>63323-352</td><td>wordpress website</td><td>Rachel James</td><td>rjames94@telegraph.co.uk</td><td>9/4/2015</td><td>Completed</td></tr><tr><td>63629-4037</td><td>logo design</td><td>Carl Carr</td><td>ccarr95@wired.com</td><td>3/15/2015</td><td>New</td></tr><tr><td>36987-1383</td><td>php website</td><td>Billy Hernandez</td><td>bhernandez96@springer.com</td><td>1/6/2015</td><td>New</td></tr><tr><td>61699-3182</td><td>social media marketing</td><td>Timothy Cruz</td><td>tcruz97@booking.com</td><td>4/22/2015</td><td>Completed</td></tr><tr><td>60432-613</td><td>SEO and SEM</td><td>Julia Cox</td><td>jcox98@netscape.com</td><td>8/14/2015</td><td>New</td></tr><tr><td>51346-208</td><td>php website</td><td>Janet Miller</td><td>jmiller99@state.gov</td><td>3/12/2015</td><td>New</td></tr><tr><td>52125-493</td><td>graphic design</td><td>Earl Cooper</td><td>ecooper9a@creativecommons.org</td><td>11/26/2015</td><td>Completed</td></tr><tr><td>21130-678</td><td>wordpress website</td><td>Teresa Reed</td><td>treed9b@imageshack.us</td><td>2/17/2015</td><td>New</td></tr><tr><td>68645-454</td><td>marketing</td><td>Rachel Carr</td><td>rcarr9c@usatoday.com</td><td>11/14/2015</td><td>New</td></tr><tr><td>49288-0579</td><td>SEO and SEM</td><td>Marilyn Chapman</td><td>mchapman9d@bandcamp.com</td><td>2/23/2015</td><td>New</td></tr><tr><td>58988-0022</td><td>web design</td><td>Larry Oliver</td><td>loliver9e@umn.edu</td><td>1/4/2015</td><td>New</td></tr><tr><td>36987-2065</td><td>marketing</td><td>Alice Watkins</td><td>awatkins9f@biglobe.ne.jp</td><td>10/22/2015</td><td>Completed</td></tr><tr><td>68026-542</td><td>wordpress website</td><td>Louise Morgan</td><td>lmorgan9g@phpbb.com</td><td>10/15/2015</td><td>New</td></tr><tr><td>72036-230</td><td>programming</td><td>Annie Lawrence</td><td>alawrence9h@csmonitor.com</td><td>9/5/2015</td><td>Completed</td></tr><tr><td>50563-115</td><td>photoshop</td><td>Joan Clark</td><td>jclark9i@ca.gov</td><td>6/9/2015</td><td>New</td></tr><tr><td>11673-660</td><td>programming</td><td>Louis Burns</td><td>lburns9j@narod.ru</td><td>3/21/2015</td><td>Completed</td></tr><tr><td>36987-2842</td><td>wordpress website</td><td>Annie Myers</td><td>amyers9k@diigo.com</td><td>8/8/2015</td><td>New</td></tr><tr><td>55319-529</td><td>php website</td><td>Phillip Allen</td><td>pallen9l@paginegialle.it</td><td>3/6/2015</td><td>New</td></tr><tr><td>34057-001</td><td>SEO and SEM</td><td>Dorothy Dixon</td><td>ddixon9m@sitemeter.com</td><td>1/13/2015</td><td>New</td></tr><tr><td>49281-286</td><td>wordpress website</td><td>Ashley Gonzalez</td><td>agonzalez9n@ehow.com</td><td>8/30/2015</td><td>Completed</td></tr><tr><td>35356-101</td><td>php website</td><td>Matthew Gordon</td><td>mgordon9o@macromedia.com</td><td>9/23/2015</td><td>New</td></tr><tr><td>55154-2225</td><td>social media marketing</td><td>Walter White</td><td>wwhite9p@bing.com</td><td>5/3/2015</td><td>Completed</td></tr><tr><td>0004-0822</td><td>crm service</td><td>Catherine Kim</td><td>ckim9q@over-blog.com</td><td>3/16/2015</td><td>Completed</td></tr><tr><td>49527-009</td><td>logo design</td><td>Donald Grant</td><td>dgrant9r@squarespace.com</td><td>5/14/2015</td><td>New</td></tr><tr><td>76420-450</td><td>crm service</td><td>Evelyn Watson</td><td>ewatson9s@a8.net</td><td>7/27/2015</td><td>New</td></tr><tr><td>52686-277</td><td>php website</td><td>Albert Warren</td><td>awarren9t@soup.io</td><td>1/26/2015</td><td>Completed</td></tr><tr><td>52125-100</td><td>php website</td><td>Paul Edwards</td><td>pedwards9u@hubpages.com</td><td>2/26/2015</td><td>Completed</td></tr><tr><td>10742-8212</td><td>marketing</td><td>Harry Sims</td><td>hsims9v@toplist.cz</td><td>7/8/2015</td><td>Completed</td></tr><tr><td>68786-218</td><td>social media marketing</td><td>Louis Henry</td><td>lhenry9w@globo.com</td><td>11/12/2015</td><td>Completed</td></tr><tr><td>52125-455</td><td>crm service</td><td>Louise Ferguson</td><td>lferguson9x@huffingtonpost.com</td><td>4/3/2015</td><td>Completed</td></tr><tr><td>55910-473</td><td>php website</td><td>Raymond Richards</td><td>rrichards9y@usatoday.com</td><td>2/27/2015</td><td>Completed</td></tr><tr><td>48951-4039</td><td>SEO and SEM</td><td>Joan Kelly</td><td>jkelly9z@google.co.uk</td><td>3/11/2015</td><td>New</td></tr><tr><td>56062-090</td><td>php website</td><td>Eric Bryant</td><td>ebryanta0@cnn.com</td><td>11/21/2015</td><td>Completed</td></tr><tr><td>62011-0168</td><td>programming</td><td>Anthony Berry</td><td>aberrya1@microsoft.com</td><td>6/27/2015</td><td>Completed</td></tr><tr><td>0378-4024</td><td>web design</td><td>Clarence White</td><td>cwhitea2@google.cn</td><td>2/12/2015</td><td>Completed</td></tr><tr><td>60875-100</td><td>web design</td><td>Jeremy Wilson</td><td>jwilsona3@xrea.com</td><td>12/26/2014</td><td>New</td></tr><tr><td>49999-873</td><td>graphic design</td><td>Cheryl Bell</td><td>cbella4@alexa.com</td><td>9/19/2015</td><td>Completed</td></tr><tr><td>52102-1001</td><td>photoshop</td><td>Jeffrey Woods</td><td>jwoodsa5@dailymotion.com</td><td>4/3/2015</td><td>Completed</td></tr><tr><td>42643-101</td><td>social media marketing</td><td>Diana Hunt</td><td>dhunta6@dailymotion.com</td><td>7/21/2015</td><td>New</td></tr><tr><td>16714-032</td><td>marketing</td><td>Frances Freeman</td><td>ffreemana7@themeforest.net</td><td>7/27/2015</td><td>Completed</td></tr><tr><td>43063-518</td><td>SEO and SEM</td><td>David Mitchell</td><td>dmitchella8@geocities.com</td><td>6/19/2015</td><td>New</td></tr><tr><td>48951-8068</td><td>social media marketing</td><td>Theresa Cox</td><td>tcoxa9@delicious.com</td><td>5/15/2015</td><td>New</td></tr><tr><td>0409-2028</td><td>social media marketing</td><td>Billy Morales</td><td>bmoralesaa@pbs.org</td><td>12/2/2014</td><td>New</td></tr><tr><td>68788-9868</td><td>branding</td><td>Phyllis Hayes</td><td>phayesab@comsenz.com</td><td>6/14/2015</td><td>Completed</td></tr><tr><td>59779-186</td><td>php website</td><td>Jesse Mendoza</td><td>jmendozaac@spotify.com</td><td>8/17/2015</td><td>Completed</td></tr><tr><td>63629-3982</td><td>SEO and SEM</td><td>Ashley Baker</td><td>abakerad@tripod.com</td><td>6/12/2015</td><td>Completed</td></tr><tr><td>68016-221</td><td>photoshop</td><td>Mildred Griffin</td><td>mgriffinae@earthlink.net</td><td>8/18/2015</td><td>New</td></tr><tr><td>52125-773</td><td>photoshop</td><td>Amy Long</td><td>alongaf@macromedia.com</td><td>7/3/2015</td><td>New</td></tr><tr><td>63739-456</td><td>branding</td><td>Roy Robinson</td><td>rrobinsonag@behance.net</td><td>5/4/2015</td><td>New</td></tr><tr><td>44911-0109</td><td>branding</td><td>Richard Rodriguez</td><td>rrodriguezah@mlb.com</td><td>9/18/2015</td><td>Completed</td></tr><tr><td>30142-234</td><td>graphic design</td><td>Sara Ramirez</td><td>sramirezai@aol.com</td><td>5/24/2015</td><td>Completed</td></tr><tr><td>11673-428</td><td>web design</td><td>Rose Palmer</td><td>rpalmeraj@foxnews.com</td><td>9/28/2015</td><td>New</td></tr><tr><td>54868-5192</td><td>graphic design</td><td>Sarah Sanchez</td><td>ssanchezak@who.int</td><td>6/16/2015</td><td>New</td></tr><tr><td>30142-092</td><td>graphic design</td><td>Bonnie Palmer</td><td>bpalmeral@irs.gov</td><td>10/10/2015</td><td>Completed</td></tr><tr><td>53489-110</td><td>php website</td><td>Helen Edwards</td><td>hedwardsam@prnewswire.com</td><td>6/20/2015</td><td>New</td></tr><tr><td>13668-111</td><td>logo design</td><td>Roger Perez</td><td>rperezan@tmall.com</td><td>5/13/2015</td><td>New</td></tr><tr><td>37000-353</td><td>crm service</td><td>Kimberly Meyer</td><td>kmeyerao@dell.com</td><td>4/22/2015</td><td>Completed</td></tr><tr><td>49349-598</td><td>logo design</td><td>Bonnie Sullivan</td><td>bsullivanap@bloglovin.com</td><td>12/8/2014</td><td>New</td></tr><tr><td>51758-004</td><td>photoshop</td><td>Shirley Foster</td><td>sfosteraq@typepad.com</td><td>1/4/2015</td><td>Completed</td></tr><tr><td>16590-225</td><td>SEO and SEM</td><td>Timothy Day</td><td>tdayar@barnesandnoble.com</td><td>7/11/2015</td><td>Completed</td></tr><tr><td>0338-3580</td><td>graphic design</td><td>Ruth Thomas</td><td>rthomasas@exblog.jp</td><td>6/25/2015</td><td>New</td></tr><tr><td>43857-0212</td><td>crm service</td><td>Philip Hunt</td><td>phuntat@cnn.com</td><td>10/24/2015</td><td>New</td></tr><tr><td>0069-3858</td><td>social media marketing</td><td>Dennis Carpenter</td><td>dcarpenterau@uol.com.br</td><td>2/2/2015</td><td>New</td></tr><tr><td>50419-342</td><td>photoshop</td><td>Emily Reid</td><td>ereidav@go.com</td><td>12/20/2014</td><td>Completed</td></tr><tr><td>0310-0279</td><td>marketing</td><td>Diana Wright</td><td>dwrightaw@wisc.edu</td><td>3/13/2015</td><td>Completed</td></tr><tr><td>0363-0441</td><td>social media marketing</td><td>Jean Porter</td><td>jporterax@imdb.com</td><td>9/18/2015</td><td>Completed</td></tr><tr><td>65923-555</td><td>crm service</td><td>Carlos Jones</td><td>cjonesay@globo.com</td><td>6/16/2015</td><td>Completed</td></tr><tr><td>44009-802</td><td>php website</td><td>Karen Hughes</td><td>khughesaz@delicious.com</td><td>6/29/2015</td><td>New</td></tr><tr><td>36800-503</td><td>wordpress website</td><td>Jennifer Hicks</td><td>jhicksb0@jugem.jp</td><td>12/14/2014</td><td>New</td></tr><tr><td>62750-005</td><td>php website</td><td>Ann Day</td><td>adayb1@apple.com</td><td>11/13/2015</td><td>New</td></tr><tr><td>53808-0388</td><td>graphic design</td><td>Frances James</td><td>fjamesb2@dropbox.com</td><td>9/13/2015</td><td>New</td></tr><tr><td>30142-274</td><td>crm service</td><td>Evelyn Andrews</td><td>eandrewsb3@lycos.com</td><td>5/19/2015</td><td>New</td></tr><tr><td>0268-6553</td><td>graphic design</td><td>Matthew Harris</td><td>mharrisb4@yandex.ru</td><td>4/18/2015</td><td>Completed</td></tr><tr><td>76323-004</td><td>wordpress website</td><td>Kathy Cox</td><td>kcoxb5@java.com</td><td>6/3/2015</td><td>New</td></tr><tr><td>36987-1036</td><td>photoshop</td><td>Ann Hernandez</td><td>ahernandezb6@chronoengine.com</td><td>9/13/2015</td><td>Completed</td></tr><tr><td>37000-364</td><td>wordpress website</td><td>Judy Welch</td><td>jwelchb7@dailymail.co.uk</td><td>11/15/2015</td><td>Completed</td></tr><tr><td>36987-1887</td><td>graphic design</td><td>Judith Fisher</td><td>jfisherb8@elpais.com</td><td>10/28/2015</td><td>Completed</td></tr><tr><td>68462-309</td><td>web design</td><td>Judith Kennedy</td><td>jkennedyb9@ifeng.com</td><td>10/29/2015</td><td>New</td></tr><tr><td>63629-5418</td><td>wordpress website</td><td>Jose Payne</td><td>jpayneba@hc360.com</td><td>10/14/2015</td><td>New</td></tr><tr><td>49643-340</td><td>marketing</td><td>Philip Kennedy</td><td>pkennedybb@nih.gov</td><td>2/19/2015</td><td>New</td></tr><tr><td>0378-6150</td><td>graphic design</td><td>Nancy Mcdonald</td><td>nmcdonaldbc@usda.gov</td><td>2/1/2015</td><td>New</td></tr><tr><td>51672-1258</td><td>web design</td><td>Adam Johnston</td><td>ajohnstonbd@w3.org</td><td>1/24/2015</td><td>Completed</td></tr><tr><td>32909-804</td><td>programming</td><td>Irene Phillips</td><td>iphillipsbe@google.co.uk</td><td>7/31/2015</td><td>Completed</td></tr><tr><td>59115-073</td><td>graphic design</td><td>Mark Phillips</td><td>mphillipsbf@wikipedia.org</td><td>12/8/2014</td><td>Completed</td></tr><tr><td>58118-0037</td><td>programming</td><td>Susan Ramos</td><td>sramosbg@ted.com</td><td>6/16/2015</td><td>Completed</td></tr><tr><td>43857-0239</td><td>graphic design</td><td>Dennis Morales</td><td>dmoralesbh@acquirethisname.com</td><td>1/22/2015</td><td>New</td></tr><tr><td>60505-2869</td><td>wordpress website</td><td>Cynthia Washington</td><td>cwashingtonbi@hexun.com</td><td>4/29/2015</td><td>Completed</td></tr><tr><td>0378-3850</td><td>php website</td><td>Todd Matthews</td><td>tmatthewsbj@nationalgeographic.com</td><td>6/13/2015</td><td>New</td></tr><tr><td>53329-067</td><td>graphic design</td><td>Philip Kim</td><td>pkimbk@newyorker.com</td><td>7/2/2015</td><td>New</td></tr><tr><td>48102-100</td><td>SEO and SEM</td><td>Carl Reyes</td><td>creyesbl@merriam-webster.com</td><td>8/5/2015</td><td>New</td></tr><tr><td>49643-010</td><td>graphic design</td><td>Heather Cook</td><td>hcookbm@netscape.com</td><td>1/18/2015</td><td>Completed</td></tr><tr><td>36987-1932</td><td>web design</td><td>Joshua Franklin</td><td>jfranklinbn@nydailynews.com</td><td>7/21/2015</td><td>Completed</td></tr><tr><td>55154-6245</td><td>SEO and SEM</td><td>Carl Peterson</td><td>cpetersonbo@storify.com</td><td>7/24/2015</td><td>New</td></tr><tr><td>54868-5821</td><td>logo design</td><td>Samuel Jones</td><td>sjonesbp@imageshack.us</td><td>3/9/2015</td><td>New</td></tr><tr><td>43596-0012</td><td>branding</td><td>Christine Fox</td><td>cfoxbq@cbslocal.com</td><td>12/3/2014</td><td>Completed</td></tr><tr><td>0372-0006</td><td>wordpress website</td><td>Rose Rodriguez</td><td>rrodriguezbr@studiopress.com</td><td>1/3/2015</td><td>New</td></tr><tr><td>0245-0213</td><td>marketing</td><td>Bonnie Woods</td><td>bwoodsbs@bloglovin.com</td><td>9/14/2015</td><td>New</td></tr><tr><td>10096-0286</td><td>marketing</td><td>Jerry Rodriguez</td><td>jrodriguezbt@indiegogo.com</td><td>6/7/2015</td><td>New</td></tr><tr><td>13811-558</td><td>programming</td><td>Timothy Stone</td><td>tstonebu@oaic.gov.au</td><td>4/17/2015</td><td>Completed</td></tr><tr><td>59279-514</td><td>photoshop</td><td>Walter Thompson</td><td>wthompsonbv@foxnews.com</td><td>4/2/2015</td><td>New</td></tr><tr><td>49371-035</td><td>SEO and SEM</td><td>Jean Alvarez</td><td>jalvarezbw@bizjournals.com</td><td>3/27/2015</td><td>New</td></tr><tr><td>37000-720</td><td>marketing</td><td>Kathy Bryant</td><td>kbryantbx@ocn.ne.jp</td><td>5/26/2015</td><td>Completed</td></tr><tr><td>10542-010</td><td>marketing</td><td>Kathryn Sims</td><td>ksimsby@yale.edu</td><td>11/29/2015</td><td>New</td></tr><tr><td>11523-7349</td><td>social media marketing</td><td>Robert Powell</td><td>rpowellbz@prlog.org</td><td>12/20/2014</td><td>Completed</td></tr><tr><td>0615-2557</td><td>crm service</td><td>Kathleen Sullivan</td><td>ksullivanc0@google.es</td><td>7/29/2015</td><td>Completed</td></tr><tr><td>68084-807</td><td>SEO and SEM</td><td>Nicholas Thompson</td><td>nthompsonc1@ftc.gov</td><td>10/2/2015</td><td>New</td></tr><tr><td>0904-3012</td><td>branding</td><td>Karen Spencer</td><td>kspencerc2@npr.org</td><td>4/19/2015</td><td>New</td></tr><tr><td>52862-315</td><td>programming</td><td>Mark Carroll</td><td>mcarrollc3@unc.edu</td><td>2/15/2015</td><td>Completed</td></tr><tr><td>50436-6914</td><td>marketing</td><td>Johnny Garza</td><td>jgarzac4@google.com.hk</td><td>10/26/2015</td><td>Completed</td></tr><tr><td>13668-005</td><td>graphic design</td><td>Keith Black</td><td>kblackc5@amazon.co.uk</td><td>5/15/2015</td><td>Completed</td></tr><tr><td>65483-391</td><td>crm service</td><td>Christine Nelson</td><td>cnelsonc6@unblog.fr</td><td>6/8/2015</td><td>New</td></tr><tr><td>54868-4983</td><td>php website</td><td>Jacqueline Ellis</td><td>jellisc7@instagram.com</td><td>10/25/2015</td><td>New</td></tr><tr><td>42507-130</td><td>php website</td><td>Marilyn Mason</td><td>mmasonc8@huffingtonpost.com</td><td>2/26/2015</td><td>Completed</td></tr><tr><td>68180-846</td><td>branding</td><td>Brenda Wallace</td><td>bwallacec9@theatlantic.com</td><td>8/23/2015</td><td>Completed</td></tr><tr><td>10544-252</td><td>branding</td><td>Harry Warren</td><td>hwarrenca@mit.edu</td><td>5/16/2015</td><td>Completed</td></tr><tr><td>36800-014</td><td>php website</td><td>Randy Bennett</td><td>rbennettcb@pagesperso-orange.fr</td><td>6/11/2015</td><td>Completed</td></tr><tr><td>0615-7692</td><td>branding</td><td>Dorothy Richardson</td><td>drichardsoncc@altervista.org</td><td>8/17/2015</td><td>Completed</td></tr><tr><td>47781-308</td><td>crm service</td><td>Heather Montgomery</td><td>hmontgomerycd@marketwatch.com</td><td>10/25/2015</td><td>New</td></tr><tr><td>0591-2473</td><td>logo design</td><td>Kenneth Wright</td><td>kwrightce@blog.com</td><td>11/23/2015</td><td>New</td></tr><tr><td>0781-5150</td><td>branding</td><td>Irene Banks</td><td>ibankscf@businessweek.com</td><td>11/24/2015</td><td>New</td></tr><tr><td>49349-328</td><td>programming</td><td>Angela Henderson</td><td>ahendersoncg@apple.com</td><td>4/30/2015</td><td>New</td></tr><tr><td>54575-184</td><td>SEO and SEM</td><td>Lillian Weaver</td><td>lweaverch@sakura.ne.jp</td><td>7/24/2015</td><td>New</td></tr><tr><td>51138-044</td><td>photoshop</td><td>Beverly Alexander</td><td>balexanderci@latimes.com</td><td>3/4/2015</td><td>New</td></tr><tr><td>76354-204</td><td>social media marketing</td><td>Paula Frazier</td><td>pfraziercj@ning.com</td><td>8/28/2015</td><td>New</td></tr><tr><td>49288-0474</td><td>photoshop</td><td>Wanda Reid</td><td>wreidck@smugmug.com</td><td>9/12/2015</td><td>New</td></tr><tr><td>65224-880</td><td>SEO and SEM</td><td>Linda Walker</td><td>lwalkercl@desdev.cn</td><td>4/17/2015</td><td>Completed</td></tr><tr><td>51079-562</td><td>wordpress website</td><td>Alice Brooks</td><td>abrookscm@ezinearticles.com</td><td>4/8/2015</td><td>New</td></tr><tr><td>58668-1511</td><td>php website</td><td>Arthur Gray</td><td>agraycn@biblegateway.com</td><td>5/21/2015</td><td>Completed</td></tr><tr><td>50268-526</td><td>programming</td><td>Sara James</td><td>sjamesco@paginegialle.it</td><td>6/20/2015</td><td>New</td></tr><tr><td>60512-6582</td><td>crm service</td><td>Edward Freeman</td><td>efreemancp@gravatar.com</td><td>7/29/2015</td><td>Completed</td></tr><tr><td>0069-5420</td><td>crm service</td><td>Philip Alexander</td><td>palexandercq@hubpages.com</td><td>11/12/2015</td><td>New</td></tr><tr><td>21695-093</td><td>graphic design</td><td>Donald Morgan</td><td>dmorgancr@salon.com</td><td>6/11/2015</td><td>Completed</td></tr><tr><td>72036-227</td><td>marketing</td><td>Barbara Holmes</td><td>bholmescs@posterous.com</td><td>1/11/2015</td><td>New</td></tr><tr><td>76237-190</td><td>php website</td><td>Steve Hernandez</td><td>shernandezct@php.net</td><td>11/14/2015</td><td>New</td></tr><tr><td>58232-0702</td><td>social media marketing</td><td>Cynthia Adams</td><td>cadamscu@scribd.com</td><td>3/14/2015</td><td>Completed</td></tr><tr><td>0904-5631</td><td>marketing</td><td>Sandra Price</td><td>spricecv@fastcompany.com</td><td>12/26/2014</td><td>Completed</td></tr><tr><td>44924-113</td><td>crm service</td><td>Stephen Stewart</td><td>sstewartcw@barnesandnoble.com</td><td>2/21/2015</td><td>Completed</td></tr><tr><td>22955-016</td><td>php website</td><td>Eric Medina</td><td>emedinacx@boston.com</td><td>8/5/2015</td><td>New</td></tr><tr><td>0168-0056</td><td>branding</td><td>Ruby Freeman</td><td>rfreemancy@va.gov</td><td>9/1/2015</td><td>New</td></tr><tr><td>51442-552</td><td>branding</td><td>Annie Sims</td><td>asimscz@symantec.com</td><td>12/12/2014</td><td>Completed</td></tr><tr><td>23155-146</td><td>php website</td><td>Maria Richardson</td><td>mrichardsond0@blogspot.com</td><td>4/4/2015</td><td>Completed</td></tr><tr><td>15127-551</td><td>social media marketing</td><td>Heather Larson</td><td>hlarsond1@google.cn</td><td>1/30/2015</td><td>New</td></tr><tr><td>11527-052</td><td>crm service</td><td>Fred Pierce</td><td>fpierced2@mayoclinic.com</td><td>11/23/2015</td><td>Completed</td></tr><tr><td>54569-0919</td><td>wordpress website</td><td>Roger Stone</td><td>rstoned3@redcross.org</td><td>2/17/2015</td><td>Completed</td></tr><tr><td>26482-0001</td><td>SEO and SEM</td><td>Joyce Butler</td><td>jbutlerd4@icio.us</td><td>12/26/2014</td><td>Completed</td></tr><tr><td>48951-1173</td><td>wordpress website</td><td>Matthew Robertson</td><td>mrobertsond5@51.la</td><td>11/22/2015</td><td>Completed</td></tr><tr><td>43063-501</td><td>branding</td><td>Billy Wright</td><td>bwrightd6@printfriendly.com</td><td>6/1/2015</td><td>Completed</td></tr><tr><td>44567-505</td><td>wordpress website</td><td>Diana Gibson</td><td>dgibsond7@surveymonkey.com</td><td>7/9/2015</td><td>New</td></tr><tr><td>68382-543</td><td>social media marketing</td><td>Jesse Fernandez</td><td>jfernandezd8@github.com</td><td>10/10/2015</td><td>New</td></tr><tr><td>54575-294</td><td>php website</td><td>Keith Hayes</td><td>khayesd9@berkeley.edu</td><td>11/9/2015</td><td>Completed</td></tr><tr><td>25010-711</td><td>crm service</td><td>Antonio Andrews</td><td>aandrewsda@hhs.gov</td><td>4/7/2015</td><td>Completed</td></tr><tr><td>50845-0133</td><td>graphic design</td><td>Teresa Garrett</td><td>tgarrettdb@cargocollective.com</td><td>6/12/2015</td><td>New</td></tr><tr><td>54868-6284</td><td>programming</td><td>Charles Freeman</td><td>cfreemandc@sfgate.com</td><td>1/29/2015</td><td>Completed</td></tr><tr><td>47682-114</td><td>logo design</td><td>Kenneth Alexander</td><td>kalexanderdd@time.com</td><td>8/24/2015</td><td>New</td></tr><tr><td>0378-3702</td><td>marketing</td><td>Joan King</td><td>jkingde@xrea.com</td><td>3/12/2015</td><td>New</td></tr><tr><td>68391-359</td><td>wordpress website</td><td>Christina Ryan</td><td>cryandf@redcross.org</td><td>8/15/2015</td><td>Completed</td></tr><tr><td>0268-0840</td><td>photoshop</td><td>Betty Lane</td><td>blanedg@themeforest.net</td><td>3/5/2015</td><td>New</td></tr><tr><td>55154-1327</td><td>programming</td><td>Aaron Grant</td><td>agrantdh@businesswire.com</td><td>12/5/2014</td><td>New</td></tr><tr><td>62839-3888</td><td>social media marketing</td><td>Scott Day</td><td>sdaydi@themeforest.net</td><td>5/28/2015</td><td>Completed</td></tr><tr><td>15127-835</td><td>web design</td><td>Brenda Burke</td><td>bburkedj@delicious.com</td><td>4/21/2015</td><td>Completed</td></tr><tr><td>0143-9930</td><td>marketing</td><td>Margaret Wheeler</td><td>mwheelerdk@statcounter.com</td><td>2/17/2015</td><td>New</td></tr><tr><td>42192-714</td><td>programming</td><td>Steven Palmer</td><td>spalmerdl@miibeian.gov.cn</td><td>12/4/2014</td><td>New</td></tr><tr><td>68828-131</td><td>web design</td><td>Angela Murray</td><td>amurraydm@t.co</td><td>6/16/2015</td><td>Completed</td></tr><tr><td>33261-842</td><td>crm service</td><td>Diane Turner</td><td>dturnerdn@rakuten.co.jp</td><td>1/22/2015</td><td>Completed</td></tr><tr><td>49035-608</td><td>branding</td><td>Mark Adams</td><td>madamsdo@spiegel.de</td><td>6/22/2015</td><td>New</td></tr><tr><td>49035-112</td><td>branding</td><td>Barbara Lawson</td><td>blawsondp@bandcamp.com</td><td>6/30/2015</td><td>New</td></tr><tr><td>24357-701</td><td>logo design</td><td>James Scott</td><td>jscottdq@ow.ly</td><td>1/12/2015</td><td>Completed</td></tr><tr><td>41250-035</td><td>php website</td><td>Harry Peters</td><td>hpetersdr@earthlink.net</td><td>10/18/2015</td><td>Completed</td></tr><tr><td>24236-389</td><td>php website</td><td>Shirley Johnston</td><td>sjohnstonds@blogger.com</td><td>1/15/2015</td><td>Completed</td></tr><tr><td>60793-857</td><td>wordpress website</td><td>Andrea Gilbert</td><td>agilbertdt@yahoo.com</td><td>5/24/2015</td><td>New</td></tr><tr><td>0781-1715</td><td>photoshop</td><td>Robin Wilson</td><td>rwilsondu@multiply.com</td><td>1/9/2015</td><td>New</td></tr><tr><td>67877-149</td><td>photoshop</td><td>Ruth Bryant</td><td>rbryantdv@last.fm</td><td>1/21/2015</td><td>New</td></tr>
                                            </tbody>
                                        </table>
                                        <!-- ********************************************** -->




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



