<div class="r2f-section-four r2f-section-gap">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center py-4">
                <div>
                    <p class="r2f-post-meta"><a href="/categories/{{$lifestyleArticle->Category->slug}}" class="r2f-post-meta-health">{{$lifestyleArticle->Category->nom}}</a></p>
                    <a href="/news/{{$lifestyleArticle->tag}}"><h2 class="h1 text-white fw-bold">{{$lifestyleArticle->titre}}</h2></a>
                </div>
            </div>
            <div class="col-lg-6">
                <a href="#"><img src="{{$lifestyleArticle->Avatar}}" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>