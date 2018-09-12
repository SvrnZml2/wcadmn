@extends('layouts.admin')
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
                    <h4 class="page-title">Edition du Profil utilisateur</h4>
                </div>

        </div><!-- end container -->
    </div><!-- end navbar -->
</div>
<!-- Top Bar End -->


 <!-- ========== Left Sidebar Start ========== -->
 <div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <img style="width:50%;" src="{{ asset('images/logo.png')}}" alt="">
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
                            Dashboard </span> </a>
                </li>

                <li>
                    <a href="produits.html" class="waves-effect"><i class="fas fa-th-list"></i> <span> Les
                            Produits </span> </a>
                </li>


                <li>
                    <a href="new-produit.html" class="waves-effect"><i class="far fa-plus-square"></i></i><span>
                            Nouveau Produit </span></a>
                </li>
                <li>
                    <a href="actus.html" class="waves-effect"><i class="fas fa-newspaper"></i></i> <span> Les
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

    </div>

</div>
<!-- Left Sidebar End -->
@section('content')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="col-xl-6">
                        <div class="card-box">
                                @if (session('status'))
                                <div class="message status">
                                    {{ session('status') }}
                                </div>
                                @endif
                                @if ($errors->has('password_old'))
                                <div class="message error">
                                    {{ $errors->first('password_old') }}
                                </div>
                                @endif
                                @if ($errors->has('password'))
                                <div class="message error">
                                    {{ $errors->first('password') }}
                                </div>
                                @endif

                            <h4 class="header-title m-t-0 m-b-30">Réinitialisation du mot de passe</h4>

                            <form method="POST" action="{{ route('compte.update') }}" data-parsley-validate novalidate>
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="pass1">Ancien mot de passe*</label>
                                    <input id="pass1" name="password_old" type="password" placeholder="Ancien mot de passe" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Nouveau mot de passe*</label>
                                    <input type="password" name="password" required placeholder="Nouveau mot de passe" class="form-control"
                                        id="passWord2">
                                </div>
                                <div class="form-group">
                                    <label for="passWord3">Confirmation du mot de passe*</label>
                                    <input data-parsley-equalto="#password2" type="password" required placeholder="Confirmer le mot de passe"
                                        class="form-control" name="password_confirmation" id="passWord3">
                                </div>


                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Enregistrer
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect waves-light m-l-5">
                                        Annuler
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div><!-- end col -->

                </div> <!-- container -->

            </div> <!-- content -->





        @endsection
