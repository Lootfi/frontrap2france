@extends('layouts.site')

@section('main-section')
<section class="category_page_3 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sec_titles"><i></i>{{$category->nom}}</h2>
                    </div>
                </div>
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
                            <div class="row items-center"><span>Load More</span>
                                <span><img src="{{asset('assets/template/images/loading.png')}}" alt=""><img src="{{asset('assets/template/images/loading_hover.png')}}" alt=""></span>
                            </div></button>
                    </div>
                </div>

            </div>
        </section>
@endsection

@section('page-script')
        
    <script>
        const loadMore = document.querySelector('#loadMore')
        const wrapper = document.querySelector('#wrapper')

        loadMore.addEventListener('click',() => {

            var dataTotal = loadMore.getAttribute('dataTotal')
            var category = loadMore.getAttribute('category')
            loadMore.disabled = true;
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
                console.log(data)
                var row = null;
                Object.values(data).map(article => {

                    const template = `
                    <div class="col-lg-4 col-md-6">
                        <div class="tt_s_post">
                            <div class="tt_thumb">
                                <img src="${article.avatar}" alt="">
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
                loadMore.disabled = false

            })
            .catch(function(error){


                console.error(error);
            })
        }


    </script>

@endsection