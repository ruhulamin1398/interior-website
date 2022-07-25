<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em
                    class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="{{route('dashboard')}}" class="">
                <h3 class="text-white">Dashboard</h3>
            </a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">

                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Service Area</h6>
                    </li>



                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">Service</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('interior.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Interior</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('construction.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Construction</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-building"></em></span>
                            <span class="nk-menu-text">Projects</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('projectinterior.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Interior</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('project.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Construction</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{route('view.brand')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-shield-star-fill"></em></span>
                            <span class="nk-menu-text">Clients</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{route('text-contents.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-shield-star-fill"></em></span>
                            <span class="nk-menu-text">Text Contents</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('media-contents.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-shield-star-fill"></em></span>
                            <span class="nk-menu-text">Media Contents</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{route('view.brand')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-shield-star-fill"></em></span>
                            <span class="nk-menu-text">Clients</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    @role('super-admin')


                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Admin Section</h6>
                    </li>



                    <li class="nk-menu-item">
                        <a href="{{route('management.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Manage Users</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endrole

                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>