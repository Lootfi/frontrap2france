<div class="container r2f-section-one r2f-section-gap">
    <div class="r2f-advertisment py-3">
        <img src="https://via.placeholder.com/1360x120?text=Ad+Image" class="img-fluid">
    </div>
    <div class="r2f-section-one-posts">
        <div class="row g-3 pb-3">
            <div class="col-lg-8">
                <div class="r2f-post-wrap r2f-post-wrap-lg position-relative h-100">
                    <a href="/news/{{$featuredArticles->first()->tag}}"><img src="{{$featuredArticles->first()->Avatar}}" class="h-100 img-fluid"></a>
                    <div class="r2f-post-excerpts position-absolute hcsl-ti">
                        <p class="r2f-post-meta"><a href="{{Route('categories.show',$featuredArticles->first()->Category->slug)}}" class="r2f-post-meta-fashion">{{$featuredArticles->first()->Category->nom}}</a></p>
                        <h2 class="h3 fw-bold"><a href="/news/{{$featuredArticles->first()->tag}}">{{$featuredArticles->first()->titre}}</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    @foreach($featuredArticles->slice(1)->take(2) as $article)
                    <div class="col-lg-12 col-md-6 r2f-col-padding">
                        <div class="r2f-post-wrap r2f-post-wrap-sm position-relative">
                            <a href="/news/{{$article->tag}}"><img src="{{$article->Avatar}}" class="img-fluid"></a>
                            <div class="r2f-post-excerpts position-absolute hcsl-ti">
                                <p class="r2f-post-meta"><a href="{{Route('categories.show',$article->Category->slug)}}" class="r2f-post-meta-lifestyle">{{$article->Category->nom}}</a></p>
                                <h2 class="h5 fw-bold"><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row g-3">
            @foreach($featuredArticles->slice(3)->take(3) as $article)
            <div class="col-lg-4 col-md-6">
                <div class="r2f-post-wrap r2f-post-wrap-sm position-relative">
                    <a href="/news/{{$article->tag}}"><img src="{{$article->Avatar}}" class="img-fluid"></a>
                    <div class="r2f-post-excerpts position-absolute hcsl-ti">
                        <p class="r2f-post-meta"><a href="Route('categories.show',$article->Category->slug)}}" class="r2f-post-meta-tech">{{$article->Category->nom}}</a></p>
                        <h2 class="h5 fw-bold"><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>