<section class="featured_post_section_1">
            <div class="container">
                <div class="row custom_margin">
                    <div class="col-lg-8 col-md-6 custom_padding">
                        <div class="featured_item_1 first_featured_item">
                        <img  src="{{$featuredArticles->first()->article->Avatar}}" alt="" loading="lazy" />
                            <div class="fi1_content">
                                <div class="fi1c_categories">
                                    <a href="{{Route('categories.show',$articles->first()->Category->slug)}}" class="cats blues2">{{$featuredArticles->first()->article->Category->nom}}</a>
                                </div>
                                <h2><a href="{{Route('news.show',$featuredArticles->first()->article->tag)}}">{{$featuredArticles->first()->article->titre}}</a></h2>
                                <div class="fi1c_meta clearfix">
                                    <span class="fi1cm_author">By <a href="{{Route('editors.show',$featuredArticles->first()->article->Creator->slug)}}">{{$featuredArticles->first()->article->Creator->Full_Name}}</a></span>
                                    <span class="fi1cm_date font-italic"><a href="#">{{$featuredArticles->first()->article->DateActu}}</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="row custom_margin" style="flex-wrap:nowrap;">
                            @foreach($featuredArticles->slice(1)->take(2) as $article)
                            <div class="col-lg-6 col-md-12 custom_padding">
                                <div class="featured_item_1 fi1_sm">
                                    <img src="{{$article->article->Avatar}}" alt="" loading="lazy" />
                                    <div class="fi1_content">
                                        <div class="fi1c_categories">
                                            <a href="{{Route('categories.show',$article->article->Category->slug)}}" class="cats blues2">{{$article->article->Category->nom}}</a>
                                        </div>
                                        <h2><a href="{{Route('news.show',$article->article->tag)}}">{{$article->article->titre}}</a></h2>
                                        <div class="fi1c_meta clearfix">
                                            <span class="fi1cm_author">By <a href="{{Route('editors.show',$article->article->Creator->slug)}}">{{$article->article->Creator->Full_Name}}</a></span>
                                            <span class="fi1cm_date font-italic"><a href="#">{{$article->article->DateActu}}</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 custom_padding">
                        @foreach($featuredArticles->slice(3)->take(2) as $article)

                        <div class="featured_item_1 fi1_sm">
                                    <img src="{{$article->article->Avatar}}" alt=""/>
                                    <div class="fi1_content">
                                        <div class="fi1c_categories">
                        <a href="{{Route('categories.show',$article->article->Category->slug)}}" class="cats blues2">{{$article->article->Category->nom}}</a>
                                        </div>
                                        <h2><a href="{{Route('news.show',$article->article->tag)}}">{{$article->article->titre}}</a></h2>
                                        <div class="fi1c_meta clearfix">
                                            <span class="fi1cm_author">By <a href="{{Route('editors.show',$article->article->Creator->slug)}}">{{$article->article->Creator->Full_Name}}</a></span>
                                            <span class="fi1cm_date font-italic"><a href="#">{{$article->article->DateActu}}</a></span>
                                        </div>
                                    </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>