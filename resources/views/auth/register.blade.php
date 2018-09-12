@extends('layouts.admin')

@section('content')
    <div class="wrapper-page">
        <div class="text-center">
            <a href="" class="logo"><span>Administration by</span><img src="{{asset('images/logo-ligne.png')}}" alt="Logo de warp code">
            </a>
            <h5 class="text-muted m-t-0 font-600">Dashboard Personnalisé</h5>
            <img style="width:40%;" src="{{asset('images/logo.png')}}" alt="Logo de warp code">
        </div>
        <div class="m-t-40 card-box">
            <div class="text-center">
                <h4 class="text-uppercase font-bold m-b-0">Inscrivez-vous</h4>
            </div>
            <div class="p-20">
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf

                    <div class="form-group">


                        <div class="col-xs-12">
                            <input id="name" placeholder="Votre nom" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-xs-12">
                            <input id="email" placeholder="Votre e-mail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-12">
                            <input id="password" placeholder="Votre mot de passe" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password" required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-12">
                            <input id="password-confirm" placeholder="Confirmez votre mot de passe" type="password"
                                class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-custom btn-bordred btn-block waves-effect waves-light">
                                {{ __('Inscription') }}
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
        <!-- end card-box -->

        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="text-muted">Vous possédez déjà un compte ?<a href="{{ route('login') }}" class="text-primary m-l-5"><b>{{
                            __('Connexion') }}</b></a></p>
            </div>
        </div>

    </div>
    <!-- end wrapper page -->
@endsection
