@extends('layouts.site')

@section('main-section')
<section class="banner_02">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb"><a href="{{Route('home')}}">Accueil</a>><a href="{{Route('categories.show',$category->slug)}}">{{$category->nom}}</a></div>
                    </div>
                </div>
            </div>
        </section>
<section class="category_page_3 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sec_titles"><i></i>{{$category->nom}}</h2>
                    </div>
                </div>
                @if($category->articles()->count() > 0)
                <div id="wrapper">
                <div class="row" >
                	@foreach($category->articles()->take(12)->get() as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="tt_s_post">
                            <div class="tt_thumb">
                                <img src="{{$article->avatar}}" alt="">
                                <a class="view" href="#"><i class="magro-fire"></i>120</a>
                                <a class="share" href="#"><i class="magro-share-2"></i>320</a>
                            </div>
                            <div class="tt_s_content">
                                <div class="rc_meta">
                                    <a href="#">{{$article->DateActu}}</a>
                                    <a class="like" href="#"><i class="magro-view"></i>1.1k</a>
                                    <a class="commnet" href="#"><i class="magro-pencil"></i>22</a>
                                </div>
                                <h3><a href="{{Route('news.show',$article->tag)}}">{{$article->titre}}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button class="magro_btn flex items-center justify-center  w-1/4 mx-auto" id="loadMore" category="{{$category->slug}}" dataTotal="{{$category->articles()->take(12)->get()->count()}}">
                            <span id="loadText" style="top:0px;" class="top-0">Chargez</span>
                        </button>
                    </div>
                </div>

                @else
                    <p>Pas d'articles dans cette catégorie</p>
                @endif

            </div>
        </section>
@endsection

@section('page-script')
        
    <script>
        const loadMore = document.querySelector('#loadMore')
        const wrapper = document.querySelector('#wrapper')
        var dataTotal = loadMore.getAttribute('dataTotal')
        var category = loadMore.getAttribute('category')
        const loadText = document.querySelector("#loadText");
        const loading = `<img src="/assets/template/images/loading.png" alt=""><img src="/assets/template/images/loading_hover.png" alt="">`
        const loadingSpan = document.createElement('span');
        loadingSpan.style.top = "0px";
        loadingSpan.innerHTML = loading;

        loadMore.addEventListener('click',() => {
            dataTotal = loadMore.getAttribute('dataTotal');
            loadMore.disabled = true;
            loadMore.append(loadingSpan)
            loadMore.removeChild(loadText)
            loadMorePosts(dataTotal,category)
        })

        const loadMorePosts = (dataTotal,category) => {

            fetch('/api/categories/getMoreNews',{
            method: 'POST',
            headers :{
            
             'Content-Type': 'application/json',

            },
            body:JSON.stringify({dataTotal,category})},
            )
            .then(response => response.json())
            .then(data => {
                if(data == "No articles"){
                    loadMore.remove();
                    return;
                }
                var row = "";
                Object.values(data).map(article => {

                    const template = `
                    <div class="col-lg-4 col-md-6">
                        <div class="tt_s_post">
                            <div class="tt_thumb">
                                <img src="${article.Avatar}" alt="">
                                <a class="view" href="#"><i class="magro-fire"></i>120</a>
                                <a class="share" href="#"><i class="magro-share-2"></i>320</a>
                            </div>
                            <div class="tt_s_content">
                                <div class="rc_meta">
                                    <a href="#">${article.DateActu}</a>
                                    <a class="like" href="#"><i class="magro-view"></i>1.1k</a>
                                    <a class="commnet" href="#"><i class="magro-pencil"></i>22</a>
                                </div>
                                <h3><a href="/news/${article.tag}">${article.titre}</a></h3>
                            </div>
                        </div>
                    </div>`

                    row = `${template}${row}`
                }) 

                var wrap = document.createElement('div');
                wrap.classList.add('row')
                wrap.innerHTML = row;
                wrapper.append(wrap)
                loadMore.setAttribute("dataTotal",parseInt(dataTotal) + 12);
                loadMore.disabled = false
                loadMore.append(loadText)
                loadMore.removeChild(loadingSpan)

            })
            .catch(function(error){


                console.error(error);
            })
        }


    </script>

@endsection