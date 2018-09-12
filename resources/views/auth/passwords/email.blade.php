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
                <h4 class="text-uppercase font-bold m-b-0">Récupération de votre mot de passe</h4>
            </div>
            <div class="p-20">
                <form method="POST" action="{{ route('password.email') }}" novalidate>
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


                    <div class="form-group text-center m-t-30">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-custom btn-bordred btn-block waves-effect waves-light">
                                {{ __('Soumettre') }}
                            </button>

                        </div>
                    </div>
                </form>


            </div>
        </div>
        <!-- end card-box-->
    </div>
    <!-- end wrapper page -->
@endsection
