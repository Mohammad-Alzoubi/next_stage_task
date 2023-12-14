<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="javascript:;">Next stage</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="javascript:;">NS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{setActive(['admin.dashboard'])}}">
                <a href="{{route('admin.dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Manage</li>
            <li class="dropdown {{setActive(['admin.company.*'])}}">
                <a href="{{route('admin.company.index')}}" class="nav-link"><i class="fas fa-building"></i><span>Company</span></a>
            </li>
            <li class="dropdown {{setActive(['admin.employee.*'])}}">
                <a href="{{route('admin.employee.index')}}" class="nav-link"><i class="fas fa-users"></i><span>Employees</span></a>
            </li>
        </ul>

    </aside>
</div>
