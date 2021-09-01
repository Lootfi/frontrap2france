@extends('layouts.site')
@section('meta-section')
<link rel="stylesheet" href="{{asset('css/authors.css')}}">
@endsection
@section('main-section')
<main>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 border-end pe-4" id="authors-parent">
                <div class="r2r-author-left-part">
                    <h1>Nos Auteurs</h1>
                    <p class="mb-5">Voice une liste de touts nos auteurs.</p>
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
                                            <a href="{{$author->Details->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="pe-3">
                                            <a href="{{$author->Details->twitter}}"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="pe-3">
                                            <a href="{{$author->Details->pinterest}}"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{$author->Details->instagram}}"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <p>{{$author->Details->biography}}</p>
                                <a href="/editors/{{$author->slug}}#articles" class="r2f-btn-global text-uppercase py-2 px-3 rounded">{{$author->articles()->count()}}
                                    Articles</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 ps-lg-4">
                <div class="r2r-author-right">
                    <div class="pb-5">
                        <a href="#">
                            <img src="{{asset('assets/images/consert-img.jpg')}}" class="img-fluid">
                        </a>
                    </div>
                    <div class="pb-4">
                        <h2 class="h6 text-uppercase bg-dark text-white mb-4 px-3 py-2">Our Picks</h2>
                        <div class="border-bottom pb-4 mb-4">
                            <div class="row">
                                <div class="col-5 pb-3 pb-sm-0">
                                    <img src="{{asset('assets/images/post-3_2.jpg')}}" class="img-fluid">
                                </div>
                                <div class="col d-flex align-items-center">
                                    <div class="r2f-post-wrap">
                                        <h3 class="h5"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p class="r2f-post-date mb-0"><a href="#"
                                                class="fst-italic text-muted">Nov 10, 2018</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom pb-4 mb-4">
                            <div class="row">
                                <div class="col-5 pb-3 pb-sm-0">
                                    <img src="{{asset('assets/images/post-3_2.jpg')}}" class="img-fluid">
                                </div>
                                <div class="col d-flex align-items-center">
                                    <div class="r2f-post-wrap">
                                        <h3 class="h5"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p class="r2f-post-date mb-0"><a href="#"
                                                class="fst-italic text-muted">Nov 10, 2018</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom pb-4 mb-4">
                            <div class="row">
                                <div class="col-5 pb-3 pb-sm-0">
                                    <img src="{{asset('assets/images/post-3_2.jpg')}}" class="img-fluid">
                                </div>
                                <div class="col d-flex align-items-center">
                                    <div class="r2f-post-wrap">
                                        <h3 class="h5"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p class="r2f-post-date mb-0"><a href="#"
                                                class="fst-italic text-muted">Nov 10, 2018</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-5 pb-3 pb-sm-0">
                                    <img src="{{asset('assets/images/post-3_2.jpg')}}" class="img-fluid">
                                </div>
                                <div class="col d-flex align-items-center">
                                    <div class="r2f-post-wrap">
                                        <h3 class="h5"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p class="r2f-post-date mb-0"><a href="#"
                                                class="fst-italic text-muted">Nov 10, 2018</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="r2f-authors-social justify-content-between pb-4">
                        <a href="#" class="text-white px-4 py-3 mb-3">
                            <span><i class="fab fa-facebook-f"></i></span>
                            <span class="ps-2">10k</span>
                            <span class="ps-2">Facebook</span>
                        </a>
                        <a href="#" class="text-white px-4 py-3 mb-3">
                            <span><i class="fab fa-twitter"></i></span>
                            <span class="ps-2">10k</span>
                            <span class="ps-2">Twitter</span>
                        </a>
                        <a href="#" class="text-white px-4 py-3 mb-3">
                            <span><i class="fab fa-pinterest-p"></i></span>
                            <span class="ps-2">10k</span>
                            <span class="ps-2">Pinterest</span>
                        </a>
                        <a href="#" class="text-white px-4 py-3 mb-3">
                            <span><i class="fab fa-instagram"></i></i></span>
                            <span class="ps-2">10k</span>
                            <span class="ps-2">Instagram</span>
                        </a>
                        <a href="#" class="text-white px-4 py-3 mb-3">
                            <span><i class="fab fa-youtube"></i></span>
                            <span class="ps-2">10k</span>
                            <span class="ps-2">Youtube</span>
                        </a>
                        <a href="#" class="text-white px-4 py-3 mb-3">
                            <span><i class="fab fa-vimeo-v"></i></span>
                            <span class="ps-2">10k</span>
                            <span class="ps-2">Vimeo</span>
                        </a>
                    </div>
                    <div class="pb-5">
                        <h2 class="h6 text-uppercase bg-dark text-white mb-4 px-3 py-2">Don't miss</h2>
                        <div class="r2f-post-wrap">
                            <div class="position-relative">
                                <img src="{{asset('assets/images/post-3_2.jpg')}}" class="img-fluid">
                                <p class="r2f-post-meta position-absolute m-0 p-0 text-uppercase "><a href="#"
                                        class="r2f-post-meta-fashion">Fashion</a></p>
                            </div>
                            <div class="pt-3 mb-4">
                                <h3 class="h4"><a href="#">Discovering Sydney’s See Attractions line</a></h3>
                                <p class="r2f-post-author mb-0"><i class="fas fa-user me-2"></i>By<a
                                        href="#">Jawn Staff</a> - <a href="#" class="fst-italic">Nov 10,
                                        2018</a></p>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 pb-3 pb-sm-0">
                                <img src="{{asset('assets/images/post-3_2.jpg')}}" class="img-fluid">
                            </div>
                            <div class="col d-flex align-items-center">
                                <div class="r2f-post-wrap">
                                    <h3 class="h5"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                    <p class="r2f-post-date mb-0"><a href="#" class="fst-italic text-muted">Nov
                                            10, 2018</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 pb-3 pb-sm-0">
                                <img src="{{asset('assets/images/post-3_2.jpg')}}" class="img-fluid">
                            </div>
                            <div class="col d-flex align-items-center">
                                <div class="r2f-post-wrap">
                                    <h3 class="h5"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                    <p class="r2f-post-date mb-0"><a href="#" class="fst-italic text-muted">Nov
                                            10, 2018</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 pb-3 pb-sm-0">
                                <img src="{{asset('assets/images/post-3_2.jpg')}}" class="img-fluid">
                            </div>
                            <div class="col d-flex align-items-center">
                                <div class="r2f-post-wrap">
                                    <h3 class="h5"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                    <p class="r2f-post-date mb-0"><a href="#" class="fst-italic text-muted">Nov
                                            10, 2018</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="r2f-form-wrap p-2">
                        <form class="p-5 border bg-white" action="" method="">
                            <p class="h4 fw-bold text-uppercase pb-4 text-dark text-center">Get the best viral
                                stories straight into your inbox</p>
                            <div class="pb-3">
                                <input type="email" class="w-100 p-2 text-center border text-dark" id=""
                                    placeholder="Your email address">
                            </div>
                            <div class="pb-3">
                                <input type="submit" class="r2f-btn-global rounded w-100 py-2 fw-bold" name=""
                                    value="Subscribe">
                            </div>
                            <div class="form-check text-center">
                                <input type="checkbox" class="form-check-input" id="">
                                <label class="form-check-label text-muted" for="">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit.</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection