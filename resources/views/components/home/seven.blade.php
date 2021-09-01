<div class="container r2f-section-seven r2f-section-gap">
    <div class="row">
        <div class="col-lg-4 pb-4 pb-lg-0">
            <h2 class="r2f-border-left mb-4 ps-2 fw-bold ">Gaming</h2>
            @foreach ($gamingArticles as $article)  
            <div class="r2f-post-wrap row pb-3">
                <div class="col-5">
                    <div class="img-wrap">
                        <a href="/news/{{$article->tag}}"><img src="{{$article->Avatar}}" class="img-fluid"></a>
                    </div>
                </div>
                <div class="d-flex align-items-center col">
                    <div>
                        <h3 class="h5 mb-0"><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-4 pb-4 pb-lg-0">
            <h2 class="r2f-border-left mb-4 ps-2 fw-bold">Art et Culture</h2>

            @foreach ($artEtCultureArticles as $article)  
            <div class="r2f-post-wrap row pb-3">
                <div class="col-5">
                    <div class="img-wrap">
                        <a href="/news/{{$article->tag}}"><img src="{{$article->Avatar}}" class="img-fluid"></a>
                    </div>
                </div>
                <div class="d-flex align-items-center col">
                    <div>
                        <h3 class="h5 mb-0"><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="col-lg-4">
            <div class="r2f-last-element p-4 bg-dark">
                <h2 class="r2f-border-left text-white mb-4 ps-2 fw-bold">Projets qu'on kiff</h2>
                @foreach ($articles->slice(2) as $article)
                <div class="r2f-post-wrap row pb-3">
                    <div class="col-5">
                        <div class="img-wrap">
                            <a href="/news/{{$article->tag}}"><img src="{{$article->Avatar}}" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center col">
                        <div>
                            <h3 class="h5 mb-0"><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>