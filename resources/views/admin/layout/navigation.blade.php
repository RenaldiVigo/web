<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('/')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin SD</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/dataguru')}}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Guru</span></a>
            </li>
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/datasiswa')}}" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Siswa</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('/admin/datakelas1')}}">Kelas 1</a>
                        <a class="collapse-item" href="{{url('/admin/datakelas2')}}">Kelas 2</a>
                        <a class="collapse-item" href="{{url('/admin/datakelas3')}}">Kelas 3</a>
                        <a class="collapse-item" href="{{url('/admin/datakelas4')}}">Kelas 4</a>
                        <a class="collapse-item" href="{{url('/admin/datakelas5')}}">Kelas 5</a>
                        <a class="collapse-item" href="{{url('/admin/datakelas6')}}">Kelas 6</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/datagambar')}}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Gambar</span></a>
            </li>
        </ul>