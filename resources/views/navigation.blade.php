<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                {{-- <a href="index.html" class="logo"> Administration</a> --}}
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">

                    <!-- Page title -->

                        <div class="list-inline-item">
                            <h4 class="page-title">Tableau de bord</h4>
                        </div>

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <img  style="width:50%;" src="{{ asset('images/logo.png')}}" alt="">
                <!-- User -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="{{ Gravatar::src(Auth::user()->email)}}" alt="user-img" title="{{Auth::user()->name}}"
                            class="rounded-circle img-thumbnail img-responsive">
                        <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                    </div>
                    <h5><a href="#">{{Auth::user()->name}}</a> </h5>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ route('compte.settings') }}">
                                <i class="fas fa-cogs"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a class="text-custom" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();"><i
                                    class="fas fa-power-off"></i></a>

                            <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- End User -->

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="text-muted menu-title">Navigation</li>

                        <li>
                            <a href="{{ url('/compte') }}" class="waves-effect"><i class="fas fa-tachometer-alt"></i>
                                <span>
                                    Tableau de bord </span> </a>
                        </li>

                        <li>
                            <a href="{{ route('products.index')}}" class="waves-effect"><i class="fas fa-th-list"></i> <span> Les
                                    Produits </span> </a>
                        </li>


                        <li>
                            <a href="new-produit.html" class="waves-effect"><i class="far fa-plus-square"></i></i><span>
                                    Nouveau Produit </span></a>
                        </li>
                        <li>
                            <a href="{{ route('actualites.index')}}" class="waves-effect"><i class="fas fa-newspaper"></i></i> <span> Les
                                    Actus </span> </a>
                        </li>


                        <li>
                            <a href="new-actu.html" class="waves-effect"><i class="far fa-plus-square"></i></i><span>
                                    Nouvelle Actu </span></a>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>

        </div>
        <!-- Left Sidebar End -->
