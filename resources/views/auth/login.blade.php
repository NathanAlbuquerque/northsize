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
        <title>Ultra Admin Bootstrap 4 : Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="{{ asset('assets-adm/images/favicon.png') }}" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets-adm/images/apple-touch-icon-57-precomposed.png') }}">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets-adm/images/apple-touch-icon-114-precomposed.png') }}">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets-adm/images/apple-touch-icon-72-precomposed.png') }}">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets-adm/images/apple-touch-icon-144-precomposed.png') }}">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="{{ asset('assets-adm/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{ asset('assets-adm/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets-adm/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets-adm/css/animate.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets-adm/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        <link href="{{ asset('assets-adm/plugins/icheck/skins/square/orange.css') }}" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


        <!-- CORE CSS TEMPLATE - START -->
        <link href="{{ asset('assets-adm/css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets-adm/css/responsive.css') }}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" login_page">


        <div class="login-wrapper">
            <div id="login" class="login loginpage offset-xl-4 col-xl-4 offset-lg-3 col-lg-6 offset-md-3 col-md-6 col-offset-0 col-12">
                <h1><a href="#" title="Login Page" tabindex="-1">Ultra Admin</a></h1>

                <form name="loginform" id="loginform" action="{{ route('login') }}" method="post">
                    @csrf
                    <p>
                        <label for="email">Username<br />
                            <input type="text" name="email" id="email" class="input" value="dev@ns.com" size="20" />
                        </label>
                    </p>
                    <p>
                        <label for="password">Password<br />
                            <input type="password" name="password" id="password" class="input" value="dvns" size="20" />
                        </label>
                    </p>
                    <p class="forgetmenot">
                        <label class="icheck-label form-label" for="rememberme">
                            <input name="rememberme" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked> Remember me
                        </label>
                    </p>



                    <p class="submit">
                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign In" />
                    </p>
                </form>

                <p id="nav">
                    <a class="float-left" href="#" title="Password Lost and Found">Forgot password?</a>
                    <a class="float-right" href="ui-register.html" title="Sign Up">Sign Up</a>
                </p>


            </div>
        </div>





        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START -->
        <script src="{{ asset('assets-adm/js/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets-adm/js/popper.min.js') }}" type="text/javascript"></script>
        <!-- <script src="{{ asset('assets-adm/js/jquery.easing.min.js') }}" type="text/javascript"></script>  -->
        <script src="{{ asset('assets-adm/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets-adm/plugins/pace/pace.min.js') }}" type="text/javascript"></script>

        <script src="{{ asset('assets-adm/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets-adm/plugins/viewport/viewportchecker.js') }}" type="text/javascript"></script>
        <!-- CORE JS FRAMEWORK - END -->


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        <script src="{{ asset('assets-adm/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


        <!-- CORE TEMPLATE JS - START -->
        <script src="{{ asset('assets-adm/js/scripts.js') }}" type="text/javascript"></script>
        <!-- END CORE TEMPLATE JS - END -->

        <!-- Sidebar Graph - START -->
        <script src="{{ asset('assets-adm/plugins/sparkline-chart/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets-adm/js/chart-sparkline.js') }}" type="text/javascript"></script>
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



