<div class="r2r-author-right">
    <div class="pb-5">
        <a href="#">
            <img src="{{asset('assets/images/consert-img.jpg')}}" class="img-fluid">
        </a>
    </div>
    <div class="pb-4">
        <h2 class="h6 text-uppercase bg-dark text-white mb-4 px-3 py-2">C'est Chaud !</h2>
        @foreach ($chaud as $article)
        {{-- {{dd($article->article)}} --}}
        <div class="mb-4">
            <div class="row">
                <div class="col-5 pb-3 pb-sm-0">
                    <a href="/news/{{$article->article->tag}}"><img src="{{$article->article->getAvatar(155,90)}}"
                            class="img-fluid"></a>
                </div>
                <div class="col d-flex align-items-center">
                    <div class="r2f-post-wrap">
                        <h3 class="h5"><a href="/news/{{$article->article->tag}}">{{$article->article->titre}}</a></h3>
                        <p class="r2f-post-date mb-0"><a href="#" class="fst-italic text-muted">Nov 10,
                                2018</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="r2f-authors-social justify-content-between pb-4">
        <a href="https://www.facebook.com/Rap2FranceOfficiel/" class="text-white px-2 py-3 mb-3">
            <span><i class="fab fa-facebook-f"></i></span>
            <span class="ps-2">383k</span>
            <span class="ps-2">Facebook</span>
        </a>
        <a href="https://twitter.com/rap2france" class="text-white px-2 py-3 mb-3">
            <span><i class="fab fa-twitter"></i></span>
            <span class="ps-2">55k</span>
            <span class="ps-2">Twitter</span>
        </a>
        {{-- <a href="#" class="text-white px-2 py-3 mb-3">
            <span><i class="fab fa-pinterest-p"></i></span>
            <span class="ps-2">10k</span>
            <span class="ps-2">Pinterest</span>
        </a> --}}
        <a href="https://www.instagram.com/rap2france/" class="text-white px-2 py-3 mb-3">
            <span><i class="fab fa-instagram"></i></i></span>
            <span class="ps-2">131k</span>
            <span class="ps-2">Instagram</span>
        </a>
        <a href="https://www.youtube.com/channel/UCKdq4ztO1eoXEOdk8Od_r_w" class="text-white px-2 py-3 mb-3">
            <span><i class="fab fa-youtube"></i></span>
            <span class="ps-2">21k</span>
            <span class="ps-2">Youtube</span>
        </a>
        {{-- <a href="#" class="text-white px-4 py-3 mb-3">
            <span><i class="fab fa-vimeo-v"></i></span>
            <span class="ps-2">10k</span>
            <span class="ps-2">Vimeo</span>
        </a> --}}
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
                <p class="r2f-post-author mb-0"><i class="fas fa-user me-2"></i>By<a href="#">Jawn
                        Staff</a> - <a href="#" class="fst-italic">Nov 10,
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
                <input type="submit" class="r2f-btn-global rounded w-100 py-2 fw-bold" name="" value="Subscribe">
            </div>
            <div class="form-check text-center">
                <input type="checkbox" class="form-check-input" id="">
                <label class="form-check-label text-muted" for="">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.</label>
            </div>
        </form>
    </div>
</div>
