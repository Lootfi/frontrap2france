<div class="container r2f-section-five r2f-section-gap">
    <h2 class="r2f-border-left mb-4 ps-2 fw-bold">Clips qui cassent la baraque</h2>
    <div class="row">
        <div class="r2f-left-col col-lg-8">
            <div class="row">
                @foreach ($sortieRapArticles as $article)
                <div class="col-lg-6">
                    <div class="r2f-post-wrap">
                        <div class="position-relative">
                            <a href="/news/{{$article->tag}}"><img src="{{$article->Avatar}}" class="img-fluid"></a>
                        </div>
                        <div class="p-3 p-md-2">
                            <h3 class="h4"><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-4 align-items-center">
            <div class="adactive">
                <img src="https://via.placeholder.com/300x600?text=Ad+Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>