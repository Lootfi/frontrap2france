<div class="container r2f-section-three">
    <h2 class="r2f-border-left mb-4 ps-2 fw-bold">C'est la Street, la vraie</h2>
    <div class="row">
        @foreach(App\Models\Category::where('slug','street')->first()->articles()->latest()->take(2)->get() as $article)
        <div class="col-md-6">
            <div class="r2f-post-wrap row">
                <div class="col-sm-5 pb-3 pb-sm-0">
                    <div class="img-wrap">
                        <a href="/news/{{$article->tag}}"><img src="{{$article->Avatar}}" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <h3 class="h4"><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h3>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row py-4">
        @foreach(App\Models\Category::where('slug','street')->first()->articles()->latest()->take(4)->get()->slice(2) as $article)
        <div class="col-md-6">
            <div class="r2f-post-wrap row">
                <div class="col-sm-5 pb-3 pb-sm-0">
                    <div class="img-wrap">
                        <a href="/news/{{$article->tag}}"><img src="{{$article->Avatar}}" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <h3 class="h4"><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h3>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>