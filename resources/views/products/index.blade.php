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
                        @foreach ($products as $product)
                        <a href="#" data-filter=".{{$product->category}}" class="waves-effect waves-custom">{{$product->category}}</a>

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
                    @foreach ($products as $product )


                    <div class="col-md-4 col-xl-4 col-lg-4 {{$product->category}}">

                        <div class="gal-detail thumb">
                            <a href="{{ route('products.show', $product->id) }}"> <img src="{{$product->image_pres}}"
                                    class="thumb-img" alt="work-thumbnail"></a>



                            <h4>{{$product->titre}}</h4>
                            <h4> Catégorie: {{$product->category}}</h4>
                            <p class="text-muted">
                                {{$product->description}}
                            </p>

                            <img class="rounded-circle img-thumbnail img-responsive" src="{{ Gravatar::src($product->user->email)}}"
                                alt="{{ Gravatar::src($product->user->name)}}">
                            <p class="text-muted">le
                                <time datetime="{{ $product->created_at }}">@datetime($product->created_at)</time>,
                                par
                                {{$product->user->name}}

                            </p>
                        </div>

                    </div>

                    @endforeach


                </div><!-- end portfoliocontainer-->
            </div> <!-- End row -->

        </div> <!-- container -->

    </div> <!-- content -->

    @extends('footer')
