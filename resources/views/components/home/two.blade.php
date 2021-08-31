<div class="container r2f-section-two r2f-section-gap">
    <div class="row">
        <div class="col-lg-8">
            <h2 class="r2f-border-left mb-3 pl-2 fw-bold">C'est Chaud !</h2>
            <div class="r2f-tab-wrap">
                <ul class="nav justify-content-lg-end pb-1" id="topPosts">
                    <li class="nav-item pe-2">
                        <button class="active" id="tab-one" data-bs-toggle="tab" data-bs-target="#tab-one-content">En ce moment</button>
                    </li>
                    <li class="nav-item pe-2">
                        <button class="" id="tab-two" data-bs-toggle="tab" data-bs-target="#tab-two-content">cette semaine</button>
                    </li>
                    <li class="nav-item">
                        <button class="" id="tab-three" data-bs-toggle="tab" data-bs-target="#tab-three-content">ce mois</button>
                    </li>
                </ul>
                <div class="tab-content" id="topPostsContent">
                    <div class="tab-pane fade show active" id="tab-one-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="r2f-post-wrap">
                                    <div class="position-relative">
                                        <a href="/news/{{$topToday->first()->article->tag}}"><img src="{{$topToday->first()->article->Avatar}}" class="img-fluid"></a>
                                        <p class="r2f-post-meta position-absolute m-0 pl-4"><a href="/categories/{{$topToday->first()->article->Category->slug}}" class="r2f-post-meta-design">{{$topToday->first()->article->Category->nom}}</a></p>
                                    </div>
                                    <div class="p-3 p-md-2">
                                        <h3 class="h4"><a href="/news/{{$topToday->first()->article->tag}}">{{$topToday->first()->article->titre}}</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="r2f-post-sm col-md-6">
                                @foreach($topToday->slice(1)->take(3) as $article)
                                <div class="r2f-post-wrap row pb-4">
                                    <div class="col-4 p-0">
                                        <div class="position-relative">
                                            <a href="/news/{{$article->article->tag}}"><img src="{{$article->article->getAvatar(155,90)}}" class="img-fluid"></a>
                                            <p class="r2f-post-meta position-absolute m-0 pl-4"><a href="/categories/{{$article->article->Category->slug}}" class="r2f-post-meta-tech">{{$article->article->Category->nom}}</a></p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3 class="h4"><a href="/news/{{$article->article->tag}}">{{$article->article->titre}}</a></h3>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-two-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="r2f-post-wrap">
                                    <div class="position-relative">
                                        <a href="/news/{{$topWeek->first()->article->tag}}"><img src="{{$topWeek->first()->article->Avatar}}" class="img-fluid"></a>
                                        <p class="r2f-post-meta position-absolute m-0 pl-4"><a href="/categories/{{$topWeek->first()->article->Category->slug}}" class="r2f-post-meta-design">{{$topWeek->first()->article->Category->nom}}</a></p>
                                    </div>
                                    <div class="p-3 p-md-2">
                                        <h3 class="h4"><a href="/news/{{$topWeek->first()->article->tag}}">{{$topWeek->first()->article->titre}}</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="r2f-post-sm col-md-6">
                                @foreach($topWeek->slice(1)->take(3) as $article)
                                <div class="r2f-post-wrap row pb-4">
                                    <div class="col-4 p-0">
                                        <div class="position-relative">
                                            <a href="/news/{{$article->article->tag}}"><img src="{{$article->article->getAvatar(155,90)}}" class="img-fluid"></a>
                                            <p class="r2f-post-meta position-absolute m-0 pl-4"><a href="/categories/{{$article->article->Category->slug}}" class="r2f-post-meta-tech">{{$article->article->Category->nom}}</a></p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3 class="h4"><a href="/news/{{$article->article->tag}}">{{$article->article->titre}}</a></h3>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-three-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="r2f-post-wrap">
                                    <div class="position-relative">
                                        <a href="/news/{{$topMonth->first()->article->tag}}"><img src="{{$topMonth->first()->article->Avatar}}" class="img-fluid"></a>
                                        <p class="r2f-post-meta position-absolute m-0 pl-4"><a href="/categories/{{$topMonth->first()->article->Category->slug}}" class="r2f-post-meta-design">{{$topMonth->first()->article->Category->nom}}</a></p>
                                    </div>
                                    <div class="p-3 p-md-2">
                                        <h3 class="h4"><a href="/news/{{$topMonth->first()->article->tag}}">{{$topMonth->first()->article->titre}}</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="r2f-post-sm col-md-6">
                                @foreach($topMonth->slice(1)->take(3) as $article)
                                <div class="r2f-post-wrap row pb-4">
                                    <div class="col-4 p-0">
                                        <div class="position-relative">
                                            <a href="/news/{{$article->article->tag}}"><img src="{{$article->article->getAvatar(155,90)}}" class="img-fluid"></a>
                                            <p class="r2f-post-meta position-absolute m-0 pl-4"><a href="/categories/{{$article->article->Category->slug}}" class="r2f-post-meta-tech">{{$article->article->Category->nom}}</a></p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3 class="h4"><a href="/news/{{$article->article->tag}}">{{$article->article->titre}}</a></h3>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-four-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="r2f-post-wrap">
                                    <div class="position-relative">
                                        <a href="#"><img src="{{asset('assets/images/news/3.jpg')}}" class="img-fluid"></a>
                                        <p class="r2f-post-meta position-absolute m-0 pl-4"><a href="#" class="r2f-post-meta-design">Design</a></p>
                                    </div>
                                    <div class="p-3 p-md-2">
                                        <h3 class="h4"><a href="#">Booba : son buste est dévoilé dans une exposition inédite</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="r2f-post-sm col-md-6">
                                <div class="r2f-post-wrap row pb-4">
                                    <div class="col-4">
                                        <div class="position-relative">
                                            <a href="#"><img src="{{asset('assets/images/news/4.jpg')}}" class="img-fluid"></a>
                                            <p class="r2f-post-meta position-absolute m-0 pl-4"><a href="#" class="r2f-post-meta-tech">Tech</a></p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3 class="h4"><a href="#">Jul est chaud pour réaliser le prochain hymne des Bleus</a></h3>
                                    </div>
                                </div>
                                <div class="r2f-post-wrap row pb-4">
                                    <div class="col-4">
                                        <div class="position-relative">
                                            <a href="#"><img src="{{asset('assets/images/news/5.jpg')}}" class="img-fluid"></a>
                                            <p class="r2f-post-meta position-absolute m-0 pl-4"><a href="#" class="r2f-post-meta-live">Live</a></p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3 class="h4"><a href="#">Après leur featuring, Soso Maness et SCH préparent un film ensemble</a></h3>
                                    </div>
                                </div>
                                <div class="r2f-post-wrap row">
                                    <div class="col-4">
                                        <div class="position-relative">
                                            <a href="#"><img src="{{asset('assets/images/news/6.jpg')}}" class="img-fluid"></a>
                                            <p class="r2f-post-meta position-absolute m-0 pl-4"><a href="#" class="r2f-post-meta-sports">Sports</a></p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3 class="h4"><a href="#">Booba se moque de Gims, qui a fait du plagiat pour l’un de ses derniers titres</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 pt-4">
            <div class="r2f-form-wrap p-2">
                <form class="position-relative px-4 py-4" action="" method="">
                    <p class="h3 fw-bold text-uppercase mb-3 text-dark text-center">Ne rate plus rien de l'actu du RAP GAME ! reçois tout sur ta boite</p>
                    <div class="pb-3">
                        <input type="email" class="w-100 p-2 text-center border text-dark" id="" placeholder="C'est quoi ton e-mail ?">
                    </div>
                    <div class="pb-3">
                        <input type="submit" class="r2f-btn-global rounded w-100 py-2 fw-bold" name="" value="Ne rate plus rien">
                    </div>
                    <div class="text-center">
                        <span class="text-muted">Pas de panique, on ne spam pas</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>