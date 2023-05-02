<nav x-data="{ open: false }" class="nav-primary hidden-xs">
    <ul class="nav">
        <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-dashboard icon">
                    <b class="bg-danger"></b>
                </i>
                <span>Dashboard</span>
            </a>
        </li>
        @hasanyrole('super-admin|admin')
            <li class="{{ Request::routeIs('surat.index') ? 'active' : '' }}">
                <a href="{{ route('surat.index') }}">
                    <i class="fa fa-envelope icon">
                        <b class="bg-warning"></b>
                    </i>
                    <span>Surat</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('kpn.index') ? 'active' : '' }}">
                <a href="{{ route('kpn.index') }}">
                    <i class="fa fa-th icon">
                        <b class="bg-success"></b>
                    </i>
                    <span>Kenaikan Pangkat</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-tasks icon">
                        <b class="bg-success"></b>
                    </i>
                    <span>Pensiun</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-money icon">
                        <b class="bg-success"></b>
                    </i>
                    <span>Gaji Berkala</span>
                </a>
            </li>
        @endhasanyrole
        <li class="{{ Request::routeIs('surat.create', 'kpn.create') ? 'active' : '' }}">
            <a href="#pages">
                <i class="fa fa-pencil-square icon">
                    <b class="bg-primary"></b>
                </i>
                <span class="pull-right">
                    <i class="fa fa-angle-down text"></i>
                    <i class="fa fa-angle-up text-active"></i>
                </span>
                <span>Form</span>
            </a>
            <ul class="nav lt">
                @hasanyrole('operator-srt|admin')
                    <li class="{{ Request::routeIs('surat.create') ? 'active' : '' }}">
                        <a href="{{ route('surat.create') }}">
                            <b class="pull-right"><i class="fa fa-plus-circle"></i></b>
                            <i class="fa fa-angle-right"></i>
                            <span>Surat</span>
                        </a>
                    </li>
                @endhasanyrole
                @hasanyrole('operator-kpn|admin')
                    <li class="{{ Request::routeIs('kpn.create') ? 'active' : '' }}">
                        <a href="{{ route('kpn.create') }}">
                            <b class="pull-right"><i class="fa fa-plus-circle"></i></b>
                            <i class="fa fa-angle-right"></i>
                            <span>Kenaikan Pangkat</span>
                        </a>
                    </li>
                @endhasanyrole
                @hasanyrole('operator-pns|admin')
                    <li>
                        <a href="#">
                            <b class="pull-right"><i class="fa fa-plus-circle"></i></b>
                            <i class="fa fa-angle-right"></i>
                            <span>Pensiun</span>
                        </a>
                    </li>
                @endhasanyrole
                @hasanyrole('operator-kgb|admin')
                    <li>
                        <a href="#">
                            <b class="pull-right"><i class="fa fa-plus-circle"></i></b>
                            <i class="fa fa-angle-right"></i>
                            <span>Gaji Berkala</span>
                        </a>
                    </li>
                @endhasanyrole
            </ul>
        </li>
        {{-- <li>
            <a href="notebook.html">
                <i class="fa fa-pencil icon">
                    <b class="bg-info"></b>
                </i>
                <span>Notes</span>
            </a>
        </li> --}}
    </ul>
</nav>
