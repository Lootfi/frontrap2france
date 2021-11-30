@extends('layouts.site')
@section('meta-section')
<title>L'ÉQUIPE - RAP2FRANCE</title>
<link rel="stylesheet" href="{{asset('css/authors.css')}}">
@endsection
@section('main-section')
<main>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 border-end pe-4" id="authors-parent">
                <div class="r2r-author-left-part">
                    <h1>L'ÉQUIPE</h1>
                    <div class="my-5">
                        <p>Rap2France est avant tout une équipe de passionnés de Rap Français qui contribuent à
                            informer notre audience et partagent leur passion et les dernières sorties musicales pour le
                            plus grand bonheur des fans de musique qui nous suivent.
                        </p>
                        <p class="mb-5">Découvrez sur cette page les personnes qui font que Rap2France soit une référence souvent copiée
                            mais jamais égalée :
                        </p>
                    </div>
                    <!-- About Author -->
                    @foreach ($authors as $author)
                    <div class="border-bottom pb-5 mb-5">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <img src="{{$author->Avatar}}" class="avatar-big rounded-circle">
                            </div>
                            <div class="r2f-author-title col">
                                <div class="d-flex justify-content-between pb-2">
                                    <h2 class="h6 fw-bold">{{$author->Full_Name}}</h2>
                                    <ul class="list-unstyled m-0 d-flex">
                                        <li class="pe-3">
                                            <a href="/editors/{{$author->slug}}"><i class="fas fa-home"></i></a>
                                        </li>
                                        <li class="pe-3">
                                            <a href="{{$author->Details->facebook}}"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="pe-3">
                                            <a href="{{$author->Details->twitter}}"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="pe-3">
                                            <a href="{{$author->Details->pinterest}}"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{$author->Details->instagram}}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <p>{{$author->Details->biography}}</p>
                                <a href="/editors/{{$author->slug}}#articles"
                                    class="r2f-btn-global text-uppercase py-2 px-3 rounded">{{$author->articles()->count()}}
                                    Articles</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 ps-lg-4">
                @include('components.editors.right')
            </div>
        </div>
    </div>
</main>
@endsection
