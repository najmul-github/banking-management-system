<head>
   <meta charset="utf-8" />
   <title>@yield('title')</title>
   <meta name="_token" content="{{ csrf_token() }}">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
   <link href="{{ asset('/assets') }}/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
   <link href="{{ asset('/assets') }}/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
   <link href="{{ asset('/assets') }}/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="{{ asset('/assets') }}/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('/assets') }}/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
   <link href="{{ asset('/assets') }}/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
   <link href="{{ asset('/assets') }}/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
   <link href="{{ asset('/assets') }}/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN THEME GLOBAL STYLES -->
   <link href="{{ asset('/assets') }}/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
   <link href="{{ asset('/assets') }}/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
   <!-- END THEME GLOBAL STYLES -->
   <!--page-->

   <link href="{{ asset('/assets') }}/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
   <link href="{{ asset('/assets') }}/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">

   <!--endPage-->
   <!-- BEGIN THEME LAYOUT STYLES -->
   <link href="{{ asset('/assets') }}/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
   <link href="{{ asset('/assets') }}/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
   <link href="{{ asset('/assets') }}/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
   <!-- END THEME LAYOUT STYLES -->
   <link rel="shortcut icon" href="{{ asset('/assets') }}/favicon/favicon.ico" type="image/x-icon">
   <link rel="icon" href="{{ asset('/assets') }}/favicon/favicon.ico" type="image/x-icon">

   @yield('css')
   <style>
    option:disabled {
        color: rgb(255, 0, 0);
    }
</style>
</head>
