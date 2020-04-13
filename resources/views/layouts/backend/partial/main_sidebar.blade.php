<div id="sidebar">
    <!-- Sidebar Brand -->
    <div id="sidebar-brand" class="themed-background">
        @if(Request::is('admin*'))
            <a href="{{ route('admin.dashboard') }}" class="sidebar-title">
                @endif
                @if (Request::is('agent*'))
                    <a href="{{ route('agent.dashboard') }}" class="sidebar-title">
                        @endif
                        <i class="fa fa-home"></i> <span class="sidebar-nav-mini-hide">Immo<strong>HEC</strong></span>
                    </a>
    </div>
    <!-- END Sidebar Brand -->

    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <!-- Menu de gauche -  tableau de bord administrateur -->
                @if(Request::is('admin*'))
                    <li>
                        <a class="{{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><i class="gi gi-dashboard sidebar-nav-icon"></i>
                            <span class="sidebar-nav-mini-hide">Tableau de Bord</span></a>
                    </li>
                    <li class="sidebar-separator">
                        <i class="fa fa-ellipsis-h"></i>
                    </li>

                    <li>
                        <a class="{{ Request::is('admin/owner') ? 'active' : '' }}" href="{{ route('admin.owner.index') }}"><i class="gi gi-parents sidebar-nav-icon"></i>
                            <span class="sidebar-nav-mini-hide">Gestion des propriétaires</span></a>
                    </li>

                    <li class="{{ Request::is('admin/category*', 'admin/property_type*', 'admin/property*') ? 'active' : '' }}">
                        <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-home sidebar-nav-icon"></i>
                            <span class="sidebar-nav-mini-hide">Gestion des biens</span></a>
                        <ul>
                            <li>
                                <a class="{{ Request::is('admin/category*') ? 'active' : '' }}" href="{{ route('admin.category.index') }}">
                                    <span class="sidebar-nav-mini-hide">Catégories</span></a>
                            </li>
                            <li>
                                <a class="{{ Request::is('admin/property_type*') ? 'active' : '' }}" href="{{ route('admin.property_type.index') }}">
                                    <span class="sidebar-nav-mini-hide">Types de biens</span></a>
                            </li>
                            <li>
                                <a class="{{ Request::is('admin/property') ? 'active' : '' }}" href="{{ route('admin.property.index') }}">
                                    <span class="sidebar-nav-mini-hide">Tous les biens</span></a>
                            </li>
                            <li>
                                <a class="{{ Request::is('admin/property_sale') ? 'active' : '' }}" href="{{ route('admin.property_sale.index') }}">
                                    <span class="sidebar-nav-mini-hide">Biens en vente</span></a>
                            </li>
                            <li>
                                <a class="{{ Request::is('admin/property_rent') ? 'active' : '' }}" href="{{ route('admin.property_rent.index') }}">
                                    <span class="sidebar-nav-mini-hide">Biens en location</span></a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a class="{{ Request::is('admin/client') ? 'active' : '' }}" href="{{ route('admin.client.index') }}"><i class="gi gi-parents sidebar-nav-icon"></i>
                            <span class="sidebar-nav-mini-hide">Gestion des clients</span></a>
                    </li>

                @endif

            <!-- Menu de gauche -  tableau de bord agent -->
                @if(Request::is('agent*'))
                    <li>
                        <a class="{{ Request::is('agent/dashboard') ? 'active' : '' }}" href="{{ route('agent.dashboard') }}"><i class="gi gi-dashboard sidebar-nav-icon"></i>
                            <span class="sidebar-nav-mini-hide">Tableau de Bord</span></a>
                    </li>
                    <!-- User interface -->
                    <li>
                        <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-rocket sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User Interface</span></a>
                        <ul>
                            <li>
                                <a href="page_ui_widgets.html">Widgets</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End User interface -->

                    <li class="sidebar-separator">
                        <i class="fa fa-ellipsis-h"></i>
                    </li>
                    <li class="dropdown-header"><strong>Système</strong></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off fa-fw"></i>
                            <span class="sidebar-nav-mini-hide">Déconnexion</span></a>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endif

                <li class="sidebar-separator">
                    <i class="fa fa-ellipsis-h"></i>
                </li>
            </ul>
            <!-- END Sidebar Navigation -->

        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->

    <!-- Sidebar Extra Info -->
    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
        <div class="text-center">
            <small>Projet réalisé <i class="fa text-danger"></i> par <a href="#" target="_blank">Rodrigue Wognin</a></small><br>
            <small><span id="#"></span> &copy; ImmoHEC 0.1</small>
        </div>
    </div>
    <!-- END Sidebar Extra Info -->
</div>
