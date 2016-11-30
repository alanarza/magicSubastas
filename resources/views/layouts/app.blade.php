@section('navbar')
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <i class="fa fa-fw fa-legal"></i> MTG Subastas        
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            @if (Auth::guest())
            <li>
                <a href="{{ url('/login') }}">Ingresar</a>
            </li>
            <li>
                <a href="{{ url('/register') }}">Registrarse</a>
            </li>
            @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <i class="fa fa-fw fa-user-o"></i> {{ Auth::user()->name }}
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/datos') }}"><i class="fa fa-fw fa-vcard"></i> Editar mis datos</a>
                        <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                             <i class="fa fa-fw fa-sign-out"></i> Cerrar sesión</a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </li>
                </ul>
            </li>
            @endif
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="">
                        <i class="fa fa-fw fa-group"></i>
                        INICIO
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-fw fa-user-o"></i>
                        PERFIL
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-3">
                        <i class="fa fa-fw fa-unsorted"></i>
                        PUBLICACIONES
                        <i class="fa fa-fw fa-angle-down pull-right"></i>
                    </a>
                    <ul id="submenu-3" class="collapse">
                        <li>
                            <a href="">
                                Ver publicaciones
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Nueva publicacion
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-4">
                        <i class="fa fa-fw fa-tag"></i>
                        OFERTAS
                        <i class="fa fa-fw fa-angle-down pull-right"></i>
                    </a>
                    <ul id="submenu-4" class="collapse">
                        <li>
                            <a href="">
                                Ver ofertas
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Cargar pieza
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <!-- /.navbar-collapse --> </nav>

@endsection
