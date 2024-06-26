<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">RS Merah Putih</a>
        </div>
        <div class=" sidebar-brand sidebar-brand-sm">
            <a href="index.html">MP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class=" dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('home') }}">Dashboard</a>
                    </li>
                    <li class=''>
                        <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                    </li>
                    <li class=''>
                        <a class="nav-link" href="{{ route('doctors.index') }}">Doctor</a>
                    </li>
                    <li class=''>
                        <a class="nav-link" href="{{ route('doctor_schedule.index') }}">Doctor Schedule</a>
                    </li>
                    <li class=''>
                        <a class="nav-link" href="{{ route('patients.index') }}">Patient</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
