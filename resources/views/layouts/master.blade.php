<!DOCTYPE html>
<html lang="en">
   @include('layouts.include.head')
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        @include('layouts.include.header')
        <div class="clearfix"> </div>
        <div class="page-container">
            @include('layouts.include.sidebar')
            <div class="page-content-wrapper">
                <div class="page-content">
                    @include('layouts.include.flash')
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.include.footer')
        @include('layouts.include.script')
    @yield('js')
    </body>

</html>
