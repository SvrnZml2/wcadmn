@extends('layouts.admin')



<!-- Left Sidebar End -->
@section('content')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="col-xl-6 offset-3">
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
