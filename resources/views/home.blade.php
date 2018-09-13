@extends('header')
@extends('navigation')



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">


                    <div class="row">

                        <div class="col-xl-6 col-md-6">
                            <div class="card-box">


                                <h4 class="header-title mt-0 m-b-30">Nombre d'actualités</h4>

                                <div class="widget-chart-1">
                                    <div class="widget-chart-box-1">
                                        <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                    data-bgColor="#F9B9B9" value="{{$countActualite}}" data-skin="tron" data-angleOffset="180"
                                            data-readOnly=true data-thickness=".15" />
                                    </div>
                                    <div class="widget-detail-1">
                                        <h2 class="p-t-10 mb-0"> ??? </h2>
                                        <p class="text-muted m-b-10">???</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col-xl-6 col-md-6">
                            <div class="card-box">


                                <h4 class="header-title mt-0 m-b-30">Nombre de produits en vente</h4>

                                <div class="widget-chart-1">
                                    <div class="widget-chart-box-1">
                                        <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                            data-bgColor="#F9B9B9" value="{{$countProduct}}" data-skin="tron" data-angleOffset="180"
                                            data-readOnly=true data-thickness=".15" />
                                    </div>
                                    <div class="widget-detail-1">
                                        <h2 class="p-t-10 mb-0"> ??? </h2>
                                        <p class="text-muted m-b-10">???</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                    </div>
                    <!-- end row -->
                    <h4 class="header-title mt-0 m-b-30">Dermiers produits mis en vente</h4>
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
                    <h4 class="header-title mt-0 m-b-30">Dermières Actus publiées</h4>
                    <div class="port m-b-20">
                        <div class="portfolioContainer">
                            @foreach ($actualites as $actualite )


                            <div class="col-md-4 col-xl-4 col-lg-4 {{$actualite->category}}">

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
