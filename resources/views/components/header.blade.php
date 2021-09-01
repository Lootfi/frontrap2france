<!-- Side Nav -->
<nav id="sidebar">
    <div id="dismiss">
        <i class="fas fa-arrow-left"></i>
    </div>
    <div class="sidebar-header">
        <a href="#"></a>
    </div>
    <ul class="r2f-side-nav list-unstyled components p-3">
        <li class="r2f-border-bottom">
            <a class="active" href="/">Accueil</a>
        </li>
        <li class="r2f-border-bottom">
            <div class="accordion accordion-flush" id="accordionNav">
                <div>
                    <a class="r2f-has-dropdown position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNav" id="flush-headingNav">Gallery</a>
                    <div id="flush-collapseNav" class="collapse">
                        <ul class="list-unstyled ps-3">
                            <li>
                                <a href="#">Clips</a>
                            </li>
                            <li>
                                <a href="#">Sons</a>
                            </li>
                            <li>
                                <a href="#">Videos</a>
                            </li>
                            {{-- <li>
                                <div class="accordion accordion-flush" id="accordionSubNav">
                                    <div class="">
                                        <a class="r2f-has-dropdown position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSub" id="flush-headingSub">Sub Features</a>
                                        <div id="flush-collapseSub" class="collapse">
                                            <ul class="list-unstyled ps-3">
                                                <li>
                                                    <a href="#">Unique Demos</a>
                                                </li>
                                                <li>
                                                    <a href="#">Post Style</a>
                                                </li>
                                                <li>
                                                    <a href="#">Header Style</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        {{-- <li class="r2f-border-bottom">
            <a href="#">Portfolio</a>
        </li> --}}
        <li class="r2f-border-bottom">
            <a href="/contact">Contact</a>
        </li>
    </ul>
    <div class="p-3 d-none d-lg-block">
        <div class="r2f-siderbar-form p-3">
            <form action="" method="">
                <h2 class="h3 text-center">Subscribe to Updates</h2>
                <p class="text-center py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="pb-3">
                    <input type="email" class="rounded w-100 p-2 " id="">
                </div>
                <div class="pb-3">
                    <input type="submit" class="r2f-btn-global rounded w-100 py-2 fw-bold" name="" value="Subscribe">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label text-muted" for="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                </div>
            </form>
        </div>
    </div>
    <div class="rft-social-icons pb-3">
        <ul class="m-0 p-0 d-flex list-unstyled justify-content-center">
            <li class="nav-item">
                <a class="d-flex align-items-center justify-content-center" href="https://web.facebook.com/Rap2FranceOfficiel/"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center justify-content-center" href="https://twitter.com/rap2france"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center justify-content-center" href="https://www.instagram.com/rap2france/"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
    </div>
</nav>
<!-- Top Nav  -->
<nav class="r2f-nav-2 py-3 d-none d-lg-block">
    <div class="container">
        <div class="row w-100">
            <div class="rft-social-icons col d-flex align-items-center">
                <ul class="m-0 p-0 d-flex list-unstyled">
                    <li class="nav-item">
                        <a class="d-flex align-items-center justify-content-center" href="https://web.facebook.com/Rap2FranceOfficiel/"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center justify-content-center" href="https://twitter.com/rap2france"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center justify-content-center" href="https://www.instagram.com/rap2france/"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center justify-content-center" href="https://www.youtube.com/c/rap2france"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <div class="r2f-logo r2f-logo-main col">
                <a class="mx-auto" href="{{url('/')}}"></a>
            </div>
            <div class="col-lg-3">
                <div class="header_01_settings">
                    <div class="search_btn relative">
                         <a href="javascript:void(0);"><i class="feather icon-search"></i></a>
                        <form id="cse-search-box" class="searchForms" action="/search" role="search">
                        <label style="display:none;" for="search-input"></label>
                        <input type="search" value="{{request()->get('q')}}" id="search-input" class="search-field" name="q" placeholder="Recherche" autocomplete="off" data-bind="textInput:keyword"> <input type="hidden" name="cx" value="partner-pub-2176698891774775:9098524048" />
                        <input type="hidden" name="cof" value="FORID:10" />
                        <input type="hidden" name="ie" value="UTF-8" />
                        <input type="submit" style="display:none;" class="hidden" />
                        </form>
                </div>
                    
                   
                </div>
        </div>
    </div>
</nav>
<nav id="nav-sticky" class="r2f-nav-3 sticky-top navbar navbar-expand-lg navbar-dark bg-dark pb-0 d-none d-lg-block">
    <div class="container pe-0">
        <div class="row w-100 position-relative">
            <div class="col-auto pt-1">
                <button type="button" id="sidebarCollapse" class="r2f-toggle btn"></button>
            </div>
            <div class="col d-flex justify-content-center">
                <ul class="list-unstyled m-0 p-0 d-flex">
                    <li class="pe-2 pt-2 pb-3">
                        <a class="active r2r-nav-link" href="#">Accueil</a>
                    </li>
                    <li class="r2f-dropdown pe-3 pt-2 pb-3">
                        <a class="r2f-dropdown-icon r2r-nav-link position-relative" href="#">Rap Fr <i class="fas fa-chevron-down"></i></a>
                        <div class="r2f-mega-menu position-absolute text-white">
                            <div class="row">
                                <div class="r2f-mega-menu-cat col-2 border-end pe-3">
                                    <ul class="m-0 pt-1 ps-4 list-unstyled">
                                        @foreach (App\Models\Category::all()->take(3) as $category)
                                        <li>
                                            <a class="py-2 ps-0" href="/categories/{{$category->slug}}">{{$category->nom}}</a>
                                        </li>
                                        @endforeach
                                        {{-- <li>
                                            <a class="py-2 ps-0" href="/categories">View All</a>
                                        </li> --}}
                                    </ul>
                                </div>
                                <div class="col ps-3 pe-5">
                                    <div class="row">
                                        @foreach (App\Models\Category::where('slug', 'sortie-rap')->first()->articles()->latest()->take(4)->get() as $article)

                                        <div class="col">
                                            <div class="r2f-mega-menu-post pt-3">
                                                <a href="/news/{{$article->tag}}">
                                                    <img class="img-fluid mb-2" src="{{$article->Avatar}}">
                                                    <h2 class="h6 fw-bold">{{$article->titre}}</h2>
                                                </a>
                                                <p class="text-muted">{{$article->dateActu}}</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="pe-2 pt-2 pb-3">
                        <a class="r2r-nav-link" href="#">La Street</a>
                    </li>
                    <li class="pe-2 pt-2 pb-3">
                        <a class="r2r-nav-link" href="#">Lifestyle</a>
                    </li>
                    <li class="pe-2 pt-2 pb-3">
                        <a class="r2r-nav-link" href="#">Cine/Series</a>
                    </li>
                    <li class="py-2">
                        <a class="r2r-nav-link" href="#">Sport</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Mobile Nav -->
<nav id="nav-sticky-mobile" class="r2f-mobile-nav sticky-top navbar-dark bg-dark d-lg-none">
    <div class="container">
        <div class="row">
            <div class="col-auto d-flex align-items-center">
                <button type="button" id="sidebarCollapse2" class="r2f-toggle btn"></button>
            </div>
            <div class="r2f-logo col py-2">
                <a class="mx-auto" href="#"></a>
            </div>
            <div class="col-auto d-flex align-items-center justify-content-end">
                <button class="r2f-btn-search btn"></button>
            </div>
        </div>
    </div>
</nav>