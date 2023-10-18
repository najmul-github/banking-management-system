<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler"></div>
            </li>

            <li class="nav-item  {{ (request()->route()->getName() == 'dashboard.index')  ? "active" : '' }}">
                <a href="{{route('dashboard.index')}}" class="nav-link nav-toggle">
                    <i class="fas icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item  {{ (request()->route()->getName() == 'deposit.index')  ? "active" : '' }}">
                <a href="{{route('deposit.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-calendar-check-o"></i>
                    <span class="title">Deposit</span>
                </a>
            </li>

            <li class="nav-item  {{ (request()->route()->getName() == 'withdraw.index')  ? "active" : '' }}">
                <a href="{{route('withdraw.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-road"></i>
                    <span class="title">Withdrawal</span>
                </a>
            </li>

            <li class="nav-item  {{ (request()->route()->getName() == 'transaction.index')  ? "active" : '' }}">
                <a href="{{route('transaction.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Transactions</span>
                </a>
            </li>

            <li class="nav-item  {{ (request()->route()->getName() == 'user.index')  ? "active" : '' }}">
                <a href="{{route('user.index')}}" class="nav-link nav-toggle">
                    <i class="fas fa-user-tie"></i>
                    <span class="title">Profile</span>
                </a>
            </li>


        </ul>
    </div>
</div>
