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
                <div class="col-sm-12 ">
                    <div class="card-box ">
                        <h1 class="m-0">{{$product->titre}}</h1>
                        <div class="profile-info-name">
                            <img src="{{$product->image_pres}}" class="img-thumbnail" alt="profile-image">
                            <img src="{{$product->image_1}}" class="img-thumbnail" alt="profile-image">
                            <img src="{{$product->image_2}}" class="img-thumbnail" alt="profile-image">
                            <div class="profile-info-detail">
                                <h4> Catégorie: {{$product->category}}</h4>
                                <p class="text-muted m-b-20">{{$product->description}}</p>
                                <div class="infos">
                                    <img class=" user_photo" src="{{ Gravatar::src($product->user->email) }}"
                                        alt="">
                                    {{ $product->user->name }}
                                    <time datetime="{{ $product->created_at }}">@datetime($product->created_at)</time>
                                </div>

                                    <a href="{{ route('products.edit', $product->id) }}"><i class="fas fa-edit">Modifier</i></a>

                                    <a href="#custom-modal" data-animation="swell" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a"><i class="fas fa-times-circle">Supprimer</i></a>
                                    <!-- Modal -->
                                    <div id="custom-modal" class="modal-demo">
                                        <button type="button" class="close" onclick="Custombox.close();">
                                            <span>&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="custom-modal-title">Confirmation</h4>
                                        <div class="custom-modal-text">
                                            <p>Etes-vous certains de vouloir supprimer l'actualité
                                                {{$product->titre}} ?

                                            </p>
                                            <a href="#" style='cursor:pointer;' onclick="Custombox.close();">Annuler
                                            </a>
                                            @can('updateAndDelete', $product)
                                            <a href="{{ route('products.destroy', $product->id) }}" onclick="event.preventDefault(); document.getElementById('destroy{{ $product->id }}').submit();">Valider</a>
                                            @endcan
                                            <form method="POST" id="destroy{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                        </div>
                                    </div>
                                    <!-- End Modal -->

                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </div> <!-- content -->
        @extends('footer')
