@extends('header')
@extends('navigation')



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <!-- SECTION FILTER ================================================== -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="portfolioFilter">
                        <h3>Sélection par catégorie</h3>
                        <a href="#" data-filter="*" class="current waves-effect waves-custom">Tout</a>
                        @foreach ($actualites as $actualite)
                        <a href="#" data-filter=".{{$actualite->category}}" class="waves-effect waves-custom">{{$actualite->category}}</a>
                        @endforeach
                        {{-- <a href="#" data-filter=".natural" class="waves-effect waves-custom">Natural</a>
                        <a href="#" data-filter=".creative" class="waves-effect waves-custom">Creative</a>
                        <a href="#" data-filter=".personal" class="waves-effect waves-custom">Personal</a>
                        <a href="#" data-filter=".photography" class="waves-effect waves-custom">Photography</a> --}}
                    </div>
                </div>
            </div>

            <div class="port m-b-20">
                <div class="portfolioContainer">
                    @foreach ($actualites as $actualite )


                    <div class="col-md-3 col-xl-3 col-lg-3 {{$actualite->category}}">

                        <div class="gal-detail thumb">
                            <a href="{{ route('actualites.show', $actualite->id) }}"> <img src="{{$actualite->image_pres}}"
                                    class="thumb-img" alt="work-thumbnail"></a>



                            <h4>{{$actualite->titre}}</h4>
                            <h4> Catégorie: {{$actualite->category}}</h4>
                            <p class="text-muted">
                                {{$actualite->description}}
                            </p>
                           
                            <img class="rounded-circle img-thumbnail img-responsive" src="{{ Gravatar::src($actualite->user->email)}}"
                                alt="{{ Gravatar::src($actualite->user->name)}}">
                            <p class="text-muted">le
                                <time datetime="{{ $actualite->created_at }}">@datetime($actualite->created_at)</time>,
                                par
                                {{$actualite->user->name}}

                            </p>
                        </div>

                    </div>

                    @endforeach


                </div><!-- end portfoliocontainer-->
            </div> <!-- End row -->

        </div> <!-- container -->

    </div> <!-- content -->

    @extends('footer')
