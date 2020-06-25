@extends('layouts.site')

@section('main-section')
<section class="category_page_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sec_titles"><i></i>{{$category->nom}}</h2>
                    </div>
                </div>
                <div class="row">
                	@foreach($category->articles as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="tt_s_post">
                            <div class="tt_thumb">
                                <img src="rapvue.test{{$article->avatar}}" alt="">
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
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a class="magro_btn" href="#"><span><img src="images/loading.png" alt=""><img src="images/loading_hover.png" alt=""></span>Load More</a>
                    </div>
                </div>
            </div>
        </section>
@endsection