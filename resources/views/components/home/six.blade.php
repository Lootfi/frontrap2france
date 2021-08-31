<div class="r2f-section-six r2f-section-gap">
    <div class="container">
        <div class="row">
            @foreach ($articles->slice(2) as $article)
            <div class="col-md-4">
                <a href="/news/{{$article->tag}}"><img src="{{$article->Avatar}}" class="img-fluid"></a>
                <div class="r2f-content-wrap position-relative p-4">
                    <p class="r2f-post-meta position-absolute m-0 ps-4"><a href="#" class="r2f-post-meta-tech">{{$article->Category->nom}}</a></p>
                    <h3 class="h4 bg-white fw-bold p-3"><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h3>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>