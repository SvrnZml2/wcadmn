@extends('header')
@extends('navigation')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <h2>Modification des images</h2>
            <div class="row">

                <div class="col-sm-6 offset-sm-3">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Image de présentation</h4>
                        <img  class="col-sm-3 justify-content-center  img-thumbnail img-responsive img-thumbnail img-responsive" src="{{$product->image_pres}}" alt="">
                        <form method="POST" action="{{ route('products.update', $product->id) }}">
                                @csrf
                                @method('PUT')
                                <input type="file" class="dropify" data-height="300" />
                            <input type="submit" value="Modifier">
                        </form>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Image n°2</h4>
                    <img  class="col-sm-3 justify-content-center img-thumbnail img-responsive" src="{{$product->image_1}}" alt="">
                    <form method="POST" action="{{ route('products.update', $product->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="file" class="dropify" data-default-file="assets/images/gallery/1.jpg" />
                        <input type="submit" value="Modifier">
                    </form>

                    </div>
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Image n°3</h4>
                        <img  class="col-sm-3 justify-content-center img-thumbnail img-responsive" src="{{$product->image_2}}" alt="">
                        <form method="POST" action="{{ route('products.update', $product->id) }}">
                                @csrf
                                @method('PUT')
                                <input type="file" class="dropify" data-default-file="assets/images/gallery/1.jpg" />
                            <input type="submit" value="Modifier">
                        </form>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <h2>Modification de la description</h2>
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="card-box">
                            <form method="POST" action="{{ route('products.update', $product->id) }}">
                                @csrf
                                @method('PUT')
                            <textarea id="elm1" name="area">{{ $product->description }}</textarea>
                            <input type="submit" value="Modifier">
                        </form>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- End row -->
        </div> <!-- container -->
    </div> <!-- content -->
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
    @extends('footer')
