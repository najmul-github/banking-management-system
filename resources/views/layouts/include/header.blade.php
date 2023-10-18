<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo" style="width: 235px;padding-right: 20px;padding-left: 20px;">
            <div class="menu-toggler sidebar-toggler" style="float: left;margin-right: 13px;">
                <span></span>
            </div>
        </div>



        <a href="javascript:void(0);" class="menu-toggler responsive-toggler" data-toggle="collapse"
            data-target=".navbar-collapse"> </a>


        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">

                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                        data-close-others="true">

                        <img alt="" class="img-circle"
                            src="{{ session('loggedInUserFullInfo')['picture'] ?? asset('/assets') . '/layouts/layout/img/avatar3_small.jpg'}}" />
                        
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        
                        <li>
                            <a class="bg-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> <span> {{ __('Logout') }} </span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
