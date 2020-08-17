<section class="banner_01" style="position:relative; background:url('{{$article->Avatar}}') no-repeat center center ; background-size: cover; background-attachment: fixed;">

    <div style="position: absolute; width: 100%; height: 100%; top: 0;left: 0;right: 0;bottom: 0;background-color: rgba(0,0,0,0.5);"></div>
            <div class="container" style="z-index: 3;">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="banner_1_content relative">
                            
                            <a href="{{Route('categories.show',$article->Category->slug)}}" class="cats blues2">{{$article->Category->nom}}</a>
                            <h1 class="title" style="color:white;" tag="{{$article->tag}}">{{$article->titre}}</h1>
                            <div class="post_banner_meta clearfix">
                                <img loading="lazy" src="{{$article->Creator->Avatar}}" alt=""/>
                                <span class="fi1cm_author">By <a href="{{Route('editors.show',$article->Creator->slug)}}">{{$article->Creator->Full_Name}}</a></span>
                                <span class="fi1cm_date">-<a href="#"><i class="feather icon-clock"></i>{{$article->DateActu}}</a></span>
                                <a class="like" href="#"><i class="magro-view"></i>{{$article->ArticleViews}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>