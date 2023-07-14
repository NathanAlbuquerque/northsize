@props(['user'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class=" ">

<head>
    <!--
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: B4-1.3
         * This file is part of Ultra Admin Theme.
        -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ultra Admin Bootstrap 4 : Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link rel="shortcut icon" href="{{ asset('assets-adm/images/favicon.png') }}" type="image/x-icon" /> <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets-adm/images/apple-touch-icon-57-precomposed.png') }}"> <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets-adm/images/apple-touch-icon-114-precomposed.png') }}"> <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets-adm/images/apple-touch-icon-72-precomposed.png') }}"> <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets-adm/images/apple-touch-icon-144-precomposed.png') }}"> <!-- For iPad Retina display -->

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="{{ asset('assets-adm/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets-adm/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-adm/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-adm/css/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-adm/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    @isset($css) {{ $css }} @endisset
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="{{ asset('assets-adm/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-adm/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class=" ">

    <x-adm-topbar></x-adm-topbar>

    <!-- START CONTAINER -->
    <div class="page-container row-fluid">

        <x-adm-sidebar :user=$user></x-adm-sidebar>

        {{ $slot }}

    </div>
    <!-- END CONTAINER -->

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
    @isset($js) {{ $js }} @endisset
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


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
