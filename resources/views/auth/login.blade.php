@extends('header')


    <div class="wrapper-page">
        <div class="text-center">
            <a href="" class="logo"><span>Administration by</span><img src="{{asset('images/logo-ligne.png')}}" alt="Logo de warp code">
            </a>
            <h5 class="text-muted m-t-0 font-600">Dashboard Personnalisé</h5>
            <img style="width:40%;" src="{{asset('images/logo.png')}}" alt="Logo de warp code">
        </div>
        <div class="m-t-40 card-box">
            <div class="text-center">
                <h4 class="text-uppercase font-bold m-b-0">Connectez-vous à votre espace</h4>
            </div>
            <div class="p-20">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf

                    <div class="form-group ">


                        <div class="col-xs-12">
                            <input id="email" placeholder="Votre e-mail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group ">


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
                        <div class="col-xs-12 offset-md-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{
                                    __('Se souvenir de moi') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-30">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-custom btn-bordred btn-block waves-effect waves-light">
                                {{ __('Connexion') }}
                            </button>

                            <a class="text-muted" href="{{ route('password.request') }}"><i class="fa fa-lock m-r-5"></i>
                                {{ __('Mot de passe oublié ?') }}
                            </a>

                        </div>
                    </div>
                </form>


            </div>
        </div>
        <!-- end card-box-->

        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="text-muted">Pas de compte ? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Inscrivez-vous
                            !</b></a></p>
            </div>
        </div>

    </div>
    <!-- end wrapper page -->


