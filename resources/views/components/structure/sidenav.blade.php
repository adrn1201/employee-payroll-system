
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            {{-- Brand --}}
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="{{asset("assets/img/brand/YPGLogo.png")}}" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                {{-- Collapse --}}
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <x-structure.class :active="request()->is('/')" href="/">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </x-structure.class>
                        </li>
                        <li class="nav-item">
                            <x-structure.class :active="request()->is('create-employee')" href="/create-employee">
                                <i class="ni ni-planet text-orange"></i>
                                <span class="nav-link-text">Create New Employee</span>
                            </x-structure.class>
                        </li>

                        @if(auth()->user()->is_admin)
                            <li class="nav-item">
                                <x-structure.class :active="request()->is('create-department')" href="/create-department">
                                    <i class="ni ni-pin-3 text-primary"></i>
                                    <span class="nav-link-text">Create New Department</span>
                                </x-structure.class>
                            </li>
                        @endif

                        <li class="nav-item">
                            <x-structure.class :active="request()->is('employee-records')" href="/employee-records">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Employee Records</span>
                            </x-structure.class>
                        </li>
                        <li class="nav-item">
                            <x-structure.class :active="request()->is('department-records')" href="/department-records">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text">Departments</span>
                            </x-structure.class>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


